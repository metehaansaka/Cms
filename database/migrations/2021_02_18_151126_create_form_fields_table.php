<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->integer('required')->nullable();
            $table->integer('sorted')->nullable();
        });

        DB::table('form_fields')->insert([
        [
            'type' => 'Yazı Kutusu',
            'required' => 1,
            'sorted' => 1
        ],
        [
            'type' => 'Email Kutusu',
            'required' => 1,
            'sorted' => 2
        ],
        [
            'type' => 'Geniş Yazı Alanı',
            'required' => 1,
            'sorted' => 3
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
        Schema::dropIfExists('form_fields');
    }
}
