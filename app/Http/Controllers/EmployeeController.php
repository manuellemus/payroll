<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->get();
        return view('employee.index', compact('employees'));
    }
}
