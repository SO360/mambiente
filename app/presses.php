<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presses extends Model {
	protected $table = 'presses';

	protected $fillable = [
		'url_title_id', 'url_image_id', 'slug', 'title', 'description', 'type_id', 'status', 'url_string',
	];

	public function imagenDepotTitle_link() {
		return $this->belongsTo(image_depots::class, 'url_title_id');
	}
	public function imagenDepotContent_link() {
		return $this->belongsTo(image_depots::class, 'url_image_id');
	}
}
