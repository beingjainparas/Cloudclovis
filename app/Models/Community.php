<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'branch', 'acad_year', 'higher_studies', 'work_after_grad', 'no_work_then_what', 'intrested_domain', 'rate_skills', 'carreer_guidance', 'message'];
}
