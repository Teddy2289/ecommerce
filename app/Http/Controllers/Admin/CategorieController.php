<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Faker\Core\File;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categorie = Categorie::all();
        return view('admin.categorie.index',compact('categorie'));
    }
    public function addCategorie()
    {
        return view('admin.categorie.ajout');
    }

    public function insert(Request $request)
    {

        $category = new Categorie;

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')== TRUE ? '1':'0';
        $category->popular = $request->input('popular')== TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_descri = $request->input('meta_descri');
        $category->meta_keyword = $request->input('meta_keyword');
            if ($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename= time().'.'.$ext;
                $file->move('uploads',$filename);
                $category->image= $filename;
            }
        $category->save();
        return redirect('/categorie')->with('success','Creation a été bien effectuer');
    }


    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('admin.categorie.edit',compact('categorie'));
    }
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        if ($request->hasFile('image'))
        {
            $path = '/uploads'.$categorie->image;
            if (\Illuminate\Support\Facades\File::exists($path))
            {
                \Illuminate\Support\Facades\File::delete();
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('uploads',$filename);
            $categorie->image= $filename;
        }
        $categorie->name = $request->input('name');
        $categorie->slug = $request->input('slug');
        $categorie->description = $request->input('description');
        $categorie->status = $request->input('status')== TRUE ? '1':'0';
        $categorie->popular = $request->input('popular')== TRUE ? '1':'0';
        $categorie->meta_title = $request->input('meta_title');
        $categorie->meta_descri = $request->input('meta_descri');
        $categorie->meta_keyword = $request->input('meta_keyword');
        $categorie->update();
        return redirect('/categorie')->with('status','Creation a été bien effectuer');
    }

    public function delete($id)
    {
        $categorie = Categorie::find($id);
        if ($categorie->image){
            $path = 'uploads'.$categorie->image;
            if (\Illuminate\Support\Facades\File::exists($path))
            {
                \Illuminate\Support\Facades\File::delete($path);
            }
        }
        $categorie->delete();
        return redirect('/categorie')->with('delete','Le categorie  a été bien supprimer');
    }
}
