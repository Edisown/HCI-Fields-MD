<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationHistory extends Model
{
    use HasFactory;


    protected $table = 'vaccination_histories'; 

    // assigned attributes based on the database
    protected $fillable = [
        'vaccination_history_pediatrician',
        'vaccination_history_programs',
        'vaccination_history_status',
        'vaccination_history_date',
        'baby_id', 
    ];

    public function baby()
    {
        return $this->belongsTo(Baby::class);
    }
}
