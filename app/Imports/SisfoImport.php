<?php

namespace App\Imports;

use App\Models\Sisfo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;

class SisfoImport implements ToCollection, WithStartRow
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'item_data' => $col[1] ?? '',
                    'keterangan' => $col[2] ?? '',
                ];
                // if ($data['item_data'] != 0) {
                    Sisfo::create($data);
                // }
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
