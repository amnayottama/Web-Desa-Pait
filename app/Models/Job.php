<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'job';
    public $timestamps = false;
    protected $fillable = ['nama_pekerjaan', 'warna'];
    public function people()
    {
        return $this->hasMany(People::class, 'pekerjaan', 'id'); // 'pekerjaan' adalah kolom di tabel 'people' yang menyimpan id pekerjaan
    }
}
