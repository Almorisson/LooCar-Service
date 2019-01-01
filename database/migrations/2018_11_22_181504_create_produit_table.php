<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marque', '255')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('image')->nullable(false)->default(str_random(10));
            $table->unsignedDecimal('prix', '10', '2');
            $table->unsignedInteger('vitesse')->default(0);
            $table->unsignedInteger('nbJoursReserves')->default(0);
            $table->enum('disponibilite', ['on', 'off'])->default('off');
            $table->timestamps();
        });

        Schema::table('produit', function(Blueprint $table) {

            $table->unsignedInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('category');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produit', function (Blueprint $table)
        {
            $table->dropForeign(['category_id']);
        });

        Schema::dropIfExists('produit');
    }
}
