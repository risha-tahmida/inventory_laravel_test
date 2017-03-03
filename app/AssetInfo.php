<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asset_infos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['assetName', 'assetImage','assetManufacturer','asset_categories_id','asset_type_setups_id', 'warranty', 'assetPurchaseDate', 'assetQuantity', 'assetType', 'categoryType'];

    public function asset_categories() //this name should be identical to the model name
    {
        return $this->belongsTo('App\AssetCategory');

    }
    public function asset_type_setups() //this name should be identical to the model name
    {
        return $this->belongsTo('App\AssetTypeSetup');

    }
}
