<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voirie_id');
            $table->foreign('voirie_id')->references('id')->on('ad_voiries');
            $table->string('type_dependance');
            $table->string('type_amenagement');
            $table->date('date_amenagement');
            $table->string('amenageur');
            $table->string('etat_exploitation');
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
        Schema::dropIfExists('dependances');
    }
}
