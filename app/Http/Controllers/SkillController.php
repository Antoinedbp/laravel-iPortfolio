<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        
        $dataSkills = Skill::all();
        return view('backoffice.skill_bo', compact('dataSkills',));
    }

    public function create () {
        return view('backoffice.skillBO.create');
    }

    public function store (Request $request) {

        request()->validate([
            "nom"=>["required", "min:1", "max:40"],
            "pourcentage"=>["required", "min:1", "max:60"],
        ]);

        $newSkill = new Skill();
        $newSkill->nom = $request->nom;
        $newSkill->pourcentage = $request->pourcentage;
        $newSkill->save();
        return redirect()->route('skill_bo');
    }

    public function destroy (Skill $id) {
        $id->delete();
        return redirect()->back();
    }

    public function show (Skill $id) {
        $dataSkills = Skill::all();
        $skills = $id;
        return view('backoffice.skillBO.show', compact('skills', 'dataSkills'));
    }

    public function edit (Skill $id) {
        $skill = $id;
        $dataSkill = Skill::all();
        return view('backoffice.skillBO.edit', compact('skill','dataSkill'));
    }

    public function update (Skill $id, Request $request) {

        request()->validate([
            "nom"=>["required", "min:1", "max:40"],
            "pourcentage"=>["required", "min:1", "max:60"],
        ]);

        $skil = $id;
        $skil->nom = $request->nom;
        $skil->pourcentage = $request->pourcentage;
        $skil->save();
        return redirect('/');
    }
}
