<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'nomCategorie'
    ];
    public function uploads()
    {
        return $this->hasMany('App\upload', 'categorie_id');
    }
}
