<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index () {
        $dataAbout = About::all();
        return view('pages.main', compact('dataAbout'));
    }
    
    public function create () {
        return view('backoffice.aboutBO.create');
    }

    public function store (Request $request) {
        
        request()->validate([
            "birthday"=>["required", "min:1", "max:40"],
            "Website"=>["required", "min:1", "max:60"],
            "phone"=>["required", "min:1", "max:40"],
            "city"=>["required", "min:1", "max:40"],
            "age"=>["required", "min:1", "max:40"],
            "degree"=>["required", "min:1", "max:40"],
            "PHEmailone"=>["required", "min:1", "max:40"],
            "Freelance"=>["required", "min:1", "max:40"],
            "text"=>["required", "min:1", "max:400"],
        ]);

        $newAbout = new About();
        $newAbout-> birthday= $request->birthday;
        $newAbout->website = $request->website;
        $newAbout->phone = $request->phone;
        $newAbout->city = $request->city;
        $newAbout->age = $request->age;
        $newAbout->degree = $request->degree;
        $newAbout->PHEmailone = $request->PHEmailone;
        $newAbout->Freelance = $request->Freelance;
        $newAbout->text = $request->text;
        $newAbout->save();
        return redirect()->route('about_bo');
    }

    public function destroy (About $id) {
        $id->delete();
        return redirect()->back();
    }

    public function show (About $id) {
        $dataAbout = About::all();
        $abouts = $id;
        return view('backoffice.aboutBO.show', compact('abouts','dataAbout'));
    }

    public function edit (About $id) {
        $abouts = $id;
        $dataAb = About::all();
        return view('backoffice.aboutBO.edit', compact('abouts','dataAb'));
    }

    public function update (About $id, Request $request) {
        
        request()->validate([
            "birthday"=>["required", "min:1", "max:40"],
            "Website"=>["required", "min:1", "max:60"],
            "phone"=>["required", "min:1", "max:40"],
            "city"=>["required", "min:1", "max:40"],
            "age"=>["required", "min:1", "max:40"],
            "degree"=>["required", "min:1", "max:40"],
            "PHEmailone"=>["required", "min:1", "max:40"],
            "Freelance"=>["required", "min:1", "max:40"],
            "text"=>["required", "min:1", "max:400"],
        ]);
        
        $abou = new About();
        $abou = $id;
        $abou->birthday = $request->birthday;
        $abou->website = $request->website;
        $abou->phone = $request->phone;
        $abou->city = $request->city;
        $abou->age = $request->age;
        $abou->degree = $request->degree;
        $abou->PHEmailone = $request->PHEmailone;
        $abou->Freelance = $request->Freelance;
        $abou->text = $request->text;
        $abou->save();
        return redirect('/');
    }
}
