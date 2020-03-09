<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	public function profileImage(){
		$imagePath = $this->image ?? 'profile/ybQgGpXSYctAE4oH5pFqCykPXdkjuTiBwA4TMDUS.png';

		return '/storage/'.$imagePath;
	}

	public function followers(){
		return $this->belongsToMany(User::class);
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
