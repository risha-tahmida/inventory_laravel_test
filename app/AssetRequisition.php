<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetRequisition extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asset_requisitions';

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
    protected $fillable = ['employeeName', 'employeeDesignation', 'employeeDepartment', 'requisitionDate', 'quantity'];

    
}
