<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('branch');
            $table->enum('acad_year', ['First Year', 'Second Year', 'Third Year', 'Fourth Year']);
            $table->enum('higher_studies', ['Yes', 'No']);
            $table->enum('work_after_grad', ['Yes', 'No']);
            $table->text('no_work_then_what');
            $table->enum('intrested_domain', ['Data Science', 'Machine Learning', 'Cloud Computing', 'Web Development', 'Artifical Inteligence', 'Data Analyst', 'DevOps Engineering', 'Testing Automation']);
            $table->enum('rate_skills', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->enum('carreer_guidance', ['Yes', 'No']);
            $table->text('message');
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
        Schema::dropIfExists('communities');
    }
}
