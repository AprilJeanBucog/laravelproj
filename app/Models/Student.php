<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    $students = /App/Models/Student::all();

    $student = new /App/Models/Student();
    $student->name = 'John Doe';
    $student->email ='john@example.com';
    $student->save();

    $student = /App/Models/Student::find(1); //Assuming the student with ID 1 xists
    $student->name = 'Update Name';
    $student->save();

    $student = /App/Models/Student::find(1); //Assuming the student with ID 1 xists
    $student->delete();
    
   use HasFactory;
}
