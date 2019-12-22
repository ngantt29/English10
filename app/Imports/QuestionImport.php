<?php

namespace App\Imports;

use App\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class QuestionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    public function collection(Collection $rows){
        foreach($rows as $row){
            echo $row;
        }
    }
    public function model(array $row)
    {
        return new Question([
            //
        ]);
    }
}
