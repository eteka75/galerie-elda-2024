<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;
    protected $table = 'famille';

     protected $primaryKey = 'ID';

     public $timestamps = false; // disable timestamps

    protected $fillable=['NOM','Ifusociete','CodeFamille','imgPathLink'];

    public static function countCategorie(){
        $data=Famille::get()->count();
        if($data){
            return $data;
        }
        return 0;
    }

}
