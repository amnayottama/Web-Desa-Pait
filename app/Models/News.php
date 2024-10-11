<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'news';
    public $timestamps = false;
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'created'];
}
