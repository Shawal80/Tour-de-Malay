<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table = 'clubs';
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'address',
        'capacity',
        'club_description',
        'manager_name',
        'manager_contact_number',
        'capacity',
        'opens_at',
        'close_at',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
    public function clubImages(){

        return $this->hasMany(Gallery::class,'hotel_id','id');

    }
}
