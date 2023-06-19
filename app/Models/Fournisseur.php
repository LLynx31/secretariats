<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $table = 'fournisseurs';

    public function articles()
    {
        return $this->hasMany(Article::class, 'ID_fourn', 'ID_fourn');
    }
}
