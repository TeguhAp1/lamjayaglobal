<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_kelurahan extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama_kelurahan', 'status'];
}
