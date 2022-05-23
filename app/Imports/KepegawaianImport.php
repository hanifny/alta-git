<?php

namespace App\Imports;

use App\Models\Kepegawaian;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;

class KepegawaianImport implements ToCollection, WithStartRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                $data = [
                    'nip' => $row[1] ?? '',
                    'nama_lengkap' => $row[2] ?? '',
                    'nidn' => $row[3] ?? '',
                    'nira' => $row[4] ?? '',
                    'gelar_depan' => $row[5] ?? '',
                    'gelar_belakang' => $row[6] ?? '',
                    'nomor_ktp' => $row[7] ?? '',
                    'nomor_kk' => $row[8] ?? '',
                    'nomor_npwp' => $row[9] ?? '',
                    'nomor_hp' => $row[10] ?? '',
                    'tempat_lahir' => $row[11] ?? '',
                    'tanggal_lahir' => $row[12] ? DateTime::createFromFormat('j M Y', $row[12])->format('Y-m-d') : null,
                    'jenis_kelamin' => $row[13] ?? '',
                    'agama' => $row[14] ?? '',
                    'alamat' => $row[15] ?? '',
                    'email' => $row[16] ?? '',
                    'nomor_karpeg' => $row[17] ?? '',
                    'nomor_rekening' => $row[18] ?? '',
                    'unit_kerja' => $row[19] ?? '',
                    'unit_kerja_penempatan' => $row[20] ?? '',
                    'unit_kerja_penugasan' => $row[21] ?? '',
                    'tingkat_pendidikan' => $row[22] ?? '',
                    'negara_institusi' => $row[23] ?? '',
                    'kota_institusi' => $row[24] ?? '',
                    'status_pegawai' => $row[25] ?? '',
                    'jenis_pegawai' => $row[26] ?? '',
                    'kategori_penugasan' => $row[27] ?? '',
                    'golongan' => $row[28] ?? '',
                    'tmt_golongan' => $row[29] ? DateTime::createFromFormat('j M Y', $row[29])->format('Y-m-d') : null,
                    'status_pernikahan' => $row[30] ?? '',
                    'jabatan_fungsional_akademik' => $row[31] ?? '',
                    'tmt_jabatan_fungsional_akademik' => $row[32] ? DateTime::createFromFormat('j M Y', $row[32])->format('Y-m-d') : null,
                    'jabatan_fungsional_umum' => $row[33] ?? '',
                    'tmt_jabatan_fungsional_umum' => $row[34] ? DateTime::createFromFormat('j M Y', $row[34])->format('Y-m-d') : null,
                    'tanggal_mulai_kerja' => $row[35] ? DateTime::createFromFormat('j M Y', $row[35])->format('Y-m-d') : null,
                ];
                if ($data['nip'] != 0) {
                    Kepegawaian::create($data);
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
