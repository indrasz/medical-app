<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Hospital;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HospitalRequest;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $hospitals = Hospital::with(['category'])->get();
        return view('pages.admin.hospital.index', compact('hospitals', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        // dd($categories);
        return view('pages.admin.hospital.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HospitalRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/hospital', 'public');

        // dd($data);

        Hospital::create($data);


        return redirect()->route('dashboard.hospital.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        $categories = Category::all();
        return view('pages.admin.hospital.edit', compact('hospital', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        // dd($data);

        $get_photo = Hospital::findOrFail($hospital->id);

        // dd($get_photo);

        if (isset($data['thumbnail'])) {
            $path = 'storage/' . $get_photo['thumbnail'];

            if (File::exists($path)) {
                File::delete($path);
            } else {
                File::delete('storage/app/public/' . $get_photo['thumbnail']);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/hospital',
                'public'
            );
        }

        $hospital->update($data);

        // toast()->success('Update data has been success');
        return redirect()->route('dashboard.hospital.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hospital = Hospital::findorFail($id);
        $hospital->delete();
        // toast()->success('Delete has been success');
        return redirect()->route('dashboard.hospital.index');
    }
}
