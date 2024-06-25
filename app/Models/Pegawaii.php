<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawaii extends Model
{
    use HasFactory;

    protected $table = 'pegawaii';
    protected $fillable = ['nama','alamat'];
}
