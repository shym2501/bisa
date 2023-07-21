<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_setting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('setting_id');
            $table->string('account');
            $table->string('name');
            $table->boolean('is_main')->default(0);
            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('bank')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('setting_id')->references('id')->on('settings')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_setting');
    }
}
