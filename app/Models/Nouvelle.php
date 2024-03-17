<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouvelle extends Model
{
    use HasFactory;
    protected $table = 'nouvelle';
    
    protected $primaryKey = 'idnouvelle';
    protected $fillable=['LibelleImage','Ifusociete','Description','imgPathLink','lien'];

     public $timestamps = false; // disable timestamps

     // Register the 'creating' event to generate idFournisseur value
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('idnouvelle', 'desc')->first();

            // If there is a last record, increment the 
            if ($lastRecord) {
                $model->idnouvelle = $lastRecord->idnouvelle + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->idnouvelle = 1;
            }
        });
    }


    public static function findById($id){
        return self::where('idnouvelle',$id)->first();
    }
    public static function countNouvelle(){
        $data=Nouvelle::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
