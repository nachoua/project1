<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFKProCus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_customer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produits_id')
            ->constrained('produits')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('customers_id')
            ->constrained('customers')
            ->onUpdate('cascade')
             ->onDelete('cascade');
            $table->string('name');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_customer');
    }
}
