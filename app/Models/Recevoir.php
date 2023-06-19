<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recevoir extends Model
{
    use HasFactory;
    protected $table = 'recevoirs';

    public function sousDirecteur()
    {
        return $this->belongsTo(SousDirecteur::class, 'Matricule_S_D', 'Matricule_S_D');
    }

    public function courrier()
    {
        return $this->belongsTo(Courrier::class, 'ID_courrier', 'ID_courrier');
    }

}

