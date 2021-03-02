@extends('admin/layouts/main')
@section('title','Sertifikasi')
@section('content')
@include('sweetalert::alert')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">
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
                        <table class="table table-bordered table-valign-middle">
                            <tbody>
                                <tr>
                                    <td class="font-bold">Nama Lengkap</td>
                                    @foreach ($forms as $form)
                                    <td class="font-bold">{{$form->nama_lengkap}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="font-bold">Nama Lengkap</td>
                                </tr>
                            </tbody>
                        </table>

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
                    </div>
                    <!-- <script type="text/javascript" src="//w.24timezones.com/l.js" async></script> -->
                </div>
                <!-- Main content -->

                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection