<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rma extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'deviceProductNumber', 'deviceSerialNumber', 'description', 'owner'];
}
