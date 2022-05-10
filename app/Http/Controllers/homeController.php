<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $gradePoint = $this->calculateCGPA($validate);
        return view("grade", ["gradepoint"=>$gradePoint]);
    }

    private function calculateCGPA($inputGrade)
    {
        $module_1 = $inputGrade['module_1_score'] * 0.2;
        $module_2 = $inputGrade['module_2_score'] * 0.2;
        $module_3 = $inputGrade['module_3_score'] * 0.2;
        $module_4 = $inputGrade['module_4_score'] * 0.2;
        $module_5 = $inputGrade['module_5_score'] * 0.2;
        $module_6 = $inputGrade['module_6_score'] * 0.2;
        $dissertation = $inputGrade['dissertation_score'] * 0.6;

        $totalUnit = $module_1 + $module_2 + $module_3 + $module_4 + $module_5 + $module_6 + $dissertation;
        $gradePoint = round($totalUnit/180, 2) * 100;
        return $gradePoint;
    }
}
