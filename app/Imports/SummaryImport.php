<?php

namespace App\Imports;

use App\Models\Summary;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use DateTime;

class SummaryImport implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                // $lokasi = DB::table('lokasi_parkir')->where('nama_lokasi', $col[2])->where('kode_lokasi', $col[3])->first();
                $data = [
                    'wilayah_parkir_id' => $col[1],
                    'lokasi_parkir_id' => $col[2],
                    'tanggal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($col[4])->format('Y-m-d H:i:s'),
                    'shift' => $col[5],
                    "income_casual" => $col[6],
                    "income_member" => $col[7],
                    "qty_member" => $col[8],
                    "qty_mobil" => $col[9],
                    "qty_motor" => $col[10],
                    "qty_truk" => $col[11],
                    "pendapatan_mobil_kasual" => $col[12],
                    "pendapatan_motor_kasual" => $col[13],
                    "pendapatan_truk_kasual" => $col[14],
                    "qty_mobil_member" => $col[15],
                    "qty_motor_member" => $col[16],
                    "qty_truk_member" => $col[17],
                    "pendapatan_mobil_member" => $col[18],
                    "pendapatan_motor_member" => $col[19],
                    "pendapatan_truk_member" => $col[20],
                    "total_transaksi" => $col[21],
                    "total_pendapatan" => $col[22],
                ];
                // dd($data);
                if($data['wilayah_parkir_id'] != 0) {
                    Summary::create($data);
                }
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
