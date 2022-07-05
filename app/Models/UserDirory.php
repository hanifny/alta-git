<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDirory extends Model
{
    use HasFactory, UsesUuid;
    public $table = 'users';
    public $guarded = [];
}
