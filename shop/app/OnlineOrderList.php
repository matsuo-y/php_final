<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineOrderList extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_order_list';

    /**
     * ID
     */
    protected $primaryKey = 'LIST_NO';
}
