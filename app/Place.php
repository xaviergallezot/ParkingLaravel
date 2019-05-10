<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //public $timestamps = false;
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['Dispo_place'];
/*
 * Récupère toute les réservation de la place.
 */
public function reservations()
{
    return $this->hasMany('\App\Reservation');
}
/*
 * Retourne la dernière réservation de la place, NULL sinon.
 */
public function reservation()
{
    return $this->reservations()->orderBy('created_at', 'desc')->first();
}

/*
 *Permet de savoir si la place est prise
 */
public function occupied()
{
    return !empty($this->reservation()) && !$this->reservation()->isExpired();
}

}
