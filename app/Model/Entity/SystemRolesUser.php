<?php

declare (strict_types=1);
namespace App\Model\Entity;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $system_role_id 
 * @property int $user_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class SystemRolesUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'system_roles_user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['system_role_id' => 'integer', 'user_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}