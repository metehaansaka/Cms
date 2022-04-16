<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFormLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_language', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')->nullable();
            $table->string('language_slug')->nullable();
            $table->index('language_slug');
            $table->string('name')->nullable();
            $table->string('description')->nullable();

            $table->foreign('language_slug')->references('slug')->on('language');
        });

        DB::table('form_language')->insert([
            [
                'form_id' => 1,
                'language_slug' => 'tr',
                'name' => 'İletişim Formu',
                'description' => 'İletişim Formu'
            ],
            [
                'form_id' => 1,
                'language_slug' => 'en',
                'name' => 'Contact Form',
                'description' => 'Contact Form'
            ],
            [
                'form_id' => 1,
                'language_slug' => 'fr',
                'name' => 'Formulaire de contact',
                'description' => 'Formulaire de contact'
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
        Schema::dropIfExists('form_language');
    }
}
