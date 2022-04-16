<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->index('slug');
            $table->string('image')->nullable();
        });

        DB::table('language')->insert([
            [
                'name' => 'TR',
                'slug' => 'tr'
            ],
            [
                'name' => 'ENG',
                'slug' => 'en'
            ],
            [
                'name' => 'FR',
                'slug' => 'fr'
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
        Schema::dropIfExists('language');
    }
}
