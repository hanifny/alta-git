<?php

namespace App\Imports;

use App\Models\Location;
use App\Models\Summary;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use DateTime;

class LocationImport implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'name' =>	$col[0] ?? null,
                    'region' =>	$col[1] ?? null,
                    'gmaps' =>	$col[2] ?? null,
                    'address' =>	$col[3] ?? null,
                    'latitude' =>	$col[4] ?? null,
                    'longitude' =>	$col[5] ?? null,
                ];
                // dd($data);
                // if($data['provinsi'] != 0) {
                    Location::create($data);
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
