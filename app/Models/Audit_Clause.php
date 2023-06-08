<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit_Clause extends Model
{
    use HasFactory;

    protected $fillable = [
        'clause_no',
        'clause_sub_no',
        'clause_desc',
        'clause_status',
    ];
}
