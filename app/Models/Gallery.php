<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "gallery";
    protected $fillable = [
        'hotel_id',
        'restaurant_id',
        'spot_id',
        'club_id',
        'file_path',
        'created_at',
        'updated_at',

    ];
}
