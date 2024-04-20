<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\WorkExperience; 

class WorkExperienceController extends Controller
{
    public function index()
    {
        $workExperience = WorkExperience::all(); 
        return $this->render('work-experience/index', ['workExperience' => $workExperience]);
    }

    public function show(Request $request)
    {
        $id = $request->getParam('id');
        $workExperience = WorkExperience::find($id); 
        return $this->render('work-experience/show', ['workExperience' => $workExperience]);
    }

    public function store(Request $request)
    {
        $data = $request->getBody();
        $workExperience = new WorkExperience();
        $workExperience->loadData($data); 
        $workExperience->save(); 
        return $this->redirect('/work-experience'); 
    }

    public function update(Request $request)
    {
        $id = $request->getParam('id');
        $workExperience = WorkExperience::find($id);
        $data = $request->getBody();
        $workExperience->loadData($data);
        $workExperience->save(); 
        return $this->redirect('/work-experience');
    }

    public function destroy(Request $request)
    {
        $id = $request->getParam('id');
        $workExperience = WorkExperience::find($id);
        $workExperience->delete(); 
        return $this->redirect('/work-experience');
    }
}
