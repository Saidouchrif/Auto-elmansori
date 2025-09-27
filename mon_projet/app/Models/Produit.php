<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    
    protected $table='Produits';

    protected $primaryKey='id_produit';

    protected $fillable=['Nom_produit','description','prix_produit','Stock','id_categorie','id_fournisseur'];

    public function categorie(){
        return $this->belongsTo(Categorie::class,'id_categorie','id_categorie');
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class,'id_fournisseur','id_fournisseur');
    }
    public function vente(){
        return $this->hasMany(Vente::class,'id_produit','id_produit');
    }
    
}
