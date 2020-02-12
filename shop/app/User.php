<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
