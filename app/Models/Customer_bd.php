<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_bd extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = [];
    protected $fillable = ['name'];
    protected $primaryKey = 'id';



    public function produit()
    {

        return $this->belongsToMany(Produit_bd::class, 'produit_customer', 'customers_id', 'produits_id', 'name');
    }
}
