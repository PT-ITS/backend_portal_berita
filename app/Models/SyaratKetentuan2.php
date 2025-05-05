<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratKetentuan2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'isi',
    ];
}
