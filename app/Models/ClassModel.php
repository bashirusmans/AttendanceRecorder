<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'class';

    protected $fillable = [
        'teacherid', 'starttime', 'endtime', 'credit_hours', 'date',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacherid', 'id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'classid', 'id');
    }
}
