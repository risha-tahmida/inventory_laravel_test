<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetTypeSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_type_setups', function(Blueprint $table) {
            $table->increments('id');
            $table->string('assetTypeName');
            $table->string('assetTypeCode');
            $table->text('assetTypeDescription');
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
        Schema::drop('asset_type_setups');
    }
}
