<?php

namespace App;

/**
 * Class Role
 * @package App
 */
class Role extends \Kodeine\Acl\Models\Eloquent\Role
{
    public const ADMIN  = 'admin';
    public const CLIENT = 'client';
    public const FREELANCER = 'freelancer';

    /**
     * Collection for registration form
     *
     * @return mixed
     */
    public static function getRegistrationList() {
        $roleList = Role::where('slug', '!=',Role::ADMIN)->get();
        return $roleList;
    }
}
