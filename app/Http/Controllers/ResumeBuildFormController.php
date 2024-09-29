<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeBuildFormController extends Controller
{
    public function ShowPersonalInfoForm()
    {
        return view('ResumeBuilderForm.PersonalInfo.form');
    }

    public function StorePersonalInfo()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('experience.form');
    }

    public function ShowExperienceForm()
    {
        return view('ResumeBuilderForm.Experience.form');
    }

    public function StoreExperience()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('experience.form.list');
    }

    public function ShowExperienceList()
    {
        return view('ResumeBuilderForm.Experience.list');
    }

    public function ShowEducationForm()
    {
        return view('ResumeBuilderForm.Education.form');
    }

    public function StoreEducation()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('education.form.list');
    }

    public function ShowEducationList()
    {
        return view('ResumeBuilderForm.Education.list');
    }

    public function ShowSkillForm()
    {
        return view('ResumeBuilderForm.skill.form');
    }

    public function StoreSkill()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('ResumeBuilderForm.projects.form');
    }


    public function ShowProjectForm()
    {
        return view('ResumeBuilderForm.Project.form');
    }

    public function StoreProject()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('project.form.list');
    }

    public function ShowProjectList()
    {
        return view('ResumeBuilderForm.Project.list');
    }

    public function ShowLanguageForm()
    {
        return view('ResumeBuilderForm.Language.form');
    }

    public function StoreLanguage()
    {
        //TODO : Implement Magic to Save Submited Info To Session
        return redirect()->route('language.form.list');
    }

    public function ShowLanguageList()
    {
        return view('ResumeBuilderForm.Language.list');
    }
}
