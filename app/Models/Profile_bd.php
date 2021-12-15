<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_bd extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function student()
    {
        return $this->belongsTo('App\Models\Student_bd');
    }
}
