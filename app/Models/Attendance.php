<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';

    protected $fillable = [
        'classid', 'studentid', 'isPresent', 'comments','date',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'classid', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'studentid', 'id');
    }
}
