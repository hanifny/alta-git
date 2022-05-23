<?php

namespace App\Imports;

use App\Models\KwsKmhKrw2;
use App\Models\Summary;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use DateTime;

class KwsKmhKrwImport2 implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'satuan_permukiman'	=> $col[0] ?? null,
                    'kelurahan' =>	$col[1] ?? null,
                    'nama_kawasan' =>	$col[2] ?? '',
                    'b19' =>	$col[3] ?? null,
                    'b20' =>	$col[4] ?? null,
                    'b21' =>	$col[5] ?? null,
                    'b22' =>	$col[6] ?? null,
                    'b23' =>	$col[7] ?? null,
                    'b24' =>	$col[8] ?? null,
                    'jk23' =>	$col[9] ?? null,
                    'jk24' =>	$col[10] ?? null,
                    'jk25' =>	$col[11] ?? null,
                    'jk26' =>	$col[12] ?? null,
                    'jk27' =>	$col[13] ?? null,
                    'jk28' =>	$col[14] ?? null,
                    'jk29' =>	$col[15] ?? null,
                    'jk30' =>	$col[16] ?? null,
                    'jk31' =>	$col[17] ?? null,
                    'jk32' =>	$col[18] ?? null,
                    'jk33' =>	$col[19] ?? null,
                    'jk34' =>	$col[20] ?? null,
                    'jk35' =>	$col[21] ?? null,
                    'jk36' =>	$col[22] ?? null,
                    'dk29' =>	$col[23] ?? null,
                    'dk30' =>	$col[24] ?? null,
                    'dk31' =>	$col[25] ?? null,
                    'dk32' =>	$col[26] ?? null,
                    'dk33' =>	$col[27] ?? null,
                    'dk34' =>	$col[28] ?? null,
                    'dk35' =>	$col[29] ?? null,
                    'dk36' =>	$col[30] ?? null,
                    'dk37' =>	$col[31] ?? null,
                    'dk38' =>	$col[32] ?? null,
                    'dk39' =>	$col[33] ?? null,
                    'dk40' =>	$col[34] ?? null,
                    'dk41' =>	$col[35] ?? null,
                    'dk42' =>	$col[36] ?? null,
                    'dk43' =>	$col[37] ?? null,
                    'dk44' =>	$col[38] ?? null,
                    'dk45' =>	$col[39] ?? null,
                    'dk46' =>	$col[40] ?? null,
                    'dk47' =>	$col[41] ?? null,
                    'dk48' =>	$col[42] ?? null,
                    'dk49' =>	$col[43] ?? null,
                    'dk50' =>	$col[44] ?? null,
                    'ak21' =>	$col[45] ?? null,
                    'ak22' =>	$col[46] ?? null,
                    'sk15' =>	$col[47] ?? null,
                    'sk16' =>	$col[48] ?? null,
                    'sk17' =>	$col[49] ?? null,
                    'sk18' =>	$col[50] ?? null,
                    'sk19' =>	$col[51] ?? null,
                    'fk11' =>	$col[52] ?? null,
                    'fk12' =>	$col[53] ?? null,
                    'fk13' =>	$col[54] ?? null,
                    'fk14' =>	$col[55] ?? null,
                    'fk15' =>	$col[56] ?? null,
                    'fk16' =>	$col[57] ?? null,
                    'fk17' =>	$col[58] ?? null,
                    'fk18' =>	$col[59] ?? null,
                    'fk19' =>	$col[60] ?? null,
                    'fk20' =>	$col[61] ?? null,
                    'fk21' =>	$col[62] ?? null,
                    'fk22' =>	$col[63] ?? null,
                    'fk23' =>	$col[64] ?? null,
                    'fk24' =>	$col[65] ?? null,
                    'fk25' =>	$col[66] ?? null,
                    'fk26' =>	$col[67] ?? null,
                    'kk12' =>	$col[68] ?? null,
                    'kk13' =>	$col[69] ?? null,
                    'kk14' =>	$col[70] ?? null,
                    'kk15' =>	$col[71] ?? null,
                    'kk16' =>	$col[72] ?? null,
                    'kk17' =>	$col[73] ?? null,
                    'kk18' =>	$col[74] ?? null,
                    'kk19' =>	$col[75] ?? null,
                    'kk20' =>	$col[76] ?? null,
                    'kk21' =>	$col[77] ?? null,
                    'kk22' =>	$col[78] ?? null,
                    'kk23' =>	$col[79] ?? null,
                    'pk30' =>	$col[80] ?? null,
                    'pk31' =>	$col[81] ?? null,
                    'pk32' =>	$col[82] ?? null,
                    'pk33' =>	$col[83 ] ?? null,
                ];
                // dd($data);
                // if($data['satuan_permukiman'] != 0) {
                    KwsKmhKrw2::create($data);
                // }
            } catch (\Throwable $th) {
                dd($th);
                continue;
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
