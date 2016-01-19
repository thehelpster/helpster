<?php

use Bbatsche\Entrust\Contracts\EntrustPermissionInterface;
use Bbatsche\Entrust\Traits\EntrustPermissionTrait;

class Permission extends Eloquent implements EntrustPermissionInterface
{
    use EntrustPermissionTrait;
}