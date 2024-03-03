<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use App\Models\Company;
use App\Http\Requests\Company\StoreRequest;
use App\Http\Requests\Company\UpdateRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request) {
        $companies = Company::paginate(10);
        return view('company.index', ['companies' => $companies]);
    }

    public function show(Request $request, $id) {
        $company = Company::find($id);
        return view('company.show', ['company' => $company]);
    }

    public function create() {
        return view('company.create');
    }

    public function store(StoreRequest $request) {
        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('company.index'));
    }

    public function edit(Request $request, $id) {
        $company = Company::find($id);
        return view('company.edit', [ 'company' => $company ]);
    }

    public function update(UpdateRequest $request) {
        $company = Company::find($request->input('id'));
        $company->fill([ 'name' => $request->input('name'), 'email' => $request->input('email') ]);
        $company->save();
        return redirect(route('company.show', [ 'id' => $request->input('id') ]));
    }
}
