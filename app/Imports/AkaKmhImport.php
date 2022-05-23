<?php

namespace App\Imports;

use App\Models\AkademikKemahasiswaan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AkaKmhImport implements ToCollection, WithStartRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                $data = [
                    'nim' => $row[1] ?? '',
                    'no_reg' => $row[2] ?? '',
                    'nama' => $row[3] ?? '',
                    'nama_lengkap' => $row[4] ?? '',
                    'fakultas' => $row[5] ?? '',
                    'prodi' => $row[6] ?? '',
                    'kelas' => $row[7] ?? '',
                    'tahun_daftar' => $row[8] ?? '',
                    'semester_daftar' => $row[9] ?? '',
                    'tempat_lahir' => $row[10] ?? '',
                    'tanggal_lahir' => $row[11] ?? '',
                    'jenis_kelamin' => $row[12] ?? '',
                    'nama_ayah' => $row[13] ?? '',
                    'nama_ibu' => $row[14] ?? '',
                    'agama' => $row[15] ?? '',
                    'gol_darah' => $row[16] ?? '',
                    'status_pernikahan' => $row[17] ?? '',
                    'email' => $row[18] ?? '',
                    'no_hp' => $row[19] ?? '',
                    'kode_warga_negara' => $row[20] ?? '',
                    'warga_negara' => $row[21] ?? '',
                    'alamat_kuliah' => $row[22] ?? '',
                    'telp_kuliah' => $row[23] ?? '',
                    'alamat_tetap' => $row[24] ?? '',
                    'telp_tetap' => $row[25] ?? '',
                    'alamat_darurat' => $row[26] ?? '',
                    'telp_darurat' => $row[27] ?? '',
                    'alamat_penanggung_jawab' => $row[28] ?? '',
                    'telp_penanggung_jawab' => $row[29] ?? '',
                    'asal_slta' => $row[30] ?? '',
                    'pendidikan_sarjana' => $row[31] ?? '',
                    'prodi_sarjana' => $row[32] ?? '',
                    'pendidikan_magister' => $row[33] ?? '',
                    'prodi_magister' => $row[34] ?? '',
                ];
                if ($data['nim'] != 0) {
                    AkademikKemahasiswaan::create($data);
                }
            } catch (\Throwable $th) {
                //throw $th;
                dd($th);
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
