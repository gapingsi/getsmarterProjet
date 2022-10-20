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
        Schema::create('students', function (Blueprint $table) {
                $table->bigIncrements("id");
                $table->string("matricule");
                $table->string("first_name");
                $table->string("last_name");
                $table->string("email");
                $table->integer("contact");
                $table->string("level_of_studies");
                $table->string('roles');
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
        Schema::dropIfExists('student');
    }
};
