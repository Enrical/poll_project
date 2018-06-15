<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Poll;

class PollController extends Controller
{
    //
    public function index()
    {
        $polls = DB::table('polls')->get();
        $view = view('polls.index');
        $view->polls = $polls;
        return $view;
    }


//- create - returns view to create new Category
    public function create()
    {
        //$categories = \App\Category::all();
        
        $view = view('polls.create');
        //$view->categories  = $categories;
        return $view;
        
    }
    //- store  - creates new category and redirects to edit
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        
        $poll = new Poll();
        $poll->fill([
            'code' => uniqid(),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'nr_of_options' => $request->input('nr_of_options')
        ]);

        $poll->save();
        //$poll->categories()->sync($request->categories);

   return redirect()->action('PollOptionController@index', ['id' => $poll->id]);
        
    }
    //- edit   - returns edit view for category with given id
    public function edit($id = null)
    {
            $poll = Poll::findOrFail($id);
     
            $view = view('polls.edit');
            $view->poll = $poll;
            
            return $view;
        
    }
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required|string'

        ]);

        $poll = Poll::findOrFail($id);

        $poll->fill([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'nr_of_options' => $request->input('nr_of_options')
        ]);

        $poll->save();
        //return redirect()->action('BookController@edit', ['id' => $book->id]);
    }

    // public function show($id = null)
    // {
    //   $view= view('show');
    //   $poll = Poll::findOrFail($id);
    //   $view->poll = $poll;
    //   return $view  ;
    // }
}
