<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\lib\calculatorClass;

class homeController extends Controller
{
    public function index(Request $req)
    {
        $validate = $req->validate([
            "module_1_score" => "required|numeric|min:40|max:100",
            "module_2_score" => "required|numeric|min:40|max:100",
            "module_3_score" => "required|numeric|min:40|max:100",
            "module_4_score" => "required|numeric|min:40|max:100",
            "module_5_score" => "required|numeric|min:40|max:100",
            "module_6_score" => "required|numeric|min:40|max:100",
            "dissertation_score" => "required|numeric|min:40|max:100",
        ]);

        $calculatorClass = new calculatorClass($validate);
        $gradePoint = $calculatorClass->calculateCGPA();
        return view("grade", ["gradepoint"=>$gradePoint]);
    }

    
}
