<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instrument extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'name',
        'active',
        'instrument_category_id',
    ];

    public function instrumentCategory()
    {
        return $this->belongsTo(InstrumentCategory::class, 'instrument_category_id');
    }
}
