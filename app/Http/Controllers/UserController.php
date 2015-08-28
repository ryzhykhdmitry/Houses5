<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Mail;
use URL;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    // Create login page
    public function getLogin()
    {
        return view('login.login');
    }
    // Create forgot page
    public function getForgot()
    {
        return view('login.forgot');
    }
    /**
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'email'    => 'required|email|min:6',
            'password' => 'required|min:6'
        ]);

        $remember = ($request->has('remember')) ? true : false;
        Auth::attempt([ 'email' => $data['email'], 'password' => $data['password'], 'active' => 1], $remember);

        if (!Auth::check()) {
            return redirect('login')->with('global', 'Неверный пароль, аккаунт не активирован, либо такого аккаунта не существует');
            }
        return redirect('/');

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    /* Create registration page */

    public function getRegistration()
    {
        return view('registration.registration');
    }

    // Take data from registration form and make magic

    public function postRegistration(Request $request)
    {

        $data = $request->all();

        $this->validate($request, [
            'username'        => 'required|max:30|unique:users',
            'email'           => 'required|email|min:6|unique:users',
            'password'        => 'required|min:6|max:60|same:repeat_password',
            'repeat_password' => 'required|max:60|min:6'
        ]);

        $code = str_random(60);
        $user = User::register($data, $code);


        // If user successfully created
        if ($user) {
            Mail::send('emails.auth.activation', ['link'  => URL::route('activate', $code), 'username' => $data['username']], function($message) use ($data) {
                  $message->to($data['email'], $data['username'])->subject('Активируйте свой аккаунт');
                  });
            return redirect('/')->with('global', 'Аккаунт был успешно создан. Мы отправили вам e-mail для продолжения регистрации');
        }
        return redirect()->back()->with('global', 'Ошибочка! Попробуйте еще раз');
    }

    // Account activation by code
    public function getActivate($code)
    {
        $user = User::where('activation_code', '=', $code)->where('active', '=', 0);

        if ($user->count()) {
            $user = $user->first();

            //Update user to active
            $user->active = 1;
            $user->activation_code = '';
            if ($user->save()) {
                return redirect('/')
                       ->with('global', 'Ваш аккаунт был успешно активирован!');
            }
        }
        //If activation failed
        return redirect('/')
               ->with('global', 'При активации вашего аккаунта возникла ошибка. Попробуйте активировать его позже.');
     }

    // Create account page
    public function getAccount()
    {
        return view('account.account');
    }

    // Account functionality: change password
    public function postAccount(Request $request)
    {

        $data = $request->all();

        $this->validate($request, [
            'old_password'    => 'required|min:6|max:60',
            'password'        => 'required|min:6|max:60|same:repeat_password',
            'repeat_password' => 'required|max:60|min:6'
        ]);

        $old_password = $data['old_password'];
        $password     = $data['password'];
        $user = User::find(Auth::user()->id);

        if (Hash::check($old_password, $user->getAuthPassword()))
           {
               $user->password = Hash::make($password);
               $user->save();
               return redirect('account')->with('global', 'Ваш пароль успешно изменен');
           }
        else{return redirect()->back()->with('global', 'Старый пароль введен не верно');}

    }

    //Grab forgot page input. Send password and code by email
    public function postForgot(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $user = User::where('email', '=', $request->get('email'));

            if ($user->count()) {

                $user = $user->first();

                //Generate new password and code
                $code = str_random(60);
                $password = str_random(10);

                $user->activation_code = $code;
                $user->password_temp = Hash::make($password);

                if ($user->save()) {
                    Mail::send('emails.auth.recover', ['link'  => URL::route('recover', $code), 'password' => $password, 'username' => $user['username']], function($message) use ($data, $user) {
                        $message->to($data['email'], $user['username'])->subject('Восстановление пароля'); });
                }
                return redirect('forgot')->with('global', 'Мы отправили новый пароль и инструкцию по активации на ваш email');

            }
        return redirect('forgot')->with('global', 'В данный момент, пароль не может быть восстановлен');
    }


    // Password recover by email
    public function getRecover($code)
    {
        $user = User::where('activation_code', '=', $code);

        if ($user->count()) {
            $user = $user->first();

            //Update password, delete old data
            $user->password = $user['password_temp'];
            $user->password_temp = '';
            $user->activation_code = '';

            if ($user->save()) {
                return redirect('/')
                    ->with('global', 'Новый пароль был успешно активирован. Вы можете зайти на аккаунт используя его.');
            }
        }
        //If activation failed
        return redirect('/')
            ->with('global', 'При активации нового пароля возникла ошибка. Попробуйте активировать его позже.');
    }


}

