<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    use HasFactory;

    protected $table = 'courriers';
    protected $primaryKey = 'ID_courrier';

    public function sousDirecteur()
    {
        return $this->belongsTo(SousDirecteur::class, 'Matricule_S_D', 'Matricule_S_D');
    }

    public function correspondant()
    {
        return $this->belongsTo(Correspondant::class, 'ID_crspd', 'ID_crspd');
    }

    public function transmettre1()
    {
        return $this->belongsToMany(Secretaire::class, 'transmettre_1', 'ID_courrier', 'Matricule_scrt');
    }


}
