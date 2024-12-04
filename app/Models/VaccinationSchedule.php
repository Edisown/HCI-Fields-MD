<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationSchedule extends Model
{
    use HasFactory;

    protected $table = 'vaccination_schedules';

    // assigned attributes based on the database
    protected $fillable = [
        'vaccination_schedule_name',
        'vaccination_schedule_date',
        'baby_id',
    ];

    public function baby()
    {
        return $this->belongsTo(Baby::class);
    }
}
