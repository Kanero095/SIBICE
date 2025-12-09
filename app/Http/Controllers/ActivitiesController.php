<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Cloudinary\Api\Upload\UploadApi;

class ActivitiesController extends Controller
{
    public function create()
    {
        if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin') {
            return view('forms.activities');
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function submit(Request $request)
    {
        Carbon::setLocale('id');
        $date = Carbon::now();
        $dateFormatted = Carbon::parse($date)->translatedFormat('d F Y');

        $activities = new Activities();
        $activities->Author = $request->Author;
        $activities->DateCreated = $date;
        $activities->dateFormatted = $dateFormatted;
        $activities->Description = $request->Description;
        $activities->LinkContent = $request->LinkContent;

        $slug = Str::slug($request->Author .  Str::random(10) . $date);
        $count = Activities::where('slug', 'LIKE', "{$slug}%")->count();
        $slug = $count ? "{$slug}-{$count}" : $slug;

        $activities->slug = hash('sha256', $slug);

        $uploadimage = (new UploadApi())->upload($request->file('ImageActivities')->getRealPath(), [
            'folder' => 'SIBICE/Activities/' . $dateFormatted,
            'public_id' => $request->Author . '_' . $dateFormatted,
            'resource_type' => 'auto',
            'type' => 'upload',
        ]);
        $activities->ImageActivities = $uploadimage['secure_url'];

        $activities->save();
        return back()->with('success', 'Activities submit successfully');
    }

    public function manage()
    {
        if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin') {
            $activities = Activities::all();
            return view('admin.activities-manage', ['activities' => $activities]);
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function delete($slug)
    {
        if (Auth::user()->roles == 'Super Admin' || Auth::user()->roles == 'Admin') {
            $activities = Activities::where('slug', $slug)->delete();
            return back()->with('success', 'Activities deleted successfully');
        } else {
            return view('pages.blank')->with('danger', 'You are not allowed to Access this page');
        }
    }

    public function edit($slug)
    {
        $activities = Activities::where('slug', $slug)->firstOrFail();
        return view('forms.activities-edit', ['activities' => $activities]);
    }

    public function update($slug, Request $request)
    {
        $file = Activities::where('slug', $slug)->firstOrFail();
        $Author = $file->Author;
        $DateCreated = $file->DateCreated;
        $dateFormatted = $file->dateFormatted;

        if ($request->hasFile('ImageActivities')) {
            $file = $request->file('ImageActivities');
            $Image = $request->Author . '_' . $dateFormatted . '.' . Str::random(5) . '.' . $file->getClientOriginalExtension();
            $request->ImageActivities->move('Image/Activities/' . $dateFormatted . '/', $Image);
        } else {
            $Image = $file->ImageActivities;
        }

        $activities = Activities::where('slug', $slug)->firstOrFail()->update([
            'Author' => $Author,
            'Datecreated' => $DateCreated,
            'Description' => request('Description'),
            'LinkContent' => request('LinkContent'),
            'dateFormatted' => $dateFormatted,
            'ImageActivities' => $Image,
            'slug' => $slug,
        ]);
        if ($activities) {
            return redirect('/activities/manage')->with('success', 'Update Activities Successfully');
        }
    }
}
