<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->json('image_info')->nullable();
            $table->integer('sorted')->nullable();
            $table->integer('create_time')->nullable();
            $table->integer('block_id')->nullable();
            $table->integer('form_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('update_time')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('top_menu')->nullable();
            $table->longText('special')->nullable();
            $table->longText('url')->nullable();
            $table->integer('home_page')->nullable();
        });

        DB::table('category')->insert([
            'sorted' => 999,
            'image_info' => '{"image":{"name":null,"desc":null,"alt":null},"image2":{"name":null,"desc":null,"alt":null},"image3":{"name":null,"desc":null,"alt":null}}',
            'create_time' => 1605536541,
            'block_id' => 1,
            'form_id' => 0,
            'status' => 1,
            'parent_id' => 0,
            'top_menu' => 1,
            'home_page' => 0
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
