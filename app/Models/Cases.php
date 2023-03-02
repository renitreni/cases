<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cases extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'sra',
        'suspension_date',
        'office_order_no',
        'suspension_days',
        'email',
        'employer_name',
        'case_officer',
        'sra_contact',
        'worker_lasname',
        'worker_firstname',
        'worker_middlename',
        'atnsia_case_id',
    ];
}
