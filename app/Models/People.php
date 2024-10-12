<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'people';
    public $timestamps = false;
    protected $fillable = ['nama', 'nik', 'jk', 'alamat', 'pekerjaan'];
    public function job()
    {
        return $this->belongsTo(Job::class, 'pekerjaan', 'id');
    }
}
