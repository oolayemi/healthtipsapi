<?php

namespace App\Http\Controllers;

use App\Models\HealthTips;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class HealthTipsController extends Controller
{
    public function index(){
        $healthtips = HealthTips::all();
        return response()->json($healthtips, 200);
    }

    public function show($id){
        $tips = HealthTips::findOrFail($id);
        return response()->json($tips, 200);
    }

    public function store(Request $request){
        return response()->json(HealthTips::create($request->all()) ,201);
    }

    public function update(Request $request, HealthTips $tips){
        $tips->update($request->all());
        return response()->json($tips, 200);
    }
}
