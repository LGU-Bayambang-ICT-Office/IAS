<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Audit_Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'audit_type',
        'audit_objective',
        'audit_criteria',
        'audit_resources',
        'audit_risks',
        'audit_scope',
        'audit_date_from',
        'audit_date_to',
        'audit_qmr',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
