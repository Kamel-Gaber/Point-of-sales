<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        $categories =  categorie::all();

        return view('backend.categories.index' , compact('categories'));

    }
    public function create()
    {
        //
    }



    public function store(Request $request)
    {
//
//        $validated = $request->validate([
//            'name' => 'required|unique:categories',
//            'notes' => 'required',
//        ]);


      categorie::create([
          'name' => ['ar'=>$request->name_ar , 'en' =>$request->name_en],
          'notes' => $request->notes ,
      ]);
      return redirect('categories');
    }

    public function show(categorie $categorie)
    {
        //
    }


    public function edit(categorie $categorie)
    {
        //
    }


    public function update(Request $request)
    {
        $categorie  = categorie::find($request->id);

            $categorie->update([
                'name' => ['ar'=>$request->name_ar , 'en'=> $request->name_en] ,
                'notes' => $request->notes,
            ]);
         return redirect('categories');

    }


    public function destroy(categorie $categorie , Request $request)
    {
        categorie::find($request->id)->delete();
        return redirect('categories');
    }

}
