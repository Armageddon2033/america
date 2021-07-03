<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresidentPartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_president', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();

            // Foreign keys
            $table->unsignedInteger('president_id');
            $table->unsignedInteger('party_id');

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
        Schema::dropIfExists('president_party');
    }
}
