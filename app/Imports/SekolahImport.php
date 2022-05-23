<?php

namespace App\Imports;

use App\Models\School;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class SekolahImport implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'npsn' => $col[1],
                    'school_name' => $col[2],
                    'province' => $col[3],
                    'city' => $col[4],
                    'regencies' => $col[5],
                    'grade_acredittation' => $col[6],
                ];
                if($data['npsn'] != 0) {
                    School::create($data);
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
