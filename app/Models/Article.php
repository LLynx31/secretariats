<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'ID_art';

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'ID_fourn', 'ID_fourn');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'ID_art', 'ID_art');
    }

    public function acquerir()
    {
        return $this->belongsToMany(Agent::class, 'acquerir', 'ID_art', 'matricule_agn');
    }

}
