<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetTypeSetup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asset_type_setups';

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
    protected $fillable = ['assetTypeName', 'assetTypeCode', 'assetTypeDescription'];

    public function ts()
    {
        return $this->hasMany('App\AssetInfo');
    }
    
}
