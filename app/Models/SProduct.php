<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SProduct extends Model
{
    use HasFactory;

    protected $primaryKey = 'CODEPRODUIT';
     // Indiquer que la clé primaire n'est pas auto-incrémentée
     public $incrementing = false;

    protected $fillable=['prix','NOM',
    'CODEPRODUIT',
    'CODE_Sousproduit',
    'design',
    'prixachat',
    'codebare',
    'idfamille',
    'Ifusociete',
    'CodeManuel',
    'FamilleProd'];


    protected $table = 'sproduit';

    public $timestamps = false; // disable timestamps

    public function Produit(){
        return $this->hasOne(Product::class,'CODEPRODUIT');
    }
    
}
