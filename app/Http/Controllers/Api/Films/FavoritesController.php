<?php

namespace App\Http\Controllers\api\films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Favorite;

class FavoritesController extends Controller
{

    public function store(Request $request)
    {
        $film_id = $request->get('film_id');
        $user_id = $request->get('user_id');

        Favorite::create([
            'film_id' => $film_id,
            'user_id' => $user_id
        ]);
    }

    public function show($id)
    {
        $favorites = Favorite::where('user_id',$id)->get();
        return $favorites;
    }

    public function destroy($id)
    {
        $favorites = Favorite::where('id',$id)->delete();
    }
}
