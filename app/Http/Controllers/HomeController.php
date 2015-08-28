<?php

namespace App\Http\Controllers;

use Mapper;
use App\Project;
use Illuminate\Http\Request;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function hello()
	{

		return view('mainpage.mainpage');
	}

    public function getProject($id)
    {
        return view('projects.project')->withProject(Project::getProject($id));
    }

    public function about()
    {
        return view('about.about');
    }

    public function contacts()
    {
        return view('contacts.contacts');
    }

    public function social()
    {
        return view('social.social');
    }

    public function getProjects()
    {
        $pds = Project::getAll();

        if ($pds instanceof Exception)
        {return $pds;}
        else
        {return view('projects.projects')->with('pds', $pds);}
    }

    public function getProjectsp(Request $request)
    {
        $data = $request->all();
        $request->flash();
        if (!isset($data['levelsF'])) {dd($request->old('levelsF'));}
        $levelsF = $data['levelsF'];
        $levelsT = $data['levelsT'];
        $b_areaF = $data['b_areaF'];
        $b_areaT = $data['b_areaT'];
        if ($data['garage'] === '1') { $garage = 'есть';}
        else {$garage = 'нет';}

        $pds = Project::getByParam($levelsF, $levelsT, $b_areaF, $b_areaT, $garage);
            if ($pds instanceof Exception)
        {return $pds;}
        else
        {return view('projects.projects')->with('pds', $pds);}
    }


    public function getProjectsByOption($option)
    {
        if (isset($option))
        {
            switch ($option)
            {
                case 'one':
                    $pds = Project::getOne();
                    if ($pds instanceof Exception)
                    {
                        return 'Ошибочка';
                    } else {
                        return view('projects.projects')->with('pds', $pds);}
                    break;
                case 'onep':
                    $pds = Project::getOnep();
                    if ($pds instanceof Exception)
                    {
                        return 'Ошибочка';
                    } else {
                        return view('projects.projects')->with('pds', $pds);}
                    break;
                case 'two':
                    $pds = Project::getTwo();
                    if ($pds instanceof Exception)
                    {
                        return 'Ошибочка';
                    } else {
                        return view('projects.projects')->with('pds', $pds);}
                    break;
                case 'garage':
                    $pds = Project::getGarage();
                    if ($pds instanceof Exception)
                    {
                        return 'Ошибочка';
                    } else {
                        return view('projects.projects')->with('pds', $pds);}
                    break;
                default:
                    return Redirect::route('projects')->with('global', 'Ошибочка. Попробуйте еще раз.');
            }
        } else {
            return Redirect::route('projects')->with('global', 'Ошибочка. Попробуйте еще раз.');
        }
    }


}
