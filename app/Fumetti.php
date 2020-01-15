<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model
{
    protected $fillable = ['titolo','autore','anno','recensione','voto'];
}
