<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;


    protected $table = 'prescriptions';

    protected $fillable = [
        'medical_drug',
        'purpose',
        'instructions',
        'duration',
        'baby_id', 
    ];

    public function baby()
    {
        return $this->belongsTo(Baby::class);
    }
}
