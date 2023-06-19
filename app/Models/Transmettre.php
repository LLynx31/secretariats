<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmettre extends Model
{
    protected $table = 'transmettres';
    public $timestamps = false;
    use HasFactory;
    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class, 'Matricule_scrt', 'Matricule_scrt');
    }

    public function courrier()
    {
        return $this->belongsTo(Courrier::class, 'ID_courrier', 'ID_courrier');
    }
}
