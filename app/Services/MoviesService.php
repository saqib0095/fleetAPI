<?php

namespace App\Services;

use App\Models\Movies;
use Exception;

class MoviesService
{
    public function store($data)
    {
        try{
            $storeMovie = Movies::updateOrCreate(
                ['title' => $data['title']],
                [
                    'title'         => $data['title'],
                    'release_year'  => $data['release_year'],
                    'genre'         => $data['genre'],
                    'description'   => $data['description']
                ]
            );
            return $storeMovie;
        }catch(Exception $e)
        {
            return throw new Exception($e->getMessage());
        }
    }
    public function getMovie($title)
    {
        try{
            $result = Movies::where('title','like','%'.$title.'%')->get();
            if($result->isEmpty()){
                return response('No Movies found!',400);
            }
            return response($result,200);
        }catch(Exception $e){
            return throw new Exception($e->getMessage());
        }
    }
    public function getYear($year){
        try{
            $result =  Movies::where('release_year','=',$year)->get();
            if($result->isEmpty()){
                return response('No Movies in that release year',400);
            }
            return response($result,200);
        }catch(Exception $e){
            return throw new Exception($e->getMessage());
        }
    }
    public function getGenre($genre){
        try{
            $result =  Movies::where('genre','=',$genre)->get();
            if($result->isEmpty()){
                return response('No Movies in that genre',400);
            }
            return response($result,200);
        }catch(Exception $e){
            return throw new Exception($e->getMessage());
        }
    }
    public function deleteMovie($title)
    {
        $delete = Movies::where('title','=',$title)->delete();
        if(!$delete){
            return response($title . ' not found!',400);
        }
        return response('Movie title: '.$title  . ' deleted!',200);
    }

}