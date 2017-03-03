<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assetName');
            $table->string('assetImage');
            $table->string('assetManufacturer');
            $table->integer('asset_categories_id')->unsigned();
            $table->foreign('asset_categories_id')
                ->references('id')->on('asset_categories');
            $table->integer('asset_type_setups_id')->unsigned();
            $table->foreign('asset_type_setups_id')
                ->references('id')->on('asset_type_setups');
            $table->text('warranty');
            $table->date('assetPurchaseDate');
            $table->integer('assetQuantity');
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
        Schema::drop('asset_infos');
    }
}
