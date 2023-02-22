<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "Kategori";
    protected $guarded = ['id'];
    public function tamu(){
        return $this->hasMany('App\Models\Tamu','id_kategori' ,'id');
    }
}
