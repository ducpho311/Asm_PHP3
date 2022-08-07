<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('admin.category.list', ['category_list' => $category]);
    }

    public function create()
    {
        $category = Category::select('id', 'name')->get();
        return view('admin.category.create', ['category_list' => $category]);
    }

    public function categoryCreate(CategoryRequest $request)
    {
        $data = new Category();
        $data->fill($request->all());
        $data->save();
        return  redirect()->route('admin.category.list');
    }

    public function update(Request $request)
    {
        
        return view('admin.category.update', [
            // 'category' => Category::paginate(3),
            'category' => Category::find($request->id),
        ]);
    }
    public function updateCategory(CategoryRequest $request,$id)
    {
        $category = Category::find($id);
        $category->update([
            'id'=>$request->id,
            'name'=> $request->name,
        ]);
        return redirect()->route('admin.category.list');
    }

}
