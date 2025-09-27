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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id('id_vente');
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_produit')->references('id_produit')->on('produits')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->date('date_vente');
            $table->integer('quantite');
            $table->decimal('prix_total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
