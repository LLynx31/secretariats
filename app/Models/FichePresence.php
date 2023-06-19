<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichePresence extends Model
{
    use HasFactory;

    protected $table = 'fiches_de_presence';
    protected $primaryKey = 'ID_fic_pre';
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'matricule_agn', 'matricule_agn');
    }
}
