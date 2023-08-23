<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelopokemon extends Model
{
    protected $table = 'tbl_pokemon';
    protected $fillable = ['IDpokemon', 'pok_nombre','pok_experiencia','pok_hp', 'pok_ataque', 'pok_defensa', 'pok_Sp_a', 'pok_sp_d', 'pok_Speed','img'];

}
