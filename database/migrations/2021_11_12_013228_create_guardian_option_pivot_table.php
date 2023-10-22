<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianOptionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardian_options', function (Blueprint $table) {
            $table->unsignedBigInteger('guardian_id')->index();
            $table->foreign('guardian_id')->references('id')->on('guardians');
            $table->unsignedBigInteger('option_id')->index();
            $table->foreign('option_id')->references('id')->on('options');
            $table->primary([ 'guardian_id','option_id']);
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
        Schema::dropIfExists('guardian_option_pivot');
    }
}
