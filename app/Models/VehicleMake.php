<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function models()
    {
        return $this->hasMany(VehicleModel::class);
    }
}
