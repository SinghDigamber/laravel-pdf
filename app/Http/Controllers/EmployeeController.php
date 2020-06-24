<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Employee;
use PDF;

class EmployeeController extends Controller {

    // Display user data in view
    public function showEmployees(){
      $employee = Employee::all();
      return view('index', compact('employee'));
    }

    // Generate PDF
    public function createPDF() {
      // retreive all records from db
      $data = Employee::all();

      // share data to view
      view()->share('employee',$data);
      $pdf = PDF::loadView('pdf_view', $data);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}
