<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMoviesRequest;
use App\Services\MoviesService;

class Movies extends Controller
{
    public function upload( MoviesService $moviesService,
                            StoreMoviesRequest $request)
    {
        $validated = $request->safe()->only([
            'title',
            'release_year',
            'genre',
            'description'
        ]);
        
        if($storeMovie = $moviesService->store($validated)){
            return response($storeMovie,201);
        }
    }
    public function getMovie(MoviesService $moviesService,$title)
    {
        if($getMovies = $moviesService->getMovie($title)){
            return $getMovies;
        }
    }
    public function getReleaseYear(MoviesService $moviesService,$year)
    {
        if($getYear = $moviesService->getYear($year)){
            return $getYear;
        }
    }
    public function getGenre(MoviesService $moviesService,$Genre)
    {
        if($getGenre = $moviesService->getGenre($Genre)){
            return $getGenre;
        }
    }
    public function deleteMovie(MoviesService $moviesService,$title)
    {
        return $moviesService->deleteMovie($title);
    }
}
