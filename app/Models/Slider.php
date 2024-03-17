<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';

     protected $primaryKey = 'ID';

     public $timestamps = false; // disable timestamps

    protected $fillable=['LibelleImage', 'Description'];

}
