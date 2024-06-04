<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'placa',
        'anio',
        'kilometraje',
        'tipo_combustible',
        'precio',
        'transmision',
        'img',
        'descripcion',
    ];
    public function Obtenerimg()
    {
        if ($this->img) {
            return Storage::url('public/car-images/' . $this->img);
        } else {
            return asset('images/default-car.jpg'); 
        }
    }
}
