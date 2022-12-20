<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourSpot extends Model
{
    use HasFactory;
    protected $table = 'tour_spots';
    protected $fillable = [
        'id',
        'name',
        'address',
        'spot_ratings',
        'spot_description',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function tourSpotImages(){

        return $this->hasMany(Gallery::class,'hotel_id','id');

    }
}
