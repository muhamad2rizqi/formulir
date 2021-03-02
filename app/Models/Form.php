<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'ktpnik', 'tempat', 'tgl_lahir', 'jkelamin', 'kebangsaan', 'alamatrumah', 'kodepos', 'tlpnrumah', 'tlpnkantor', 'tlpnhp', 'email', 'pendidikan', 'perusahaan', 'jabatan', 'alamatkantor', 'kodeposkantor', 'nokantor', 'fax', 'emailkantor', 'judul', 'nomor', 'asesmen'];
}
