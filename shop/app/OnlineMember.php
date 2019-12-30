<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineMember extends Model
{
    /**
     * テーブル名
     */
    protected $table = 'online_member';

    /**
     * ID
     */
    protected $primaryKey = 'MEMBER_NO';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';
}
