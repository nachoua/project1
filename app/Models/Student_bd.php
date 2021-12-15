<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_bd extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = [];
    protected $primaryKey = 'id';
    // public $timestamps = false;
    public function profile()
    {
        return $this->hasOne('App\Models\Profile_bd', 'students_id');
    }
}
