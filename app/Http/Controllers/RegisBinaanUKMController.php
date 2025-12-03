<?php

namespace App\Http\Controllers;

use App\Models\RegisBinaanUKM;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RegisBinaanUKMController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
            return view('forms.Binaan-UKM');
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function submit(Request $request, array $input)
    {
        $count = RegisBinaanUKM::where('Email', $request->Email)->count();
        if ($count == 1){
            return back()->with('error','Anda Telah Melakukan Registrasi. Silahkan Hubungi Admin!!!');
        }  else {
            Validator::make($input, [
                'nameTenant' => ['required|string|max:255'],
                'LBPOM' => ['nullable|file|mimes:pdf|max:2048'],
                'LSNI' => ['nullable|file|mimes:pdf|max:2048'],
                'LHALAL' => ['nullable|file|mimes:pdf|max:2048'],
                'LPIRT' => ['nullable|file|mimes:pdf|max:2048'],
                'LNIB' => ['nullable|file|mimes:pdf|max:2048'],
                'LHKI' => ['nullable|file|mimes:pdf|max:2048'],
                'Logo' => ['required|file|max:2048'],
            ]);

            $dateCreate = Carbon::now();
            $date = Carbon::now()->format('d-m-Y');
            $years = Carbon::now()->year;

            $regis = new RegisBinaanUKM();
            $regis->Name = $request->Name;
            $regis->Age = $request->Age;
            $regis->Gender = $request->Gender;
            $regis->Email = $request->Email;
            $regis->NoContactTenant = $request->NoContactTenant;
            $regis->nameTenant = $request->nameTenant;
            $regis->sectorTenant = $request->sectorTenant;
            $regis->addreasTenant = $request->addreasTenant;
            $regis->aboutTenant = $request->aboutTenant;
            $regis->yearTenant = $years;
            $regis->FB = $request->FB;
            $regis->IG = $request->IG;
            $regis->DateRegist = $dateCreate;

            // BPOM
            if ($request->hasFile('LBPOM')) {
                $BPOM = 'BPOM_' . $request->nameTenant . '.pdf';
                $FileBPOM = $request->file('LBPOM')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $BPOM);
            } else {
                $FileBPOM = null;
            }
            $regis->LBPOM = $FileBPOM;

            // HALAL
            if ($request->hasFile('LHALAL')) {
                $HALAL = 'HALAL_' . $request->nameTenant . '.pdf';
                $FileHALAL = $request->file('LHALAL')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $HALAL);
            } else {
                $FileHALAL = null;
            }
            $regis->LHALAL = $FileHALAL;


            // SNI
            if ($request->hasFile('LSNI')) {
                $SNI = 'SNI_' . $request->nameTenant . '.pdf';
                $FileSNI = $request->file('LSNI')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $SNI);
            } else {
                $FileSNI = null;
            }
            $regis->LSNI = $FileSNI;

            // HKI
            if ($request->hasFile('LHKI')) {
                $HKI = 'HKI_' . $request->nameTenant . '.pdf';
                $FileHKI = $request->file('LHKI')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $HKI);
            } else {
                $FileHKI = null;
            }
            $regis->LHKI = $FileHKI;

            // NIB
            if ($request->hasFile('LNIB')) {
                $NIB = 'NIB_' . $request->nameTenant . '.pdf';
                $FileNIB = $request->file('LNIB')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $NIB);
            } else {
                $FileNIB = null;
            }
            $regis->LNIB = $FileNIB;

            // PIRT
            if ($request->hasFile('LPIRT')) {
                $PIRT = 'PIRT_' . $request->nameTenant . '.pdf';
                $FilePIRT = $request->file('LPIRT')->storeAs('FileRegistTenant/' . $years . '/' . $date . '/' . $request->nameTenant, $PIRT);
            } else {
                $FilePIRT = null;
            }
            $regis->LPIRT = $FilePIRT;

            // Logo
            $image = $request->file('Logo');
            $Logo = 'Logo_' . $request->nameTenant . '.' . $image->getClientOriginalExtension();
            $request->Logo->move('Image/Tenants/', $Logo);
            $regis->Logo = $Logo;

            // slug
            $slug = Str::slug($request->nameTenant . '&' . $request->sectorTenant . '&' . $request->Name);
            $regis->Slug = $slug;

            // return dd($regis);
            $regis->save();
            return back()->with('success','Registrasi Berhasil');
        }
    }

    public function verify()
    {
        if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin') {
            $verify = RegisBinaanUKM::orderBy('created_at', 'desc')->paginate(8);
            return view('admin.regis-manage', ['verify' => $verify]);
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function pengajuan()
    {
        if (Auth::check() && Auth::user()->roles == 'user'){
            $account = Auth::user()->email;
            $datas = RegisBinaanUKM::where('email', $account)->get();

            return view('pages.show-regis-tenant', ['datas' => $datas]);
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function edit_verifyRegis($slug)
    {
        if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin') {
            $verify = RegisBinaanUKM::where('slug', $slug)->get();
            return view('admin.edit-regis-manage', ['verify' => $verify]);
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function update_verifyRegis($Slug, Request $request)
    {
        $data = RegisBinaanUKM::where('slug', $Slug)->firstOrFail()->update([
            'statusTenant' => $request->statusTenant,
        ]);
        if($data){
            return redirect('/registrasi-binaan-ukm/verify')->with('success','Update Data Successfully');
        }
    }
}
