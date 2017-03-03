<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class AssetCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asset_categories';

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
    protected $fillable = ['name', 'code', 'description'];

    public function category()
    {
        return $this->hasMany('App\AssetInfo');
    }
    
}
