<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Place;


class PlaceController extends Controller
{
    private $columns = ['title', 'price','content','image'];
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
         return view('place');
    }
    public function blog()
    {
         return view('blog');
    }
     public function blog1()
    {
         return view('blog1');
    }
         public function data()
    {
         return view('dataentry');
    }
       
     public function place()
    {
        $place = place::get();
        return view('placelist', compact('place'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $place = new Place;
        $place->title = $request->title;
        $place->price = $request->price;
        $place->content= $request->content;
        $place->image= $request->image;
        $place->save();
        return 'data Added Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $place = Place::findOrFail();
        return view('blog',compact('places'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 
      public function destroy(string $id):RedirectResponse
    {
     place::where('id', $id)->delete();
     return redirect('trashed');

    }
        public function forcedeleted(string $id):RedirectResponse
    {
    $place::where('id', $id)->forceDelete(); // to permanent delete
     return redirect('placelist');

    }
    public function trashed()
{
$place = place::onlyTrashed()->get();
return view('trashed'
, compact('place'));
}
public function restore(string $id):RedirectResponse
{
place::where('id', $id)->restore();
return redirect('placelist');
}

}

