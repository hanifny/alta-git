<?php

namespace App\Imports;

use App\Models\Hunian;
use Error;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
// use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use DateTime;

class HunianImport implements ToCollection, WithStartRow
// , WithCalculatedFormulas
{
    // public $error = [];
    public function collection(Collection $cols)
    {
        foreach ($cols as $col) {
            try {
                $data = [
                    'nama_kepala_rumah_tangga' =>	$col[0] ?? '', 
                    'nik' =>	$col[1] ?? '', 
                    'kecamatan' =>	$col[2] ?? '', 
                    'kelurahan' =>	$col[3] ?? '', 
                    'rt' =>	$col[4] ?? '', 
                    'rw' =>	$col[5] ?? '', 
                    'nama_kawasan' =>	$col[6] ?? '',  
                    'tanggal_pendataan' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($col[7])->format('Y-m-d') ?? '', 
                    'h9' =>	$col[8] ?? null, 
                    'h10' =>	$col[9] ?? null, 
                    'h11' =>	$col[10] ?? null,
                    'h12' =>	$col[11] ?? null,
                    'h13' =>	$col[12] ?? null,
                    'h14' =>	$col[13] ?? null,
                    'h15' =>	$col[14] ?? null,
                    'h16' =>	$col[15] ?? null,
                    'h17' =>	$col[16] ?? null,
                    'h18' =>	$col[17] ?? null,
                    'h19' =>	$col[18] ?? null,
                    'h20' =>	$col[19] ?? null,
                    'h21' =>	$col[20] ?? null,
                    'h22' =>	$col[21] ?? null,
                    'h23' =>	$col[22] ?? null,
                    'h24' =>	$col[23] ?? null,
                    'h25' =>	$col[24] ?? null,
                    'h26' =>	$col[25] ?? null,
                    'h27' =>	$col[26] ?? null,
                    'h28' =>	$col[27] ?? null,
                    'h29' =>	$col[28] ?? null,
                    'h30' =>	$col[29] ?? null,
                    'h31' =>	$col[30] ?? null,
                    'h32' =>	$col[31] ?? null,
                    'h33' =>	$col[32] ?? null,
                    'h34' =>	$col[33] ?? null,
                    'h35' =>	$col[34] ?? null,
                    'h36' =>	$col[35] ?? null,
                    'h37' =>	$col[36] ?? null,
                    'h38' =>	$col[37] ?? null,
                    'h39' =>	$col[38] ?? null,
                    'h40' =>	$col[39] ?? null,
                    'h41' =>	$col[40] ?? null,
                    'h42' =>	$col[41] ?? null,
                    'h43' =>	$col[42] ?? null,
                    'h44' =>	$col[43] ?? null,
                    'h45' =>	$col[44] ?? null,
                    'h46' =>	$col[45] ?? null,
                    'h47' =>	$col[46] ?? null,
                    'h48' =>	$col[47] ?? null,
                    'h49' =>	$col[48] ?? null,
                    'h50' =>	$col[49] ?? null,
                    'h51' =>	$col[50] ?? null,
                    'h52' =>	$col[51] ?? null,
                    'h53' =>	$col[52] ?? null,
                    'h54' =>	$col[53] ?? null,
                    'h55' =>	$col[54] ?? null,
                    'h56' =>	$col[55] ?? null,
                    'h57' =>	$col[56] ?? null,
                    'h58' =>	$col[57] ?? null,
                    'h59' =>	$col[58] ?? null,
                    'h60' =>	$col[59] ?? null,
                    'h61' =>	$col[60] ?? null,
                    'h62' =>	$col[61] ?? null,
                    'h63' =>	$col[62] ?? null,
                    'h64' =>	$col[63] ?? null,
                    'h65' =>	$col[64] ?? null,
                    'h66' =>	$col[65] ?? null,
                    'h67' =>	$col[66] ?? null,
                    'h68' =>	$col[67] ?? null,
                    'h69' =>	$col[68] ?? null,
                    'h70' =>	$col[69] ?? null,
                    'h71' =>	$col[70] ?? null,
                    'h72' =>	$col[71] ?? null,
                    'h73' =>	$col[72] ?? null,
                    'h74' =>	$col[73] ?? null,
                    'h75' =>	$col[74] ?? null,
                    'h76' =>	$col[75] ?? null,
                    'h77' =>	$col[76] ?? null,
                    'h78' =>	$col[77] ?? null,
                    'h79' =>	$col[78] ?? null,
                    'h80' =>	$col[79] ?? null,
                    'h81' =>	$col[80] ?? null,
                    'h82' =>	$col[81] ?? null,
                    'h83' =>	$col[82] ?? null,
                    'h84' =>	$col[83] ?? null,
                    'h85' =>	$col[84] ?? null,
                    'h86' =>	$col[85] ?? null,
                    'h87' =>	$col[86] ?? null,
                    'h88' =>	$col[87] ?? null,
                    'h89' =>	$col[88] ?? null,
                    'h90' =>	$col[89] ?? null,
                    'h91' =>	$col[90] ?? null,
                    'h92' =>	$col[91] ?? null,
                    'h93' =>	$col[92] ?? null,
                    'h94' =>	$col[93] ?? null,
                    'h95' =>	$col[94] ?? null,
                    'h96' =>	$col[95] ?? null,
                    'h97' =>	$col[96] ?? null,
                    'h98' =>	$col[97] ?? null,
                    'h99' =>	$col[98] ?? null,
                    'h100' =>	$col[99] ?? null,
                    'h101' =>	$col[100] ?? null,
                    'h102' =>	$col[101] ?? null,
                    'h103' =>	$col[102] ?? null,
                    'h104' =>	$col[103] ?? null,
                    'h105' =>	$col[104] ?? null,
                    'h106' =>	$col[105] ?? null,
                    'h107' =>	$col[106] ?? null,
                    'h108' =>	$col[107] ?? null,
                    'h109' =>	$col[108] ?? null,
                    'h110' =>	$col[109] ?? null,
                    'h111' =>	$col[110] ?? null,
                    'h112' =>	$col[111] ?? null,
                    'h113' =>	$col[112] ?? null,
                    'h114' =>	$col[113] ?? null,
                    'h115' =>	$col[114] ?? null,
                    'h116' =>	$col[115] ?? null,
                    'h117' =>	$col[116] ?? null,
                    'h118' =>	$col[117] ?? null,
                    'h119' =>	$col[118] ?? null,
                    'h120' =>	$col[119] ?? null,
                    'h121' =>	$col[120] ?? null,
                    'h122' =>	$col[121] ?? null,
                ];
                // if($data['nama_kepala_rumah_tangga'] != 0) {
                    //     dd($data);
                    Hunian::create($data);
                // }
            } catch (\Throwable $th) {
                // dd($data);
                // array_push($this->error, $data);
                dd($th);
                continue;
            }
        }
        // dd($this->error);
    }

    public function startRow(): int
    {
        return 2;
    }
}
