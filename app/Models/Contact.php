<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';

     protected $primaryKey = 'ID';

     public $timestamps = false; // disable timestamps

     // Register the 'creating' event to generate idFournisseur value
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('ID', 'desc')->first();

            // If there is a last record, increment the idFournisseur value
            if ($lastRecord) {
                $model->ID = $lastRecord->ID + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->ID = 1;
            }
        });
    }

    protected $fillable=['Nom','Prenom','Adresse','TEL', 'email','message','objet'];

   
    public static function countContact(){
        $data=Contact::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
