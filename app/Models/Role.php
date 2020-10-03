<?php

namespace App\Models;

use Spatie\Permission\Models\Role as Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Group
{
    use HasFactory;
}
