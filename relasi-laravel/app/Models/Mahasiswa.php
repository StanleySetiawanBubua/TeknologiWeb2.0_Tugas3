<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    #tentukan nama tabel terkait
    // protected $table = 'mahasiswas';
    // jika aturan penamaan model dan migration singular dan plural
    // maka kode ini tidak perlu digunakan

    # Mass Asignment -> bisa menambah banyak data secara bersamaan
    protected $fillable = ['nama', 'nim'];

    public function wali()
    {
        // model Mahasiswa bisa memiliki 1 data dari model Wali
        // melalui fk 'id mahasiswa'
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }

    /* relasi One-to-Many
    *====================
    */

    public function dosen()
    {
        // data model Mahasiswa dimiliki oleh model Dosen melalui fk "id dosen"
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }
}
