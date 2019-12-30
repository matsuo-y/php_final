<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineOrder extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_order';

    /**
     * ID
     */
    protected $primaryKey = 'ORDER_NO';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';
}
