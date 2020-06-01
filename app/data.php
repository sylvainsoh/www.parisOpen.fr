<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'identifiant',
        'nom',
        'valeur',
        'id_upload'
    ];
    public function upload()
    {
        return $this->belongsTo('App\upload','id_upload');
    }
}
