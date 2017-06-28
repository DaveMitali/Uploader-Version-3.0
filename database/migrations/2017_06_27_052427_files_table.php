<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_table', function (Blueprint $table) {
            $table->increments('ID')->unique();
            $table->string('File_Name');
            $table->string('Project_Name');
            $table->string('Project_Lead_Name');
            $table->string('File_Description');
            $table->string('Share_Type');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files_table');
    }
}
