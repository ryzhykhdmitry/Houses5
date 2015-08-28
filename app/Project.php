<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public static $unguarded = true;

    public static function getProject($id)
    {
        try
        {
            $project = Project::where('id', '=', $id)->firstOrFail();
        }   catch (Exception $ex){
            return $ex;
        }

        return $project;
    }

    public static function getAll()
    {
        try
        {
            $projects = Project::simplePaginate(8);
        }   catch (Exception $ex){
            return $ex;
        }

        return $projects;
    }

    public static function getOne()
    {
        try
        {
            $projects = Project::where('levels', '=', 1)->simplePaginate(8);
        }   catch (Exception $ex) {
            return $ex;
        }
        return $projects;
    }

    public static function getOnep()
    {
        try
        {
            $projects = Project::where('levels', '=', 1.5)->simplePaginate(8);
        }   catch (Exception $ex) {
            return $ex;
        }
        return $projects;
    }

    public static function getTwo()
    {
        try
        {
            $projects = Project::where('levels', '=', 2)->simplePaginate(8);
        }   catch (Exception $ex) {
            return $ex;
        }
        return $projects;
    }

    public static function getGarage()
    {
        try
        {
            $projects = Project::where('garage', '=', 'есть')->simplePaginate(8);
        }   catch (Exception $ex) {
            return $ex;
        }
        return $projects;
    }

    public static function getByParam($levelsF, $levelsT, $b_areaF, $b_areaT, $garage)
    {
        try
        {
            $projects = Project::whereBetween('levels', [$levelsF, $levelsT])
                ->whereBetween('building_area', [$b_areaF, $b_areaT])
                ->where('garage','=', $garage)->simplePaginate(8);
        } catch (Exception $ex) {
            return $ex;
        }
        return $projects;
    }
}
