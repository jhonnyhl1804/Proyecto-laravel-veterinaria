<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;

    protected $fillable = ['asunto','fecha_agenda','animal_id','medico_id','servicio_id'];
}
