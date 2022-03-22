<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    //
    public $timestamps=false;
    protected $table="movimientostable";
    protected $primaryKey="mov_id";
    protected $fillable = [
        'mov_detalle','mov_valor','mov_fecha',
}
