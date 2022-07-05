<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleDirory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'model_has_roles';
    public $fillable = ['role_id', 'model_type', 'model_id'];
}