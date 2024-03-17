<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table = 'fournisseur';

     protected $primaryKey = 'idfournisseur';

     public $timestamps = false; // disable timestamps

     // Register the 'creating' event to generate idFournisseur value
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('idfournisseur', 'desc')->first();

            // If there is a last record, increment the idFournisseur value
            if ($lastRecord) {
                $model->idfournisseur = $lastRecord->idfournisseur + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->idfournisseur = 1;
            }
        });
    }

    protected $fillable=['Fournisseur','idfournisseur','IFU','TEL','Adresse','Ifusociete','CpteGal'];

    public static function findById($id){
        return self::where('idfournisseur',$id)->first();
    }
    public static function countFournisseur(){
        $data=Fournisseur::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
