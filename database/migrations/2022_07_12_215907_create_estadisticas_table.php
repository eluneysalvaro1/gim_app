<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario')->nullable()->constrained('users' , 'id'); 
            $table->decimal('altura', 8, 2)->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->date('edad')->nullable();
            $table->integer('km_corridos')->nullable();
            $table->integer('km_bicicleta')->nullable();
            $table->integer('meses_entrenando')->nullable(); 
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
        Schema::dropIfExists('estadisticas');
    }
};
