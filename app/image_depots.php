<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_depots extends Model {
	//
	protected $table = 'image_depots';

	protected $fillable = [
		'path', 'slug', 'type_id', 'status',
	];
}
