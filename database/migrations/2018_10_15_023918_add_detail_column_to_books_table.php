<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailColumnToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //给books表添加detail字段
        Schema::table('books', function (Blueprint $table) {
            $table->text('detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删除detail字段
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('detail');
        });
    }
}
