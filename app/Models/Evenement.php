<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $table = 'evenements';

     protected $primaryKey = 'IDEVENEMENTS';

     public $timestamps = false; // disable timestamps

     // Register the 'creating' event to generate idFournisseur value
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('IDEVENEMENTS', 'desc')->first();

            // If there is a last record, increment the idFournisseur value
            if ($lastRecord) {
                $model->IDEVENEMENTS = $lastRecord->IDEVENEMENTS + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->IDEVENEMENTS = 1;
            }
        });
    }

    protected $fillable=['IDEVENEMENTS','DETAILS','HEURE','date','Identifiant','Ifusociete'
];

   
    public static function countEvenement(){
        $data=Evenement::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
