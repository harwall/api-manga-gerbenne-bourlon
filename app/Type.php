<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";

    protected $fillable = ["name"];

    protected $visible = ["id","name","mangas"];

    public function mangas()
    {
        return $this->belongsToMany('App\Manga')->withTimestamps();
    }
}
