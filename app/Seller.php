<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = "sellers";

    protected $fillable = [
        "name"
    ];

    protected $visible = [
        "id","name","price","mangas","pivot"
    ];

    public function mangas()
    {
        return $this->belongsToMany('App\Manga')->withTimestamps();
    }
    
}
