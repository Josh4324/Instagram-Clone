<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
        return  ($this->image) ? '/storage/' . $this->image : "https://res.cloudinary.com/josh4324/image/upload/v1593809558/default-profile_mb0bbd.jpg"; 
    }
    
}
