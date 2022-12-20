<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = "restaurants";
    protected $fillable = [
        'id',
        'name',
        'address',
        'number_of_tables',
        'restaurant_ratings',
        'restaurant_description',
        'manager_name',
        'manager_contact_number',
        'contact_number',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];

    public function restaurantImages(){

        return $this->hasMany(Gallery::class,'hotel_id','id');

    }
}
