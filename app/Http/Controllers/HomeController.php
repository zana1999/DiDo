<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *   /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */

    public function index(Student $student)
    {



        return view('welcome',[

'student'=>$student

        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        return view('welcome');

    }

    }
