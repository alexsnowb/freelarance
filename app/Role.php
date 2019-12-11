<?php

namespace App;

class Role extends \Kodeine\Acl\Models\Eloquent\Role
{
    public const ADMIN  = 'admin';
    public const CLIENT = 'client';
    public const FREELANCER = 'freelancer';
}
