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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('sra');
            $table->date('suspension_date')->nullable();
            $table->string('office_order_no')->nullable();
            $table->integer('suspension_days')->nullable();
            $table->string('email')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('case_officer')->nullable();
            $table->string('sra_contact')->nullable();
            $table->string('worker_lasname')->nullable();
            $table->string('worker_firstname')->nullable();
            $table->string('worker_middlename')->nullable();
            $table->string('atnsia_case_id')->nullable();
            $table->string('cr_no')->nullable();
            $table->text('office_address')->nullable();
            $table->string('nature_of_complaint')->nullable();
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
        Schema::dropIfExists('cases');
    }
};
