<?php

namespace App\Imports;

use App\Models\RoleDirory;
use App\Traits\UsesUuid;
use App\Models\UserDirory;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UserDiroryImport implements ToCollection, WithStartRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                $data = [
                    'full_name' => $row[1] ?? '',
                    'email' => $row[2] ?? '',
                    'password' => $row[3] ?? '',
                    'job' => '-',
                    'email_verified_at' => date("Y-m-d H:i:s")
                ];
                $user = UserDirory::create($data);

                RoleDirory::create([
                    'role_id' => '96f13130-9820-4578-930f-b11d16ec4e86',
                    'model_type' => 'App\Models\User',
                    'model_id' => $user->id
                ]);

                // if ($data['full_name'] != 0) {
                // }
            } catch (\Throwable $th) {
                //throw $th;
                // dd($th);
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
