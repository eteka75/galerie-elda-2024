<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;
    protected $table = 'parametre';

     protected $primaryKey = 'IDPARAMETRE';

     public $timestamps = false; // disable timestamps

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('IDPARAMETRE', 'desc')->first();

            // If there is a last record, increment the idFournisseur value
            if ($lastRecord) {
                $model->IDPARAMETRE = $lastRecord->IDPARAMETRE + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->IDPARAMETRE = 1;
            }
        });
    }

    protected $fillable=['Valeur','Ifusociete'];

    public static function findById($id){
        return self::where('IDPARAMETRE',$id)->first();
    }
    public static function countParametre(){
        $data=Parametre::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
