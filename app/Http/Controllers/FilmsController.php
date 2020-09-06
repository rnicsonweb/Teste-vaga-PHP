<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use Redirect;
use App\Film;
use App\Favorite;

class FilmsController extends Controller
{
    public function index(){
        $response = Http::get('https://api.themoviedb.org/3/movie/605116/recommendations?api_key=c2608a6af514ba11d24f1d6aab8ef63d&language=pt-BR');
        $json = $response->json();
        $body = $json['results'];
        for($i = 0;$i < count($body);$i++) {
            $result = $body[$i];
            $title = $result['title'];
            $id = $result['id'];
            $imagem = $result['poster_path'];
            $overview = $result['overview'];
            $user_id = Auth::id();
            $favorito = Favorite::where('film_id', '=',$id)->where('user_id','=',$user_id)->first();
            if($favorito){
                $items[] = array('title' => $title, 'id' => $id,'overview' => $overview, 'imagem' => $imagem,'favorito' => 1);
            }else{
                $items[] = array('title' => $title, 'id' => $id,'overview' => $overview, 'imagem' => $imagem,'favorito' => 0);
            }
            $filmes = Film::where('id', '=',$id)->first();
            if ($filmes == null) {
                Film::create([
                    'id' => $id,
                    'title' => $title,
                    'poster_path' => $imagem,
                    'overview' => $overview
                ]);
                }
            }

        return view('films.index',compact('items','favorito'));
    }

    public function favorites(){
        $user_id = Auth::id();
        $favorites = Favorite::where('favorites.user_id', '=',$user_id)
            ->join('films', 'films.id', '=', 'favorites.film_id')
            ->get();

        return view('films.favorites',compact('favorites'));
    }
    public function adicionar($id){
        $user_id = Auth::id();
        $adicionar = Favorite::create([
            'film_id' => $id,
            'user_id' => $user_id
        ]);

        return Redirect('admin/filmes');
    }

    public function remover($id){
        $user_id = Auth::id();
        $delete = Favorite::where('film_id',$id)
            ->where('user_id',$user_id)
            ->delete();

       return redirect()->back();
    }
}
