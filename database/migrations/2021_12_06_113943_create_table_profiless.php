<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfiless extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // $table->foreign('profiles_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('students_id')
            ->constrained('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
            $table->integer('student_number')->unsigned();
            $table->string('email');
            $table->string('password');
            // $table->dropForeign(['profiles_id']);
            // $table->dropColumn('profiles_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');

    }
}
