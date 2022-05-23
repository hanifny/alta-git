<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sisfo extends Model
{
    use HasFactory;
    public $table = 'sisfo_data_category';
    public $guarded = [];
}
