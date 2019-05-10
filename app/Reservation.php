<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon ;

class Reservation extends Model
{
  protected $fillable = [
          'duree', 'user_id', 'place_id'
        ];
        public function user()
              {
                return $this->belongsTo('\App\User');
              }
  /*
   * Retourne la place concerné par la reservation.
   */
        public function place()
            {
                return $this->belongsTo('\App\Place');
            }



        public function isExpired()
        {
            return $this->lastDay()->lt(Carbon::now());
        }

        public function lastDay()
        {
            return $this->created_at->addDays($this->duration);
        }

}
