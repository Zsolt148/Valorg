<?php

namespace App\Http\Controllers;

use App\Imports\CompaniesImport;
use App\Models\Company;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class companyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function store(Request $r) {

        $r->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tax_id' => 'required'
        ]);

        Company::updateOrCreate(
          [
              'tax_id' => $r->get('tax_id')
          ], [
              'name' => $r->get('name'),
              'email' => $r->get('email'),
            ]
        );

        return redirect()->route('admin.companies.index')->with('success', 'Sikeresen hozzáadva');
    }

    public function import(Request $r) {

        $r->validate([
           'file' => 'required|mimes:xls,xlsx,csv,txt'
        ]);

        Company::query()->delete();

        Excel::import(new CompaniesImport(), $r->file('file'));

        return redirect()->route('admin.companies.index')->with('success', 'Sikeresen importálva');
    }

    public function destroy($id) {

        Company::findOrFail($id)->delete();

        return redirect()->route('admin.companies.index')->with('success', 'Sikeresen törölve');
    }

}
