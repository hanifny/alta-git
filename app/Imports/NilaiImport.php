<?php

namespace App\Imports;

use App\Models\Nilai;
use App\Models\Summary;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use DateTime;

class NilaiImport implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'provinsi' =>	$col[0] ?? null,
                    'kota' =>	$col[1] ?? null,
                    'kecamatan' =>	$col[2] ?? null,
                    'kelurahan' =>	$col[3] ?? null,
                    'bkm' =>	$col[4] ?? null,
                    'bkm_status_berdaya' =>	$col[5] ?? null,
                    'luas_kelurahan' =>	$col[6] ?? null,
                    'tipologi_kelurahan' =>	$col[7] ?? null,
                    'latitude_kelurahan' =>	$col[8] ?? null,
                    'longitude_kelurahan' =>	$col[9] ?? null,
                    'kategori_kota' =>	$col[10] ?? null,
                    'nama_kawasan' =>	$col[11] ?? null,
                    'luas_kawasan' =>	$col[12] ?? null,
                    'jumlah_penduduk_kawasan' =>	$col[13] ?? null,
                    'tahun' =>	$col[14] ?? null,
                    'baseline_tahun' =>	$col[15] ?? null,
                    'jumlah_krt' =>	$col[16] ?? null,
                    'jumlah_kk' =>	$col[17] ?? null,
                    'jumlah_krt_mbr' =>	$col[18] ?? null,
                    'jumlah_krt_non_mbr' =>	$col[19] ?? null,
                    'jumlah_penduduk_laki' =>	$col[20] ?? null,
                    'jumlah_penduduk_perempuan' =>	$col[21] ?? null,
                    'skork_2' =>	$col[22] ?? null,
                    'skork_3' =>	$col[23] ?? null,
                    'skork_4' =>	$col[24] ?? null,
                    'skork_5' =>	$col[25] ?? null,
                    'skork_6' =>	$col[26] ?? null,
                    'skork_7' =>	$col[27] ?? null,
                    'skork_8' =>	$col[28] ?? null,
                    'skork_9' =>	$col[29] ?? null,
                    'skork_10' =>	$col[30] ?? null,
                    'skork_11' =>	$col[31] ?? null,
                    'skork_12' =>	$col[32] ?? null,
                    'skork_13' =>	$col[33] ?? null,
                    'skork_14' =>	$col[34] ?? null,
                    'skork_15' =>	$col[35] ?? null,
                    'skork_16' =>	$col[36] ?? null,
                    'skork_17' =>	$col[37] ?? null,
                    'skork_18' =>	$col[38] ?? null,
                    'skork_19' =>	$col[39] ?? null,
                    'skork_20' =>	$col[40] ?? null,
                    'skork_21' =>	$col[41] ?? null,
                    'skork_22' =>	$col[42] ?? null,
                    'skork_23' =>	$col[43] ?? null,
                    'skork_24' =>	$col[44] ?? null,
                ];
                // dd($data);
                // if($data['provinsi'] != 0) {
                    Nilai::create($data);
                // }
            } catch (\Throwable $th) {
                // dd($th);
                continue;
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
