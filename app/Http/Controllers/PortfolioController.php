<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        
        $dataPort = Portfolio::all();
        return view('backoffice.portfolioBO.main', compact('dataPort'));
    }

    public function create () {
        return view('backoffice.portfolioBO.create');
    }

    public function store (Request $request) {
        
        request()->validate([
            "img"=>["required", "min:1", "max:100"],
        ]);

        $newPort = new Portfolio();
        $newPort->img = $request->img;
        $newPort->save();
        return redirect()->route('portfolio_bo');
    }

    public function destroy (Portfolio $id) {
        $id->delete();
        return redirect()->back();
    }

    public function show (Portfolio $id) {
        $portfolios = $id;
        $dataPort = Portfolio::all();
        return view('backoffice.portfolioBO.show', compact('portfolios', 'dataPort'));
    }

    public function edit (Portfolio $id) {
        $portfolio = $id;
        $dataPort = Portfolio::all();
        return view('backoffice.portfolioBO.edit', compact('portfolio','dataPort'));
    }

    public function update (Portfolio $id, Request $request) {
        request()->validate([
            "img"=>["required", "min:1", "max:100"],
        ]);
        
        $port = $id;
        $port->img = $request->img;
        $port->save();
        return redirect('/');
    }
}
