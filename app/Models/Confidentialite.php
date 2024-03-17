<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confidentialite extends Model
{
    use HasFactory;

    protected $table="confidentialites";

    protected $fillable = [
        'titre',
        'paragraphe',
        'photo',
    ];
}
