<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_requisitions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('employeeName');
            $table->string('employeeDesignation');
            $table->string('employeeDepartment');
            $table->date('requisitionDate');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asset_requisitions');
    }
}
