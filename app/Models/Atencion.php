<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    use HasFactory;

    protected $table = 'atenciones_2021_2022'; // Especifica el nombre de la tabla

    // Define los campos que quieres usar
    protected $fillable = [
        'DNI',
        'Fecha',
        'Beneficiario',
        'EES_ATENCION',
        'TProfesional',
        'Profesional',
        'Diagnostico01'
    ];

    // Si la tabla no tiene campos `created_at` y `updated_at`
    public $timestamps = false;
}
