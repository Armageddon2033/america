<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesPresidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('president_state', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();

            // Foreign keys
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('president_id');

            // Timestamps (created_at & updated_at)
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
        Schema::dropIfExists('states_presidents');
    }
}
