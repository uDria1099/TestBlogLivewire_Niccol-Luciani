<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function travels(){
        return $this->belongsToMany(Travel::class);
    }
}
