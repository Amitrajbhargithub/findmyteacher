<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
        $data = new Upload();
        $file = $request->file('file');       
        $extension = time().'.'.$file->getClientOriginalName();
        $request->file->move('assets',$extension);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->file = $extension;
        $res = $data->save();
        if($res)
        {
            return redirect()->back()->with('success','uploaded successfully');
        }
        else
        {
            return redirect()->back()->with('fail','file uploaded not successfully');
        }
    }
    public function show()
    {
        $data = Upload::all();
        return view('showproduct',compact('data'));

    }
    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }
    public function view(Request $request,$id)
    {
        $data = Upload::find($id);
        return view('viewproduct',compact('data'));
    }
}
