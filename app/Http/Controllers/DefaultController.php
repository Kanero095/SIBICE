<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\RegisBinaanUKM;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DefaultController extends Controller
{
    public function dashboard()
    {
        $activities = activities::orderBy('created_at', 'desc')->paginate(5);
        $tenants = RegisBinaanUKM::where('statusTenant', 'Diterima')->paginate(8);
        return view('pages.home',[
            'activities' => $activities,
            'tenants' => $tenants,
        ]);
    }

    public function visi_misi()
    {
        return view('pages.visi-misi');
    }

    public function galery()
    {
        return view('pages.galery');
    }

    public function activities()
    {
        $activities = Activities::orderBy('created_at', 'desc')->paginate(8);
        return view('pages.activities', ['activities' => $activities]);
    }

    public function tenants()
    {
        $tenants = RegisBinaanUKM::where('statusTenant', 'Diterima')->orderBy('created_at', 'desc')->paginate(8);
        $count = count($tenants);
        return view('pages.tenants', ['tenants' => $tenants, 'count' =>$count]);
    }

    public function show_tenant($Slug)
    {
        $dataTenant = RegisBinaanUKM::where('slug', $Slug)->firstOrFail();
        return view('pages.show-tenants', ['dataTenant' => $dataTenant]);
        // return dd($dataTenant);
    }
}
