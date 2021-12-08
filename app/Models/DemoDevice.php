<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoDevice extends Model
{
    use HasFactory;

    protected $fillable = ['deviceProductNumber', 'deviceSerialNumber', 'description'];
}
