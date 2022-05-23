<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnHand extends Model
{
    use HasFactory;
    public $table = 'asset_onhand_quantities';
    public $guarded = [];
}
