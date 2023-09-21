<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbtServiciosNeps extends Model
{
    use HasFactory;

    protected $fillable =[
        'nin_id',
        'no_mipres',
        'fecha_ordenamiento',
        'codigo_habilitacion',
        'nit_ips_prescriptora',
        'doc_prof_en_salud',
        'tipo_doc',
        'no_idenficacion_afiliado',
        'cod_enfermedad_huerfana',
        'nombre_enfermedad_huerfana',
        'cod_dx_principal',
        'tipo_tecnologia',
        'indicacion',
        'idips',
        'estado',
        'ncargue',
        'user_dig_id',
        'user_adui_id'
    ];

    public function userDigitador()
    {
        return $this->belongsTo(User::class, 'user_dig_id');
    }

    public function userAuditor()
    {
        return $this->belongsTo(User::class, 'user_adui_id');
    }
}
