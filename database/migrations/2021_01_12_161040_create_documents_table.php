<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('committe_id');

            $table->string('nro_norma', 50);
            $table->string('ano', 4);
            $table->string('descripcion', 250);
            $table->string('cod_norma', 50);
            $table->enum('type', ['obligatorio', 'gratuito']);
            $table->string('file');

            $table->timestamps();

            $table->foreign('committe_id')->references('id')->on('committes')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
