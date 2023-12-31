<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas';
    protected $fillable = ['user_id','kategori_id','judul','isi','gambar'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
}
