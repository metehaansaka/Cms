<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTaxonomyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxonomy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->index('category_id');
            $table->string('slug')->nullable();
            $table->string('language_slug')->nullable();   
            $table->index('language_slug');
            $table->integer('count')->nullable();
            $table->string('controller')->nullable();
            $table->integer('content_id')->nullable();

            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('language_slug')->references('slug')->on('language');
        });

        DB::table('taxonomy')->insert([
            [
                'category_id' => 1,
                'slug' => 'menu',
                'language_slug' => 'tr',
                'controller' => 'PagesController@index'
            ],
            [
                'category_id' => 1,
                'slug' => 'menu',
                'language_slug' => 'en',
                'controller' => 'PagesController@index'
            ],
            [
                'category_id' => 1,
                'slug' => 'menu',
                'language_slug' => 'fr',
                'controller' => 'PagesController@index'
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
        Schema::dropIfExists('taxonomy');
    }
}
