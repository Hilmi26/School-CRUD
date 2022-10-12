<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Siswa::all();
        // dd($data);
        return view('/page/student', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sekolah = Sekolah::select('id', 'nama_sekolah')->get();
        return view('/page/create', ['sekolah' => $sekolah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //menampung parameter yang dikirim
    {
        // dd($request->all());

        // Insert data to Database
        // cara 1
        // DB::insert('insert into siswa
        // (id, nama, alamat, sekolah_id) values (?, ?, ?, ?)',
        // [$request->id, $request->nama, $request->alamat, $request->sekolah_id]);

        // cara 2
        DB::table('siswas')->insert([
            'id'=> $request->id,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'sekolah_id' => $request->sekolah_id
        ]);

        // cara 3
        // Siswa::create($request->all());

        // cara 4
        // Siswa::create([
        //     'id'=> $request->id,
        //     'nama'=> $request->nama,
        //     'alamat'=> $request->alamat,
        //     'sekolah_id' => $request->sekolah_id
        // ]);

        // $validator = $request->validate([
        //     'nama' => 'required|string',
        //     'alamat' => 'required|string',
        //     'sekolah' => 'required'
        // ]);

        // Siswa::create($validator);

        return redirect('/page/student')->with('Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $siswa = Siswa::with('sekolah')->findOrfail($id); //relasi siswa dan sekolah
        $sekolah = Sekolah::where('id', '!=', $siswa->sekolah_id)->get(['id', 'nama_sekolah']); //mengambil id dan nama sekolah selain id sekolah yang dimiliki siswa
        return view('/page/edit', ['siswa' => $siswa, 'sekolah' => $sekolah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrfail($id);
        // dd($siswa);
        // $siswa->update($request->all());
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->sekolah_id = $request->sekolah_id;
        $siswa->save();

        return redirect('/page/student')->with('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect('/page/student');
    }
}
