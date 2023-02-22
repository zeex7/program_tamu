<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = "Tamu";
    protected $guarded = ['id'];
    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'id_kategori','id');
    }
}
