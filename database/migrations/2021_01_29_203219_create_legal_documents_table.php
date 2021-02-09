<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('regulation_id');

            $table->string('nro_norma', 50);
            $table->string('ano', 4);
            $table->string('decreto', 50);
            $table->string('descripcion', 250);
            $table->string('file');

            $table->timestamps();

            $table->foreign('regulation_id')->references('id')->on('regulations')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_documents');
    }
}
