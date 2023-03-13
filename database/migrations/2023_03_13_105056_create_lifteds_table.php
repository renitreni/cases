<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lifteds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cases_id')->constrained('cases');
            $table->string('office_order_no');
            $table->date('effective_date');
            $table->string('officer_in_charge');
            $table->text('remarks');
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
        Schema::dropIfExists('lifteds');
    }
};
