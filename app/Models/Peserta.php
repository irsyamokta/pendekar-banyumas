<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'pesertas';
    protected $guarded = ['id_peserta'];

    protected $fillable = [
        'nama_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'nomor_hp', 'email', 'alamat', 'kelurahan', 'kecamatan', 'kabupaten'
    ];
}
