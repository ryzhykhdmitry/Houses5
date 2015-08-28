<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
Use Auth;

class SocialiteController extends Controller
{
    //Facebook
    public function facebookLoginRequest()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('home');
        }

        $authUser = $this->findOrCreateUser($user, 'facebook_id');

        Auth::login($authUser, true);

        return redirect('/');

    }

    //Twitter
    public function twitterLoginRequest()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('home');
        }

        $authUser = $this->findOrCreateUser($user, 'twitter_id');

        Auth::login($authUser, true);

        return redirect('/');

    }

    private function findOrCreateUser($user, $card)
    {
        if ($authUser = User::where($card, $user->getId())->first()) {
            return $authUser;
        }

        return User::create([
            $card        => $user->getId(),
            'username'   => $user->getName(),
            'email'      => $user->getEmail(),
            'active'     => 1
        ]);
    }
}
