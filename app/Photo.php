<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = "/iamges/";

    protected $fillable=[
        'file'
    ];

    public function getFileAttribute($photo){
        return $this->uploads.$photo;
    }
}
