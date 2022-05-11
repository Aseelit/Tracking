<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('report');
            $table->string('latitude')->nullable();//خطوط الطول
            $table->string('longitude')->nullable();//خطوط العرض
            $table->date('date');
            $table->foreignId('development_stages_project_id')->nullable()->references('id')->on('development_stages_projects')->cascadeOnDelete();
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
        Schema::dropIfExists('trackings');
    }
}
