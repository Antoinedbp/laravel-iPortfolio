<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeBOController extends Controller
{
    public function index () {

        return view('pages.mainBO');
    }
}
