<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Exports\PostExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BlogTable extends Component
{  
   
    
    // Hello

    public function printExcel()
    {
       
      
    //   dd($excelPrint);
       return Excel::download(new PostExport, 'blog.xlsx');
    }
    
    public function render()
    {    
        
        return view('livewire.blog-table',[
            'posts' => Post::all()
        ]);
    }
}
