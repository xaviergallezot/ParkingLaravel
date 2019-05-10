<?php

namespace App\Http\Controllers;

use App\Place ;
use App\Reservation ; 
use Auth ;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
  /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
        {
            $user = Auth::user() ;
            $maplace = $this->trouverPlace() ;
            Reservation::create(['user_id' => $user->id, 'place_id' => $maplace->id]);
            return redirect()->back();
            /*$user->leaveRank(); Pour le rang */
        }

        private function trouverPlace()
        {
          $places = Place::where('Dispo_place', TRUE)->get();
          foreach ($places as $place)
          {
              if ( !$place->occupied() )
                  return $place ;

          }

          return NULL ;

        }
}
