<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'isi',
        'visi',
        'misi',
        'nilai_perusahaan',
        'project_complete',
        'happy_client',
        'awards_winning',
        'success_rate',
    ];
}
