<?php

namespace App\Imports;

use App\Models\OnHand;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DateTime;

class OnHandImport implements ToCollection, WithStartRow
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'tipe' => $col[1] ?? '',
                    'segmen' => $col[2] ?? '',
                    'deskripsi_singkat' => $col[3] ?? '',
                    'deskripsi_detail' => $col[4] ?? '',
                    'qty' => $col[5] ?? '',
                    'primary_unit_of_measure' => $col[6] ?? '',
                    'inventory_item_id' => $col[7] ?? '',
                ];
                // if ($data['item_data'] != 0) {
                    OnHand::create($data);
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
