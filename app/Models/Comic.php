<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // si puo aggiungere la funzione per aiutarci a scrivere meno codice nell'update e nel create comic 
    protected $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'series', 'type'];
}
