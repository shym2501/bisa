<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('phone_hours');
            $table->text('about')->nullable();
            $table->string('address')->nullable();
            $table->char('postal_code', 5)->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('path_image')->nullable();
            $table->string('path_image_header')->nullable();
            $table->string('path_image_footer')->nullable();
            $table->string('company_name');
            $table->string('short_description');
            $table->string('keyword');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('fanpage_link');
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
        Schema::dropIfExists('settings');
    }
}
