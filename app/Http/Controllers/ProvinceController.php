<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Province::all();

        return view('pages.province.index', [
            'items' => $items,
            'title' => 'All Province'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        Province::create($data);
        return redirect()->route('provinsi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        Province::findOrFail($id)->update($data);
        return redirect()->route('provinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Province::findOrFail($id)->delete();
        return redirect()->route('provinsi.index');
    }
}
