<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::all();
        $hari=\Carbon\Carbon::now()->format('Y-m-d');
        return view('data', compact('laptops', 'hari'));
    }
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' =>'required',
            'tujuan' =>'required',
            'keterangan' =>'required',
            'nis' =>'required',
            'rayon'=>'required',
            'tanggal'=>'required',
            'guru' =>'required',
        ]);

        Laptop::create([
            'nama' => $request->nama,
            'tujuan' => $request->tujuan,
            'keterangan' => $request->keterangan,
            'nis' => $request->nis,
            'rayon'=> $request->rayon,
            'tanggal'=> $request->tanggal,
            'guru' => $request->guru,
        ]);
        
        return redirect()->back();
    }
    

    public function data()
    {
        //ambil data dari table todos
        $Laptop = Laptop::all();
        //compact untuk mengirim data ke bladenya
        //isi di compact harus sama kaya nama variablenya
        return view('data', compact ('Laptop'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function complated(Request $request, $id)
    {
        Laptop::where('id', $id)->update([
            'tanggal_kembali'=> \Carbon\Carbon::now()
        ]);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laptop::where('id', $id)->delete();

        return redirect()->back();
    }
    
}
