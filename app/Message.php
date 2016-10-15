<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {
	
	use SoftDeletes;
	
	protected $fillable = ['message'];

	public function chat() {
		return $this->belongsTo('App\Chat');
	}
	
	public function user() {
		return $this->belongsTo('App\User');
	}
	
}
