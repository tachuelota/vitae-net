<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            //attributes
            $table->increments('id');
            $table->timestamps();
            $table->string('student_name');
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('medical_record_number');
            $table->string('reason');
            $table->decimal('temperature', 5, 2);
            $table->integer('bp_over');
            $table->integer('bp_under');
            $table->integer('apical_pulse');
            $table->integer('respiration');
            $table->integer('oximetry');
            $table->boolean('automatic');
            $table->string('allergies')->nullable();
            $table->string('loc')->nullable();
            $table->string('orientation')->nullable();
            $table->string('speech')->nullable();
            $table->string('behavior')->nullable();
            $table->string('memory')->nullable();
            $table->string('pupillary')->nullable();
            $table->string('pupil_size')->nullable();
            $table->string('pupil_shape')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('pain_scale')->nullable();
            $table->string('pain_location')->nullable();
            $table->string('pain')->nullable();
            $table->string('skincolor')->nullable();
            $table->string('skintemp')->nullable();
            $table->string('hydration')->nullable();
            $table->string('integrity')->nullable();
            $table->string('dressings')->nullable();
            $table->string('ivsite')->nullable();
            $table->string('centrallines')->nullable();
            $table->string('heartrhythm')->nullable();
            $table->string('radial')->nullable();
            $table->string('capillary')->nullable();
            $table->string('right_upper')->nullable();
            $table->string('left_upper')->nullable();
            $table->string('right_breath')->nullable();
            $table->string('left_breath')->nullable();
            $table->string('cough')->nullable();
            $table->string('secretions')->nullable();
            $table->string('supplemental')->nullable();
            $table->string('liters_per_minute')->nullable();
            $table->string('diet')->nullable();
            $table->string('nausea')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('bowel')->nullable();
            $table->string('stool')->nullable();
            $table->string('tubefeeding')->nullable();
            $table->string('genitourinary')->nullable();
            $table->string('urine')->nullable();
            $table->string('motion')->nullable();
            $table->string('muscle')->nullable();
            $table->string('right_pedal')->nullable();
            $table->string('left_pedal')->nullable();
            $table->string('right_lower')->nullable();
            $table->string('left_lower')->nullable();
            $table->string('peripheral')->nullable();
            $table->string('calf')->nullable();
            $table->string('ted')->nullable();
            $table->string('drainage')->nullable();
            $table->string('activity')->nullable();
            //keys
            $table->foreign('medical_record_number')
                ->references('medical_record_number')
                ->on('patients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
