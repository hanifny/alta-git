<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToCollection, WithStartRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                $data = [
                    'name' => $row[1],
                    'email' => $row[2],
                    'password' => bcrypt($row[3]),
                    'roles_id' => $row[4],
                ];
                // if ($data['name'] != 0) {
                    User::create($data);
                // }
            } catch (\Throwable $th) {
                //throw $th;
                continue;
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
