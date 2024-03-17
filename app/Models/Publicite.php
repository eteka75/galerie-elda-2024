<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicite extends Model
{
    use HasFactory;
    protected $table = 'publicite';

     protected $primaryKey = 'IDPUBLICITE';

     public $timestamps = false; // disable timestamps

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::orderBy('IDPUBLICITE', 'desc')->first();

            if ($lastRecord) {
                $model->IDPUBLICITE = $lastRecord->IDPUBLICITE + 1;
            } else {
                // If no records exist yet, set the initial value
                $model->IDPUBLICITE = 1;
            }
        });
    }

    protected $fillable=['Description', 'PhotoPub', 'imgPathLink','imgPath'];


    public static function countPublicite(){
        $data=Publicite::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
