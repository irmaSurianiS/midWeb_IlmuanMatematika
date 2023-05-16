<?php

namespace App\Http\Controllers;

use App\Http\Requests\IlmuanUpdateRequest;
use App\Http\Requests\IlmuanRequest;
use App\Models\IlmuanMatematika;
use Illuminate\Http\Request;

class IlmuanMatematikaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ilmuan = IlmuanMatematika::get();
        return view('ilmuan.index', ["ilmuan" => $ilmuan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ilmuan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IlmuanRequest $request)
    {
        IlmuanMatematika::create([
            "nama_ilmuan" => $request->nama_ilmuan,
            "biografi_singkat" => $request->biografi_singkat
        ]);

        return redirect()->route("ilmuan.index")->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(IlmuanMatematika $ilmuanMatematika)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IlmuanMatematika $ilmuanMatematika, $id)
    {
        $ilmuan = IlmuanMatematika::where("id", $id)->first();
        return view("ilmuan.edit", ["ilmuan" => $ilmuan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IlmuanUpdateRequest $request, IlmuanMatematika $ilmuanMatematika, $id)
    {
        $ilmuan = IlmuanMatematika::where("id", $id)->first();
        $ilmuan->update([
            "nama_ilmuan" => $request->nama_ilmuan,
            "biografi_singkat" => $request->biografi_singkat
        ]);
        return redirect()->route("ilmuan.index")->with('success', 'Data berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IlmuanMatematika $ilmuanMatematika, $id)
    {
        $ilmuan = IlmuanMatematika::where("id", $id)->first();
        $ilmuan->delete();
        return redirect()->route("ilmuan.index")->with('error', 'Data berhasil diHapus');
    }
}
