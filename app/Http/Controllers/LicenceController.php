<?php

namespace App\Http\Controllers;

use App\Licence;
use App\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
class LicenceController extends Controller
{
    public function licences(){

        return response()->json(Licence::get(), 200);
    }

    public function show(Request $request)
    {

        $company = Company::where('name', '=', $request->company)->first();

        return response()->json($company->licences->sortBy('software'), 200);
    }

    public function valid(){

        $licences= Licence::whereHas('companies', function($q) {
            $q->where('company_licence.valid_until', '>=', Carbon::parse('now'));
        })->get();
        return response()->json($licences, 200);

    }
}
