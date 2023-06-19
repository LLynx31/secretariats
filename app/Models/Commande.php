<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    protected $table = 'commandes';
    protected $primaryKey = 'ID_cmd';
    use HasFactory;
    public function bonDeCommande()
    {
        return $this->belongsTo(BonDeCommande::class, 'ID_Bon_Cmd', 'ID_Bon_Cmd');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'ID_art', 'ID_art');
    }

    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class, 'Matricule_scrt', 'Matricule_scrt');
    }


}
