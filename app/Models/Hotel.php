<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'address',
        'number_of_rooms',
        'hotel_ratings',
        'hotel_description',
        'manager_name',
        'manager_contact_number',
        'contact_number',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function hotelImages(){

        return $this->hasMany(Gallery::class,'hotel_id','id');

    }

}
