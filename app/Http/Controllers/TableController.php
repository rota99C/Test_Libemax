<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Clocking;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){

        /* trasmissione dei dati relativi a timbrate e dipendenti con le rispettive relazioni alla view */
        $clockings = Clocking::with(['employee'])->orderBy('employee_id')->orderBy('created_at')->get();
        $employees = Employee::with(['clockings'])->get();

        //dd($employees);

        return view('table',compact('employees','clockings'));
    }
}
