<?php

namespace App\Http\Controllers\admin;

use App\Models\card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CardController extends Controller
{
    public function index(){
        $show=card::all();
        return view('admin.card.index',compact("show"));
    }
    public function create(){
        return view('admin.card.create');
  }


  public function store(Request $request){
    $request->validate([
        "title"=>'required|string',
        "paragraph"=>'required|string'
    ]);
    card::create([
        'title'=>$request->title,
        'paragraph'=>$request->paragraph
      ]);
     return redirect(route('card.index'));
  }
  public function edit(card $card){
    return view('admin.card.edit',compact('card'));

  }
  public function update(Request $request,$id){
  $request->validate([
    "title"=>'required|string',
    "paragraph"=>'required|string'
  ]);
  $card= card::findorfail($id);
  $card->update([
    'title'=>$request->title,
    'paragraph'=>$request->paragraph

  ]);
  return redirect( route('card.index'));
}

public function delete(card $card){
    $card->delete();
    return redirect()->back();

}
 }



