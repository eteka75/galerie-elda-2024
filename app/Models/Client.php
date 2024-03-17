<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

     protected $primaryKey = 'IDClient';

     public $timestamps = false; // disable timestamps

     // Register the 'creating' event to generate idFournisseur value
    /*protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('IDClient', 'desc')->first();

            // If there is a last record, increment the IDClient
            if ($lastRecord) {
                $model->IDClient= $lastRecord->IDClient + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->IDClient = 1;
            }
        });
    }*/

    protected $fillable=['CLIENT','ifu','TEL','adresse','Ifusociete','totaldette','totalRemb','Solde','email','CpteGal'];

    public static function findById($id){
        return self::where('IDClient',$id)->first();
    }
    public static function countClient(){
        $data=Client::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
