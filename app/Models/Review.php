<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda
    protected $table = 'contacts';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['name', 'email', 'phone', 'message'];

    // Mengizinkan pengaturan timestamps
    public $timestamps = true;
}