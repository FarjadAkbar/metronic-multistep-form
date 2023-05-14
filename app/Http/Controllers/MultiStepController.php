<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultiStep;

class MultiStepController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone'  => 'required|number|max:255',
            'email'      => 'required|string|email|max:255',
            'linkedin_url'  => 'required|url|max:255',
        ]);

        $steps = MultiStep::create([
            'name' => $request->name,
            'email'      => $request->email,
            'phone'  => $request->phone,
            'address'      => $request->address,
            'linkedin_url'      => $request->linkedin_url,
        ]);

        return view('/');
    }

}
