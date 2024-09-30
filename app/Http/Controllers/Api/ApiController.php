<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\WriterRepository;
use App\Models\Book;
use App\Http\Resources\Api\WriterResource;

class ApiController extends Controller
{
    protected WriterRepository $WriterRepository;
    
    public function __construct(WriterRepository $WriterRepository) {
        $this->WriterRepository = $WriterRepository;
    }

    public function filterBooks(Request $request){
        try {
            if(intval($request->writer)){
                $books = WriterResource::collection($this->WriterRepository->filterByWriter(intval($request->writer))->get());
            } else{
                $books = WriterResource::collection(Book::all());
            }
        } catch (Exeption $e) { 
            ApiResponseClass::throw($e, $e->getMessage());
        }
        return $books;
    }
}
