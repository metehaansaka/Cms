<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpecialBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('block_key')->nullable();
        });

        DB::table('special_blocks')->insert([
            [
                'name' => 'Sayfalar',
                'block_key' => 'PagesController@index'
            ],
            [
                'name' => 'İletişim',
                'block_key' => 'ContactController@index'
            ],
            [
                'name' => 'Blok',
                'block_key' => 'BaseController@block'
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
        Schema::dropIfExists('special_blocks');
    }
}
