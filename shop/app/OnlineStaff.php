<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineStaff extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_staff';

    /**
     * ID
     */
    protected $primaryKey = 'STAFF_NO';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';
}
