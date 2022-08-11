<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::select('*')->with('user')->paginate(10);
        
        return view('admin.contact.list', ['contact_list' => $contact]);
    }
    public function delete(Contact $id)
    {
        if ($id->delete()) {
            return redirect()->back();
        }
    }
    public function create(ContactRequest $request) {
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->content = $request->content;
        $data->user_id = Auth::user()->id;
        $data->save();
        return redirect()->back()->with('messenger', 'Thêm mới sản phẩm thành công.');
    }
}
