<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public static $unguarded = true;

    public static function getProject($id)
    {
        $project = Project::where('id', '=', $id)->firstOrFail();
        return $project;
    }

    public static function getAll()
    {
        $projects = Project::simplePaginate(8);
        return $projects;
    }

    public static function getOne()
    {
        $projects = Project::where('levels', '=', 1)->simplePaginate(8);
        return $projects;
    }

    public static function getOnep()
    {
        $projects = Project::where('levels', '=', 1.5)->simplePaginate(8);
        return $projects;
    }

    public static function getTwo()
    {
        $projects = Project::where('levels', '=', 2)->simplePaginate(8);
        return $projects;
    }

    public static function getGarage()
    {
        $projects = Project::where('garage', '=', 'есть')->simplePaginate(8);
        return $projects;
    }

    public static function getByParam($levelsF, $levelsT, $b_areaF, $b_areaT, $garage)
    {
        $projects = Project::whereBetween('levels', [$levelsF, $levelsT])
            ->whereBetween('building_area', [$b_areaF, $b_areaT])
            ->where('garage', '=', $garage)->simplePaginate(8);
        return $projects;
    }
}
