<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $groups = ["A", "B", "C"];
        return new Student([
            'name'=>$row['name'],
            'password'=>Str::random(10)   ,
            'gender'=>$row['gender'],
            'gpa'=>$row['gpa'],
            'Group'=>Arr::random($groups),


        ]);
    }
}
