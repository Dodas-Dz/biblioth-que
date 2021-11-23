<?php

namespace App\Imports;

use App\Models\Livre;
use Maatwebsite\Excel\Concerns\ToModel;

class LivreImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Livre([
            'isbn' => $row[4],
            'titre' => $row[0],
            'resumer' => $row[8],
            'image' => $row[2],
            'nbr' => $row[5],
            'langue' => $row[6],
            'anneé' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[7]),
            'auteur' => $row[1],
            'category_id' => $row[3]
        ]);
    }
    
   
}
