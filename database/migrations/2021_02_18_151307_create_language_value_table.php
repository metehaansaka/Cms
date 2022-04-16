<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLanguageValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_value', function (Blueprint $table) {
            $table->id();
            $table->string('language_slug')->nullable();
            $table->index('language_slug');
            $table->longText('language_key')->nullable();
            $table->longText('language_value')->nullable();

            $table->foreign('language_slug')->references('slug')->on('language');
        });

        DB::table('language_value')->insert([
            [
                'language_slug' => 'tr',
                'language_key' => 'Gönder',
                'language_value' => 'Gönder'
            ],
            [
                'language_slug' => 'en',
                'language_key' => 'Gönder',
                'language_value' => 'SEND'
            ],
            [
                'language_slug' => 'fr',
                'language_key' => 'Gönder',
                'language_value' => 'Envoyer'
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
        Schema::dropIfExists('language_value');
    }
}
