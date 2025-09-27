<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id('id_produit');
            $table->string('Nom_produit');
            $table->string('description');
            $table->string('prix_produit');
            $table->string('Stock');
            $table->unsignedBigInteger('id_categorie');
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories')->onDelete('cascade');
            $table->foreign('id_fournisseur')->references('id_fournisseur')->on('fournisseurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
