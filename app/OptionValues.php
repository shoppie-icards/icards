<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValues extends Model
{
    protected $table = 'optionvalues';
    protected $primaryKey = 'id';

	protected $fillable = array('options_id', 'name');
	
}
