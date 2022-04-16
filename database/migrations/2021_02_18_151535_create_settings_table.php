<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('language_id')->nullable();
            $table->index('language_id');
            $table->string('logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('default_banner')->nullable();
            $table->tinyInteger('default_lang')->nullable()->default(0);
            $table->json('special_fields')->nullable();

            $table->foreign('language_id')->references('slug')->on('language');
        });

        DB::table('settings')->insert([
            [
                'language_id' => 'tr',
                'default_lang' => 1
            ],
            [
                'language_id' => 'en',
                'default_lang' => 0
            ],
            [
                'language_id' => 'fr',
                'default_lang' => 0
            ]
        ]);
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
