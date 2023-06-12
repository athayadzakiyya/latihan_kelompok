<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'dbl_pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        "thn_aja", "nm_lengkap", "nm_panggilan", "jk", "tmp_lahir", "tgl_lahir", "alamat",
        "foto_anak", "fc_ijazah", "fc_SKHUN", "fc_NISN", "fc_BPJS", "fc_KK", "fc_AkteLahir",
        "fc_KTPOrtu", "foto_SuratSehat", "user_id"

    ];
}
