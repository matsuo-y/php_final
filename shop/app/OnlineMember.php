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
     * 作成日
     */
    const CREATED_AT = 'REGISTER_DATE';
    
    /**
     * 更新日
     */
    const UPDATED_AT = 'LAST_UPD_DATE';

    /**
     * 更新不可項目
     */
    protected $guarded = ['MEMBER_NO', 'REGISTER_DATE'];
}
