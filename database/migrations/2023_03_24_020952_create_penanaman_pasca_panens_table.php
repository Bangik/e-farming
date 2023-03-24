<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenanamanPascaPanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanaman_pasca_panens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lahan_id')->constrained('lahan')->onDelete('cascade');
            $table->date('tanggal_tanam');
            $table->date('tanggal_panen');
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
        Schema::dropIfExists('penanaman_pasca_panens');
    }
}
