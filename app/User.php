<?php

namespace App;

use Auth;
use Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['facebook_id','twitter_id', 'username', 'email', 'password', 'active', 'permissions', 'activation_code', 'remember_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static function login($data, $remember)
    {
        if (Auth::attempt([ 'email' => $data['email'], 'password' => $data['password'], 'active' => 1], $remember))
        {
            return Auth::user();
        }
        else
        {
            return false;
        }
    }

    public static function register($data, $code)
    {
        try
        {
            // Create the user
            $user = User::create(array(
                'username'        => $data['username'],
                'email'           => $data['email'],
                'password'        => Hash::make($data['password']),
                'active'          => false,
                'permissions'     => false,
                'activation_code' => $code
            ));
            return $user;


        }
        catch(Exception $e)
        {
            return $e;
        }
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
