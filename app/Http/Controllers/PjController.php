<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->roles == 'Admin') {
            return view('pjs.index', [
                'surats' => Surat::where('jenis', 'Pertanggung Jawab')->get(),
                'asahan' => Surat::where('user_id', 15)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'bb' => Surat::where('user_id', 5)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'binjai' => Surat::where('user_id', 23)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'dairi' => Surat::where('user_id', 26)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'ds' => Surat::where('user_id', 3)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'gs' => Surat::where('user_id', 29)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'hh' => Surat::where('user_id', 13)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'karo' => Surat::where('user_id', 19)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'lb' => Surat::where('user_id', 32)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'lbs' => Surat::where('user_id', 31)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'lbu' => Surat::where('user_id', 28)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'langkat' => Surat::where('user_id', 10)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'mn' => Surat::where('user_id', 24)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'medan' => Surat::where('user_id', 4)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'nias' => Surat::where('user_id', 16)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'nb' => Surat::where('user_id', 11)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'ns' => Surat::where('user_id', 7)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'nu' => Surat::where('user_id', 20)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'pl' => Surat::where('user_id', 35)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'plu' => Surat::where('user_id', 12)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'ps' => Surat::where('user_id', 8)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'pb' => Surat::where('user_id', 22)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'psiantar' => Surat::where('user_id', 14)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'samosir' => Surat::where('user_id', 18)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'sb' => Surat::where('user_id', 21)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'sibolga' => Surat::where('user_id', 36)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'simalungun' => Surat::where('user_id', 30)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'tb' => Surat::where('user_id', 33)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'ts' => Surat::where('user_id', 34)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'tt' => Surat::where('user_id', 17)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'tu' => Surat::where('user_id', 9)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'ttinggi' => Surat::where('user_id', 27)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
                'toba' => Surat::where('user_id', 25)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal','desc')->first(),
            ]);
        } else {
            return view('pjs.index', [
                'surats' => Surat::where('user_id', auth()->user()->id)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal')->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pjs.create', [
            'daerahs' => User::where('roles', 'User')->orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = User::where('name', $request->name)->first();
        if ($check == null) {
            return redirect('/pjs')->with('success','Data gagal ditambah, Nama Kabupaten tidak terdaftar!');
        } else {
            $validatedSurat = $request->validate([
                'posisi' => 'required',
                'tanggal' => 'required',
                'files' => 'file|mimes:jpg,png',
            ]);
            $validatedSurat['user_id'] = $check->id;
            $validatedSurat['jenis'] = 'Pertanggung Jawab';
            if ($request->file('files')) {
                $validatedSurat['files'] = $request->file('files')->store('surat');
            }
            Surat::create($validatedSurat);
            return redirect('/pjs')->with('success','Data berhasil ditambah!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(User $pj)
    {
        return view('pjs.details', [
            'surats' => Surat::where('user_id', $pj->id)->where('jenis', 'Pertanggung Jawab')->orderBy('tanggal')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $pj)
    {
        return view('pjs.edit', [
            'surat' => $pj,
            'daerahs' => User::where('roles', 'User')->orderBy('name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $pj)
    {
        $check = User::where('name', $request->name)->first();
        $validatedSurat = $request->validate([
            'posisi' => 'required',
            'tanggal' => 'required',
            'files' => 'file|mimes:jpg,png',
        ]);
        $validatedSurat['user_id'] = $check->id;
        $validatedSurat['jenis'] = 'Pertanggung Jawab';
        if ($request->file('files')) {
            Storage::delete($pj->files);
            $validatedSurat['files'] = $request->file('files')->store('surat');
        }
        Surat::where('id', $pj->id)->update($validatedSurat);
        return redirect('/pjs')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $pj)
    {
        if ($pj->files) {
            Storage::delete($pj->files);
        }
        Surat::destroy($pj->id);

        return redirect('/pjs')->with('success','Data berhasil dihapus!');
    }
}
