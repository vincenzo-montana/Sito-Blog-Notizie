<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable=['name'];
    use HasFactory;



    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
