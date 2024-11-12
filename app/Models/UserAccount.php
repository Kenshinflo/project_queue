<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;
    protected $table = 'user_account';

    // Specify which columns are fillable
    protected $fillable = [
        'user_id',
        'password',
        'user_name',
        // 'suspend',
        // 'ls_code',
        // 'user_ctl_flag',
        // 'user_ctl_flag1',
        // 'user_ldap_id',
        // 'password_last_change',
        // 'user_we_site_id',
        // 'user_fingerprint',
        // 'user_remark',
        // 'user_update_by',
        // 'user_update_on',
        // 'user_lic_no',
        // 'user_esig',
        // 'user_ctl_flag2',
        // 'pwhistory',
        'remember_token',
        // Add all columns you need to fill in your table
    ];
    

    // If the table does not have timestamps, set this to false
    public $timestamps = false;
}
