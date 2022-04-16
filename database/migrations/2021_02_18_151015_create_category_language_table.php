<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoryLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_language', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->index('category_id');
            $table->string('language_slug')->nullable();
            $table->index('language_slug');
            $table->text('name')->nullable();
            $table->text('image')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->json('image_info')->nullable();
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->longText('seo_keywords')->nullable();
            $table->longText('description')->nullable();
            $table->longText('contents')->nullable();
            $table->longText('special_fields')->nullable();

            //foreign keys
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('language_slug')->references('slug')->on('language')->onDelete('cascade');
        });

        DB::table('category_language')->insert([
        [
            'category_id' => 1,
            'language_slug' => 'tr',
            'image_info' => '{"image":{"name":null,"desc":null,"alt":null},"image2":{"name":null,"desc":null,"alt":null},"image3":{"name":null,"desc":null,"alt":null}}',
            'name' => 'Menü'
        ],
        [
            'category_id' => 1,
            'language_slug' => 'en',
            'image_info' => '{"image":{"name":null,"desc":null,"alt":null},"image2":{"name":null,"desc":null,"alt":null},"image3":{"name":null,"desc":null,"alt":null}}',
            'name' => 'Menu'
        ],
        [
            'category_id' => 1,
            'language_slug' => 'fr',
            'image_info' => '{"image":{"name":null,"desc":null,"alt":null},"image2":{"name":null,"desc":null,"alt":null},"image3":{"name":null,"desc":null,"alt":null}}',
            'name' => 'Menu'
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
        Schema::dropIfExists('category_language');
    }
}
