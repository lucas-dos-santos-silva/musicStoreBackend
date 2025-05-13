<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessory extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
      'name',
      'active',
      'accessory_category_id',
    ];

    public function accessoryCategory()
    {
        return $this->belongsTo(AccessoryCategory::class, 'accessory_category_id');
    }
}
