<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model implements Authenticatable
{
    use HasFactory;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Matricule_scrt';


    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = ['Matricule_scrt','Nom_scrt','email','password'];


    public function bonDeCommandes()
    {
        return $this->hasMany(BonDeCommande::class, 'Matricule_scrt', 'Matricule_scrt');
    }

    public function getAuthIdentifierName() {
        return 'Matricule_scrt';
    }

    public function getAuthIdentifier()
    {
        return $this->Matricule_scrt;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        return $this->rember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remeber_token';
    }


}
