<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('mode_paiement', ['Visa', 'MasterCard', 'Carte Bleue', 'Paypal', 'Chèque'])->nulllable(false);
            $table->timestamps();
        });

        Schema::table('panier', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('panier', function (Blueprint $table)
        {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('panier');
    }
}
