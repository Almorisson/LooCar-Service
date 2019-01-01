<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierHasProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier_has_produit', function (Blueprint $table) {
            $table->unsignedInteger('panier_id');
            $table->unsignedInteger('produit_id');
        });


        Schema::table('panier_has_produit', function (Blueprint $table) {

            $table->foreign('produit_id')->references('id')->on('produit');
        });

        Schema::table('panier_has_produit', function (Blueprint $table) {

            $table->foreign('panier_id')->references('id')->on('panier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('panier_has_produit', function (Blueprint $table)
        {
            $table->dropForeign(['panier_id']);
        });

        Schema::table('panier_has_produit', function (Blueprint $table)
        {
            $table->dropForeign(['produit_id']);
        });

        Schema::dropIfExists('panier_has_produit');

    }
}
