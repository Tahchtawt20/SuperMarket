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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Prod');
            $table->integer('Quantité');
            $table->char('Unité');
            $table->date('Date_liv');
            $table->integer('Prix_achat');
            $table->integer('Prix_vente');
            $table->date('Date_exp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
