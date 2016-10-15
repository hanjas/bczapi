<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {
	
	public function project() {
		return $this->belongsTo('App\Project');
	}
    
    public function feeds() {
        return $this->morphMany('App\Feed', 'feedable');
    }
	
}
