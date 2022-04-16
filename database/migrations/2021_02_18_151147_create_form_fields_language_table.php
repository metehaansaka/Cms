<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFormFieldsLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields_language', function (Blueprint $table) {
            $table->id();
            $table->integer('fields_id')->nullable();
            $table->string('language_slug')->nullable();
            $table->index('language_slug');
            $table->string('name')->nullable();
            $table->string('options')->nullable();

            $table->foreign('language_slug')->references('slug')->on('language');
        });

        DB::table('form_fields_language')->insert([
        [
            'fields_id' => 1,
            'language_slug' => 'tr',
            'name' => 'Ad Soyad'
        ],
        [
            'fields_id' => 1,
            'language_slug' => 'en',
            'name' => 'Ad Soyad'
        ],
        [
            'fields_id' => 1,
            'language_slug' => 'fr',
            'name' => 'Ad Soyad'
        ],
        [
            'fields_id' => 2,
            'language_slug' => 'tr',
            'name' => 'Email'
        ],
        [
            'fields_id' => 2,
            'language_slug' => 'en',
            'name' => 'Email'
        ],
        [
            'fields_id' => 2,
            'language_slug' => 'fr',
            'name' => 'Email'
        ],        
        [
            'fields_id' => 3,
            'language_slug' => 'tr',
            'name' => 'Mesaj'
        ],
        [
            'fields_id' => 3,
            'language_slug' => 'en',
            'name' => 'Mesaj'
        ],
        [
            'fields_id' => 3,
            'language_slug' => 'fr',
            'name' => 'Mesaj'
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
        Schema::dropIfExists('form_fields_language');
    }
}
