<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdVoiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_voiries', function (Blueprint $table) {
            $table->id();
            $table->string('nomcommune');
            $table->string('titre');
            $table->text('description');
            $table->string('nomresponsable');
            $table->string('ville');
            $table->bigInteger('x');
            $table->bigInteger('y');
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
        Schema::dropIfExists('ad_voiries');
    }
}
