<?php
namespace App\lib;

class calculatorClass
{
    private $inputGrade = [];

    public function __construct($inputGrade)
    {
        $this->inputGrade = $inputGrade;
    }

    public function calculateCGPA()
    {
        $module_1 = $this->inputGrade['module_1_score'] * 0.2;
        $module_2 = $this->inputGrade['module_2_score'] * 0.2;
        $module_3 = $this->inputGrade['module_3_score'] * 0.2;
        $module_4 = $this->inputGrade['module_4_score'] * 0.2;
        $module_5 = $this->inputGrade['module_5_score'] * 0.2;
        $module_6 = $this->inputGrade['module_6_score'] * 0.2;
        $dissertation = $this->inputGrade['dissertation_score'] * 0.6;

        $totalUnit = $module_1 + $module_2 + $module_3 + $module_4 + $module_5 + $module_6 + $dissertation;
        $gradePoint = round($totalUnit/180, 2) * 100;
        return $gradePoint;
    }
}
