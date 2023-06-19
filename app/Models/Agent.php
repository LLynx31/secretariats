<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'matricule_agn';
    protected $table = 'agents';

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'matricule_agn', 'matricule_agn');
    }

    public function fichesDePresence()
    {
        return $this->hasMany(FicheDePresence::class, 'matricule_agn', 'matricule_agn');
    }

    public function acquerir()
    {
        return $this->belongsToMany(Article::class, 'acquerir', 'matricule_agn', 'ID_art');
    }
}
