<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    public function Company(){
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function Status(){
        return $this->belongsTo(JobStatus::class, 'job_status', 'id');
    }
}
