<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePaketTanamAlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_tanam_alat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_tanam_id')->constrained('paket_tanam')->onDelete('cascade');
            $table->foreignId('alat_bahan_id')->constrained('alat_bahan')->onDelete('cascade');
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
        Schema::dropIfExists('table_paket_tanam_alat');
    }
}
