<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;

class Users extends Model
{
    protected $table = 'users';

    public static function storeRegister($dataRegister, $token_active) {
    	$registerUser = new Users;
    	$registerUser->user_name = $dataRegister['username'];
    	$registerUser->email = $dataRegister['email'];
    	$registerUser->password = Hash::make($dataRegister['password']);
        $registerUser->token_active = $token_active;
    	$registerUser->active = 2;
    	$registerUser->save();

    	if ($registerUser != null) {
    		return true;
    	} else {
    		return false;
    	}
    }
}
