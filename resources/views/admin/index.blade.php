@extends('admin/layouts/main')
@section('title','Sertifikasi')
@section('css')
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#0C9;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float{
            margin-top:22px;
        }
    </style>
@endsection
@section('content')
@include('sweetalert::alert')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">
        <!---- Floating Button untuk cetak dokumen ---->
        <a href="#" class="float">
            <i class="fa fa-plus my-float"></i>
        </a>
        <!-- / -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><b>FR-APL-01. FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</b></h5>
                        <br>
                        <h6><b>Bagian 1 : Rincian Data Permohonan Sertifikasi</b></h6>
                        <h6>Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</h6>
                        <br>
                        <h6>a. <b>Data Pribadi</b></h6>
                        <form class="contact-form" action="{{ action('App\Http\Controllers\FormsController@store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Nama Lengkap</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Masukkan Nama" value="{{old('nama_lengkap')}}">
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">No. KTP / NIK</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="ktpnik" id="ktpnik" class="form-control @error('ktpnik') is-invalid @enderror" placeholder="Masukkan KTP/NIK" value="{{old('ktpnik')}}">
                                    @error('ktpnik')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Tempat / Tgl Lahir</legend>
                                <div class="col">
                                    <input type="text" name="tempat" id="tempat" class="form-control @error('tempat') is-invalid @enderror" placeholder="Masukkan Tempat Lahir" value="{{old('tempat')}}">
                                    @error('tempat')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input name="tgl_lahir" id="tgl_lahir" class="form-control" type="date" value="">
                                </div>
                            </div>
                            <fieldset class="form-group row">

                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="Pria" checked>
                                        <label class="form-check-label" for="jkelamin">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkelamin" id="jkelamin" value="Wanita">
                                        <label class="form-check-label" for="wanita">
                                            Wanita
                                        </label>
                                    </div>
                                </div>

                            </fieldset>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Kebangsaan</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="kebangsaan" class="form-control" id="kebangsaan" placeholder="Kebangsaan" value="{{old('kebangsaan')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Alamat Rumah</legend>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamatrumah" id="alamatrumah" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Kode Pos</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" value="{{old('kodepos')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">No. Telepon</legend>
                                <div class="col">
                                    <input type="text" name="tlpnrumah" class="form-control" id="tlpnrumah" placeholder="Rumah" value="{{old('tlpnrumah')}}">
                                </div>
                                <div class="col">
                                    <input type="text" name="tlpnkantor" class="form-control" id="tlpnkantor" placeholder="Kantor" value="{{old('tlpnkantor')}}">
                                </div>
                                <div class="col">
                                    <input type="text" name="tlpnhp" class="form-control" id="tlpnhp" placeholder="HP" value="{{old('tlpnhp')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Email</legend>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Kualifikasi / Pendidikan</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Pendidikan">
                                </div>
                            </div>
                            <h6>b. <b>Data Pekerjaan Sekarang</b></h6>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Perusahaan / Lembaga</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="perusahaan" class="form-control" id="perusahaan" placeholder="Perusahaan / Lembaga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Jabatan</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Alamat Kantor</legend>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamatkantor" id="alamatkantor" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">Kode Pos</legend>
                                <div class="col-sm-10">
                                    <input type="text" name="kodeposkantor" class="form-control" id="kodeposkantor" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">No. Telepon / Fax / Email</legend>
                                <div class="col">
                                    <input type="text" name="nokantor" class="form-control" id="nokantor" placeholder="No. Telepon">
                                </div>
                                <div class="col">
                                    <input type="text" name="fax" class="form-control" id="fax" placeholder="Fax">
                                </div>
                                <div class="col">
                                    <input type="text" name="emailkantor" class="form-control" id="emailkantor" placeholder="Email">
                                </div>
                            </div>
                            <p style="page-break-before: always;"></p>
                            <br>
                            <h6><b>Bagian 2 : Data Sertifikasi</b></h6>
                            <h6>Tuliskan Judul dan Nomor Skema Sertifikasi serta Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi yang anda</h6>
                            <h6>ajukan untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta pengalaman kerja yang ada miliki.</h6>
                            <br>
                            <table class="table table-bordered table-valign-middle">
                                <thead>
                                    <tr>
                                        <th style="background-color:#8ece61" rowspan="2">Skema Sertifikasi /</br>Klaster Asesmen</th>
                                        <th style="background-color:#8ece61">Judul : </th>
                                        <th colspan="3"><input type="text" name="judul" class="form-control" id="judul" placeholder="Isi Judul">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="background-color:#8ece61">Nomor : </th>
                                        <th colspan="3"><input type="text" name="nomor" class="form-control" id="nomor" placeholder="Isi Nomor">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="background-color:#8ece61" colspan="2">Tujuan Asesmen</th>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" value="Sertifikasi">
                        <label class="custom-control-label" for="sertifikasi">Sertifikasi</label> -->
                                                <label><input type="checkbox" name="asesmen[]" value="Sertifikasi"> Sertifikasi</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" id="rpl">
                        <label class="custom-control-label" for="rpl">RPL</label> -->
                                                <label><input type="checkbox" name="asesmen[]" value="Sertifikasi Ulang"> Sertifikasi Ulang</label>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" id="sertifikasiulang">
                        <label class="custom-control-label" for="sertifikasiulang">Sertifikasi Ulang</label> -->
                                                <label><input type="checkbox" name="asesmen[]" value="PKT"> PKT</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" id="hasilpelatihan">
                        <label class="custom-control-label" for="hasilpelatihan">Hasil Pelatihan/Proses Pembelajaran</label> -->
                                                <label><input type="checkbox" name="asesmen[]" value="RPL"> RPL</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" id="pkt">
                        <label class="custom-control-label" for="pkt">PKT</label> -->
                                                <label><input type="checkbox" name="asesmen[]" value="Hasil Pelatihan/Proses Pembelajaran"> Hasil Pelatihan/Proses Pembelajaran</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <!-- <input type="checkbox" class="custom-control-input" name="asesmen" id="lainnya"> -->
                                                <label><input type="checkbox" name="asesmen[]" value="Lainnya"> Lainnya</label>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <h6>Daftar Unit Kompetensi :</h6>
                        <table class="table table-bordered table-valign-middle">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Kode Unit</center>
                                    </th>
                                    <th>
                                        <center>Judul Unit</center>
                                    </th>
                                    <th>
                                        <center>Jenis Standar (SKKNI/<br>Standar Internasional/Standar Khusus)</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TIK.MM01.004.01</td>
                                    <td>Memperagakan pengetahuan dan syarat-syarat multimedia</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TIK.MM01.005.01</td>
                                    <td>Mengidentifikasi komponen multimedia</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>TIK.MM01.007.01</td>
                                    <td>Memilih dan memakai <i>software</i> dan <i>hardware</i> untuk multimedia</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>TIK.MM01.012.01</td>
                                    <td>Mengikuti prosedur kesehatan keselamatan</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>TIK.MM02.032.01</td>
                                    <td>Membuat, memanipulasi, dan menggabung</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>TIK.MM02.049.01</td>
                                    <td>Menyiapkan dan membuat frame/eel berwarna</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>TIK.MM02.052.01</td>
                                    <td>Membuat rekaman gambar berurutan untuk</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>TIK.MM02.053.01</td>
                                    <td>Membuat dan memanipulasi gambar-gambar</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>TIK.MM02.062.01</td>
                                    <td>Menyiapkan bahan dan dokumen untuk editing</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>TIK.MM02.064.01</td>
                                    <td>Menjalankan sistem editing non-linear</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>TIK.MM02.070.01</td>
                                    <td>Menggabungkan gambar 2D kedalam sajian</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>TIK.MM02.071.01</td>
                                    <td>Menggabungkan fotografi digital kedalam sajian</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>TIK.MM02.072.01</td>
                                    <td>Menggabungkan audio kedalam sajian multimedia</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>TIK.MM02.074.01</td>
                                    <td>Menggabungkan video kedalam sajian</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>J.591120.006.01</td>
                                    <td>Melakukan penyuntingan suara dan gambar berita (animatie previsualisation)</td>
                                    <td>
                                        <center>SKKNI</center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="page-break-before: always;"></p>
                        <br>
                        <h6><b>Bagian 3 :</b> Bukti Kelengkapan Pemohon</h6>
                        <h6><b>a. Bukti Persyaratan Dasar Pemohon :</b></h6>
                        <table class="table table-bordered table-valign-middle">
                            <thead style="background-color:#8ece61">
                                <tr>
                                    <th rowspan="2">
                                        <center>No</center>
                                    </th>
                                    <th rowspan="2">
                                        <center>Bukti Persyaratan</center>
                                    </th>
                                    <th colspan="2">
                                        <center>Ada</center>
                                    </th>
                                    <th rowspan="2">
                                        <center>Tidak Ada</center>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <center>Memenuhi Syarat</center>
                                    </th>
                                    <th>
                                        <center>Tidak Memenuhi Syarat</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="5">
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>2</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <h6><b>b. Bukti Kompetensi Yang Relevan :</b></h6>
                        <table class="table table-bordered table-valign-middle">
                            <thead style="background-color:#8ece61">
                                <tr>
                                    <th rowspan="2">
                                        <center>No</center>
                                    </th>
                                    <th rowspan="2">
                                        <center>Rincian Bukti Pendidikan/Pelatihan, Pengalaman Kerja</center>
                                    </th>
                                    <th colspan="2">
                                        <center>Lampiran Bukti*</center>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <center>Ada</center>
                                    </th>
                                    <th>
                                        <center>Tidak Ada</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>2</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>3</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>4</center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <h6>*diisi oleh LSP</h6>
                        <table class="table table-bordered table-valign-middle">
                            <colgroup>
                                <col style="width: 340px">
                                <col style="width: 180px">
                                <col style="width: 266px">
                            </colgroup>
                            <thead>
                                <tr>
                                    <td class="tg-0pky" rowspan="3"><b>Rekomendasi (diisi oleh LSP):</b><br>Berdasarkan ketentuan persyaratan dasar asesmen, maka pemohon:
                                        <br>
                                        <label><input type="checkbox" value=""> (Diterima / Tidak diterima *) sebagai peserta sertifikasi</label>
                                    </td>
                                    <th class="tg-0pky" colspan="2">Pemohon :</th>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">Nama</td>
                                    <td class="tg-0pky"></td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">Tanda Tangan/Tanggal</td>
                                    <td class="tg-0pky"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align:top" class="tg-0pky" rowspan="4"><b>Catatan :</b></td>
                                    <td class="tg-0pky" colspan="2"><b>Admin LSP :</b></td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">Nama</td>
                                    <td class="tg-0pky"></td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">NIK LSP</td>
                                    <td class="tg-0pky"></td>
                                </tr>
                                <tr>
                                    <td class="tg-0pky">Tanda Tangan/Tanggal</td>
                                    <td class="tg-0pky"></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success float-right">Simpan</button>
                            </div>
                        </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection