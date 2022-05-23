<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\KwsKmhKrw2;

class InfrastrukturAtasImport implements ToCollection, WithStartRow
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'provinsi'	=> $col[0],
                    'kabupaten' => $col[1],
                    'kecamatan' =>	$col[2],
                    'kelurahan' => $col[3],
                    'nspp' => $col[4],
                    'lembaga_pendidikan_keagamaan' =>	$col[5],
                    'alamat' => $col[6],
                    'kode_pos' => $col[7],
                    'jenis_spald' =>	$col[8],
                    'nama_pimpinan' =>	$col[9],
                    'no_hp' =>	$col[10],
                    'koordinat' =>	$col[11],
                ];
                // if($data['kecamatan'] != 0) {
                    KwsKmhKrw2::create($data);
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