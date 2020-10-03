<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as Permissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Permissions
{
    use HasFactory;
}
