<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table='Categories';

    protected $primaryKey='id_categorie';

    protected $fillable=['Nom_categorie','description'];

    public function Produit(){
        return $this->hasMany(Produit::class,'id_categorie','id_categorie');
    }
}
