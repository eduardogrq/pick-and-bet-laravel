<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Forecast extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 'event_date', 'forecast', 'category_id', 'premium'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

}
