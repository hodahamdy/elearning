<?php

namespace App\Http\Controllers\admin;

use App\Models\EntrySection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntrySectionController extends Controller
{
    public function index() {
        $show=EntrySection::all();

        return view('admin.entrysection.index',compact('show'));

    }
    public function create(){
        return view('admin.entrysection.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'pragraph'=>'required|string',
            'img'=>'required|image|mimes:jpg,png,jpeg',
        ]);

          // get image details
          $img = $request->file('img');
          $extenstion = $img->getClientOriginalExtension();
          $ImageName = "Entrysection-". uniqid() . ".$extenstion" ;

          //Move Img to it is folder
          $img->move( public_path('Uploads/Entrysection') , $ImageName);

          EntrySection::create([
            'title'=>$request->title,
            'pragraph'=>$request->pragraph,
            'img'=>$ImageName,
          ]);
          return redirect(route('entrysection.index'));

    }
    public function edit(EntrySection $entrysection){
        return view('admin.entrysection.edit',compact('entrysection'));

    }
    public function update(Request $request,$id){

        $request ->validate([
            'title'=>'required|string',
            'pragraph'=>'required|string',
            'img'=>'nullable|image|mimes:jpg,png,jpeg',
        ]);
        $entrysection = EntrySection::findorfail($id);

        $ImageName = $entrysection->img ;

        if( $request->hasFile('img') )
        {
            if($ImageName !== null )
            {
                $file_delete=public_path('Uploads/Entrysection/') . $ImageName;
                if (file_exists($file_delete)) {unlink($file_delete);}
            }

            // get image details
            $img = $request->file('img');
            $extenstion = $img->getClientOriginalExtension();
            $ImageName = "Entrysection-". uniqid() . ".$extenstion" ;

            //Move Img to it is folder
            $img->move( public_path('Uploads/Entrysection') , $ImageName);


        }
        $entrysection->update([
            'title'=>$request->title,
            'pragraph'=>$request->pragraph,
            'img'=>$ImageName,
          ]);
          return redirect(route('entrysection.index'));


    }
    public function delete(EntrySection $entrysection){
        if( $entrysection->img !== null )
        {
            unlink( public_path('Uploads/Entrysection/') . $entrysection->img );
        }
        $entrysection->delete();
        return redirect(route('entrysection.index'));

    }
}
