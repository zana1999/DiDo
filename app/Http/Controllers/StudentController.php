<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Excel;
use Illuminate\Support\Arr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        $groups=array();
        foreach($student::all() as $a)
        {
        $groups[$a->Group]=0;
        }
        foreach($student::all() as $a)
        {
            $groups[$a->Group]++;
        }


        return view('Students',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Student($request->all());
        $student->save();
        return redirect(route('students'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function grpedit(Student $student,Request $request)
    {

        $ch=$request->choice;
        $demo=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $needgrp=0;
        $max=$request->max;
        $groups=array();

$grpch=0;
        if($ch=="maxstd")
        {
            $i=-1;
            $maxstd=$request->maxstd;

            foreach($student::all() as $std)
            {
                $groups[$std->name]=$demo[$grpch];

                if($i==$maxstd-1)
                {
                    $grpch++;
                    $i=0;
                }
                    else
                    $i++;



            }

        }

        else
        {
            $i=0;
            $needgrp=$request->maxgrp;

            settype($needgrp, "integer");


            foreach($student::all() as $std)
            {
                $groups[$std->name]=$demo[$i];

                if($i==$needgrp-1)
                    $i=0;
                else
                    $i++;

            }

        }





        asort($groups);

        return view('regroup',compact('groups'));




    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function grpupdate(Request $request, Student $student)
    {
$names=$request->name;
$groups=$request->grp;
$count=count($names);

for($i=0;$i<$count;$i++)
{
    $student::where('name',$names[$i])->update(['Group'=> $groups[$i]]);

}





        return redirect(route('students'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function import(Request $request)
    {
        Excel::import(new StudentImport,$request->efile);
        return redirect(route('students'));

    }
}
