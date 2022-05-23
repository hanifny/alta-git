<?php

namespace App\Imports;

use App\Models\Membership;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;

class MembershipImport implements ToCollection, WithStartRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // $hehe = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11])->format('Y-m-d H:i:s');
            // dd($hehe);
            // dd(DateTime::createFromFormat('j M Y', $row[11])->format('Y-m-d'));
            try {
                $data = [
                    'kode_lokasi' => $row[1] ?? '',
                    'is_active' => $row[2] ?? '',
                    'kendaraan_ke' => $row[3] ?? '',
                    'kode_pass' => $row[4] ?? '',
                    'no_kendaraan' => $row[5] ?? '',
                    'nama_pemilik' => $row[6] ?? '',
                    'ket_pemilik' => $row[7] ?? '',
                    'nama_pelanggan' => $row[8] ?? '',
                    'waktu' => $row[9] ?? '',
                    'periode' => $row[10] ?? '',
                    'tanggal_berlaku' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11])->format('Y-m-d H:i:s') ?? '',
                    'tanggal_berakhir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12])->format('Y-m-d H:i:s') ?? '',
                    'no_kartu' => $row[13] ?? '',
                    'kode_produk' => $row[14] ?? '',
                    'status_kendaraan' => $row[15] ?? '',
                    'jenis_kendaraan' => $row[16] ?? '',
                    'biaya' => $row[17] ? (str_contains($row[17], ',')  ? str_replace(",", "", $row[17]) : str_replace(".", "", $row[17])) : 0,
                    'biaya_administrasi' => $row[18] == '' ? 0 : $row[18],
                    // 'created_at' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[19])->format('Y-m-d H:i:s') ?? '',
                    // 'updated_at' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[20])->format('Y-m-d H:i:s') ?? '',
                    'created_by' => $row[21] ?? '',
                    'updated_by' => $row[22] ?? '',
                    'is_refresh' => 0,
                    'is_write_local' => 1
                ];
                // 'tmt_golongan' => $row[29] ? DateTime::createFromFormat('j M Y', $row[29])->format('Y-m-d') : null,
                Membership::create($data);
            } catch (\Throwable $th) {
                //throw $th;
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
