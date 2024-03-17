<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['PRODUIT',
    'NOM',
    'QteTappro',
    'stock',
    'NumeroOpportunite',
    'PrixOpportunite',
    'Description','imgPathLink','CodeManuel','CODEPRODUIT','imgPath'];


    protected $table = 'produit';

    protected $primaryKey = 'CODEPRODUIT';

    public $timestamps = false; // disable timestamps
     // Indiquer que la clé primaire n'est pas auto-incrémentée
     public $incrementing = false;

    public static function getAllProduct(){
        return Product::select('s.NOM', 'PRODUIT', 'ID', 'produit.CODEPRODUIT', 'imgPathLink', 'stock', 'produit.CodeManuel', 'prix', 'prixachat', 'QteTappro', 'QteTvente', 'PrixOpportunite')
            ->join('sproduit as s', 'produit.CODEPRODUIT', '=', 's.CODEPRODUIT')
            ->whereNotNull('imgPathLink')
            ->where('imgPathLink', '!=', '')
            // ->where('produit.CODEPRODUIT', '=','P00000001')
            ->get();
    }
    public static function countProduct(){
        $data=Product::select('s.NOM', 'ID', 'produit.CODEPRODUIT', 'imgPathLink', 'stock', 'produit.CodeManuel', 'prix', 'prixachat', 'QteTappro', 'QteTvente')
            ->join('sproduit as s', 'produit.CODEPRODUIT', '=', 's.CODEPRODUIT')
            ->whereNotNull('imgPathLink')
            // ->where('produit.CODEPRODUIT', '=','P00000001')
            ->where('imgPathLink', '!=', '')->get()->count();
        if($data){
            return $data;
        }
        return 0;
    }

    public function Infos(){
        return $this->hasOne(SProduct::class,'CODEPRODUIT');
    }
}
