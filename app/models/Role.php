<?php

use Bbatsche\Entrust\Contracts\EntrustRoleInterface;
use Bbatsche\Entrust\Traits\EntrustRoleTrait;

class Role extends Eloquent implements EntrustRoleInterface
{
    use EntrustRoleTrait;

    public function users()
	{
		return $this->belongsToMany('User');
	}

}