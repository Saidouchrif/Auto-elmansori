<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $table='Fournisseurs';

    protected $primaryKey='id_fournisseur';

    protected $fillable=['Nom_fournisseur','Contact','adresse'];

    public function produit(){
        return $this->hasMany(Produit::class,'id_fournisseur','id_fournisseur');
    }
}
