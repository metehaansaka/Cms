<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFormFieldsValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields_value', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')->nullable();
            $table->integer('field_id')->nullable();
        });

        DB::table('form_fields_value')->insert([
            [
                'form_id' => 1,
                'field_id' => 1
            ],
            [
                'form_id' => 1,
                'field_id' => 3
            ],
            [
                'form_id' => 1,
                'field_id' => 2
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
        Schema::dropIfExists('form_fields_value');
    }
}
