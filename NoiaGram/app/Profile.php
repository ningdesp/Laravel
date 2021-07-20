<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; 

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/e9FbroIaxR8AMphaoCDJjOhuGRqi2eP5M5edqX0s.jpg';
        return '/storage/' . $imagePath;
    }
    

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }


    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
