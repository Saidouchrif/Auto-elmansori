<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $table='Ventes';
    protected $primaryKey='id_vente';
    protected $fillable=['id_produit','id_user','date_vente','quantite','prix_total'];
    public function produit(){
        return $this->belongsTo(Produit::class,'id_produit','id_produit');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user','id_user');
    }
}
