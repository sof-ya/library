<?php 

namespace App\Views\Composers; 

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\WriterRepository;
use App\Repositories\BookRepository;
use App\Models\Book;
use App\Models\Writer;

class MainPageCoreComposer {
    private Request $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $data=Book::all();
        $writers=Writer::all();

        foreach($data as $index => $item) {
            $item["writers_string"]=$item->writers()->pluck("name")->implode(', ');
        }
        $view->with('data', $data)->with('writers', $writers);
    }
}