<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
	use SoftDeletes;

	protected $dates = ['delete_at'];
	protected $fillable = [
		'body'
	];
}
