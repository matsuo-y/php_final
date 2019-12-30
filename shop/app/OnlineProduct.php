<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineProduct extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_product';

    /**
     * ID
     */
    protected $primaryKey = 'PRODUCT_CODE';
    protected $keyType = 'string';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';
}
