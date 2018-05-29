<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $table = "mangas";


    protected $fillable = [
        "english_name","synonyme","japanese_name","synopsis","published_at","volumes","chapters","country","authors","status"
    ];

    protected $visible = [
        "id","english_name","synonyme","japanese_name","synopsis","last_publication", "next_publication", "volumes","chapters","country","authors","status","types","sellers","price", "cover_picture"
    ];
    public function types()
    {
        return $this->belongsToMany('App\Type')->withTimestamps();
    }
    
    // One manga can be sold by multiple editor or persons
    public function sellers()
    {
        return $this->belongsToMany('App\Seller')->withTimestamps()->withPivot('price');
    }

}
