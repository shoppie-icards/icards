<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Merchants extends Model
{
    protected $table  = "merchants";

    public static function storeMerchant($datCreateCard) {
    	$merchants = new Merchants;
    	$merchants->users_id = Auth::user()->id;
    	$merchants->name = $datCreateCard['trademark'];
    	$merchants->save();
    	if ($merchants != null) {
    		return true;
    	} else {
    		return false;
    	}
    }
}
