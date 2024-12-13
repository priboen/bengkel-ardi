<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create()
    {
        return view('pages.admin.company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        Company::create($request->all());
        return redirect()->route('companies.show', 1)->with('success', 'Data Perusahaan berhasil ditambahkan!');
    }

    public function show()
    {
        $company = Company::find(1);
        if (is_null($company)) {
            return redirect()->route('companies.create');
        }
        return view('pages.admin.company.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('pages.admin.company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $company->update($request->all());
        return redirect()->route('companies.show', 1)->with('success', 'Data Perusahaan berhasil diubah!');
    }
}
