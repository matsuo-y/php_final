<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineCategory extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_category';

    /**
     * ID
     */
    protected $primaryKey = 'CTGR_ID';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';
}
