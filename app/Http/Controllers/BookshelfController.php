<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function index(){
        $data['bookshelves'] = Bookshelf::all();
        return view('bookshelves.index')->with($data);
    }

    public function create(){
        return view('bookshelves.create');
    }

    public function store(Request $request){
       Bookshelf::create([
        'name' => $request->name,
        'code' => $request->code
       ]);
       $notification = [
        'message' => 'Data bookshelf berhasil ditambahkan',
        'alert-type' => 'success'
        ];
       return redirect()->route('bookshelf.index')->with($notification);
    }
}
