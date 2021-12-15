<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fk_customer_produit extends Model
{
    use HasFactory;
    protected $table = 'produit_customer';
    protected $guarded = [];

    // protected $primaryKey = 'id';
}
