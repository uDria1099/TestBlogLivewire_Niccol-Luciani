<?php

namespace App\Models;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];

    public function travels(){
        return $this->hasMany(Travel::class);
    }
}
