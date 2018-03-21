<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class AdminUser
 */
class AdminUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin_user';

    protected $primaryKey = 'user_id';

    public $timestamps = false;

    protected $fillable = [
        'user_name',
        'email',
        'password',
        'ec_salt',
        'add_time',
        'last_login',
        'last_ip',
        'action_list',
        'nav_list',
        'lang_type',
        'agency_id',
        'suppliers_id',
        'todolist',
        'role_id'
    ];

    protected $guarded = [];
}
