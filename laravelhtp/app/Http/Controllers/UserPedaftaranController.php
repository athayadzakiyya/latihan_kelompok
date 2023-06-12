<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPedaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("depan.pendaftaran", ["title" => "pendaftaran"]);
    }

    public function pendaftaranVerifikasi()
    {
        return view("depan.pendaftaranverifikasi", ["title" => "verifikasi pandaftaran"]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id = null)
    {
         return view("depan.pendaftaranDetail", ["title" => "detailpendaftaran"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = "")
    {
        return view("depan.pendaftaranUpdate", ["title" => "Update Pendaftaran"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
