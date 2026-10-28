<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    // Kolom yang boleh diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'anggota_id');
    }
}
