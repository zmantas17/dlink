<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('clientID');
            $table->string('deviceSerialNumber');
            $table->string('date');
            $table->string('number');
            $table->boolean('status');
            $table->string('owner');
            $table->softDeletes();
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
        Schema::dropIfExists('demo_contracts');
    }
}
