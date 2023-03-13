<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lifted extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cases_id',
        'office_order_no',
        'effective_date',
        'officer_in_charge',
        'remarks'
    ];
}
