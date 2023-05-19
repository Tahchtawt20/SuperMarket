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
            $table->string('categorie');
            $table->integer('Quantité');
            $table->char('Unité');
            $table->date('Date_liv');
            $table->decimal('Prix_achat',10,2);
            $table->decimal('Prix_vente',10,2);
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
