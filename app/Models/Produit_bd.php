<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit_bd extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $guarded = [];

    // public $timestamps = true;
    // protected $fillable = ['price', 'created_at', 'update_at'];
    protected $primaryKey = 'id';
    // protected $hidden = ['created_at', 'update_at' ,'pivot'];
    public function customer()
    {
        // return $this->hasMany('App\Models\Customer_bd', 'fk_pro_cus', 'produits_id', 'customers_id')
        // ->withTimestamps()
        // ->withPivot(['is_manager'])
        // // ->withPivot('active', 'is_manager')
        // ->as('project');
        return $this->belongsToMany(Customer_bd::class, 'produit_customer', 'produits_id', 'customers_id', 'name');
    }
}
