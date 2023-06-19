<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeCommande extends Model
{
    use HasFactory;

    protected $table = 'bons_de_commande';
    protected $primaryKey = 'ID_Bon_Cmd';

    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class, 'Matricule_scrt', 'Matricule_scrt');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'ID_Bon_Cmd', 'ID_Bon_Cmd');
    }

}
