<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Baby extends Model {

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function prescriptions() {
        return $this->hasMany(Prescription::class);
    }

    public function vaccinationSchedules() {
        return $this->hasMany(VaccinationSchedule::class);
    }

    public function vaccinationHistories() {
        return $this->hasMany(VaccinationHistory::class);
    }

    public function getAgeAttribute()
    {
        $birth = Carbon::parse($this->date_of_birth);
        $now = Carbon::now();

        $years = (int) $birth->diffInYears($now);  
        $months = (int) ($birth->diffInMonths($now) % 12); 
    

        if ($years > 0) {
            return "{$years} year/s"; 
        } elseif ($months > 0) {
            return "{$months} months"; 
        } else {
  
            $days = (int) $birth->diffInDays($now); 
            return "{$days} days";
        }
    }
    

    // fill the data
    protected $fillable = [
        'name',
        'age',
        'date_of_birth',
        'gender',
        'height',
        'allergies',
        'blood_type',
        'diseases',
        'heart_rate',
        'body_temperature',
        'bmi',
        'dietary_preferences',
        'dietary_recommendations',
        'photo_path',
        'user_id',
    ];
}