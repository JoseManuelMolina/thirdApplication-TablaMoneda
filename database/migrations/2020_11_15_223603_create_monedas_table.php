<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //create table
    {
        Schema::create('moneda', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('simbolo',10);
            $table->string('pais',30);
            $table->decimal('cambio',4,2);
            $table->date('fechaCreacion')->nullable($value = true);
            //$table->timestamps();
            
            $table->unique('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //drop table
    {
        Schema::dropIfExists('moneda');
    }
}
