<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenancePayment extends Model
{
    protected $fillable = [
    'flat_id',
    'amount',
    'month',
    'status'
];
}
