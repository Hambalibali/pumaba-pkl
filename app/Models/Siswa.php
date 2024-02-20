<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama','nis','jurusan_id','jenis_kelamin'];
    protected $table = 'siswa';
    public $timestamps = false;

    public function jurusan()
{
    return $this->belongsTo(Jurusan::class);
}
//     protected static function boot()
// {
//     parent::boot();

//     static::saving(function ($siswa) {
//         $siswa->created_at = null;
//         $siswa->updated_at = null;
//     });
// }

}