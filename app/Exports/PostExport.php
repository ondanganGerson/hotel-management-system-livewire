<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PostExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'Id',
            'Title',
            'Description',            
            'Created_at',
            'Updated_at' 
        ];
    } 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Post::all();
    }
}
