<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'gender', 'age', 'phone', 'address', 'rt', 'rw', 'provinsi',
        'kabupaten', 'kecamatan', 'kelurahan', 'score', 'gme_problems',
        'drug_use', 'psychotic_symptoms', 'ptsd_symptoms'
    ];
}

