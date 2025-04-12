<?php

namespace App\Models;

use App\Models\User;
use App\Models\Continent;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['title', 'description', 'image', 'continent_id'];

    public function continent(){
        return $this->belongsTo(Continent::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
