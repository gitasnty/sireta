<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_documents', function (Blueprint $table) {
            $table->id();
            $table->string('doc_number');
            // $table->foreignId('id_unit_kerja')->constrained('users');
            // $table->foreignId('id_type_doc')->constrained('type_documents');
            // $table->foreignId('id_standar')->constrained('standars');
            // $table->foreignId('id_periode')->constrained('periodes');
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
        Schema::dropIfExists('main_documents');
    }
}
