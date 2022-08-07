<?php

namespace App\Http\Controllers;

use App\Http\Requests\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $size = Size::all();
        return view('admin.size.list', ['size_list' => $size]);
    }
    public function create()
    {
        $size = Size::select('id', 'name')->get();
        return view('admin.size.create', ['size_list' => $size]);
    }

    public function sizeCreate(SizeRequest $request)
    {
        $data = new Size();
        $data->fill($request->all());
        $data->save();
        return  redirect()->route('admin.size.list');
    }
        public function update(Request $request)
    {
        
        return view('admin.size.update', [
            'size' => Size::find($request->id),
        ]);
    }
    public function updateSize(SizeRequest $request,$id)
    {
        $category = Size::find($id);
        $category->update([
            'id'=>$request->id,
            'name'=> $request->name,
        ]);
        return redirect()->route('admin.size.list');
    }
}
