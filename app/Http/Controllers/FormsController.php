<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_guru' => 'required',
        //     'email' => 'required|email',
        //     'keilmuan' => 'required',
        //     'foto' => 'file'
        $request->validate([
            'nama_lengkap' => 'required',
            'ktpnik' => 'required|size:16',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'jkelamin' => 'required',
            'kebangsaan' => 'required',
            'alamatrumah' => 'required',
            'kodepos' => 'required',
            // 'tlpnrumah' => 'required',
            // 'tlpnkantor' => 'required',
            'tlpnhp' => 'required',
            'email' => 'required|email',
            'pendidikan' => 'required',
            'perusahaan' => 'required',
            'jabatan' => 'required',
            // 'alamatkantor' => 'required',
            // 'kodeposkantor' => 'required',
            // 'nokantor' => 'required',
            // 'fax' => 'required',
            // 'emailkantor' => 'required',
            'judul' => 'required',
            'nomor' => 'required',

        ]);

        $nama_lengkap = $request->nama_lengkap;
        $ktpnik = $request->ktpnik;
        $tempat = $request->tempat;
        $tgl_lahir = $request->tgl_lahir;
        $jkelamin = $request->jkelamin;
        $kebangsaan = $request->kebangsaan;
        $alamatrumah = $request->alamatrumah;
        $kodepos = $request->kodepos;
        $tlpnrumah = $request->tlpnrumah;
        $tlpnkantor = $request->tlpnkantor;
        $tlpnhp = $request->tlpnhp;
        $email = $request->email;
        $pendidikan = $request->pendidikan;
        $perusahaan = $request->perusahaan;
        $jabatan = $request->jabatan;
        $alamatkantor = $request->alamatkantor;
        $kodeposkantor = $request->kodeposkantor;
        $nokantor = $request->nokantor;
        $fax = $request->fax;
        $emailkantor = $request->emailkantor;
        $judul = $request->judul;
        $nomor = $request->nomor;
        $asesmen = $request->asesmen;
        // $asesmen['asesmen'] = $request->asesmen('asesmen');
        $form = new Form();
        $form->nama_lengkap = $nama_lengkap;
        $form->ktpnik = $ktpnik;
        $form->tempat = $tempat;
        $form->tgl_lahir = $tgl_lahir;
        $form->jkelamin = $jkelamin;
        $form->kebangsaan = $kebangsaan;
        $form->alamatrumah = $alamatrumah;
        $form->kodepos = $kodepos;
        $form->tlpnrumah = $tlpnrumah;
        $form->tlpnkantor = $tlpnkantor;
        $form->tlpnhp = $tlpnhp;
        $form->email = $email;
        $form->pendidikan = $pendidikan;
        $form->perusahaan = $perusahaan;
        $form->jabatan = $jabatan;
        $form->alamatkantor = $alamatkantor;
        $form->kodeposkantor = $kodeposkantor;
        $form->nokantor = $nokantor;
        $form->fax = $fax;
        $form->emailkantor = $emailkantor;
        $form->judul = $judul;
        $form->nomor = $nomor;
        $form->asesmen = $asesmen;
        $form->asesmen = implode(' ', $request->asesmen);
        $form->save();
        // return redirect('/')->with('success', 'Data Form Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
    public function getAllForms()
    {
        $forms = Form::all();
        return view('/', ['forms' => $forms]);
    }
}
