<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'description',
        'producteur',
        'licence',
        'user_id',
        'categorie_id',
    ];

    public function categorie()
    {
        return $this->belongsTo('App\categorie','categorie_id');
    }
    public function datas()
    {
        return $this->hasMany('App\Data', 'id_upload');
    }
}
