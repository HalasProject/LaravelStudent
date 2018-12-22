<?php

namespace App\Http\Controllers;

use App\Policies\NotePolicy;
use Illuminate\http\Uploadedfile;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;
use App\Note;
use Auth;

class NoteController extends Controller
{

  public function show($id)
  {

   $show = Note::find($id);
  
   if(Auth::check()){
    $user_connected = Auth::user()->id;
    if(Auth::user()->admin == 1)
      $admin = 1;
    else
      $admin =0;  } 
   else{
    $user_connected = 0;
    $admin = 0; }
  
  
    return view('fiche.show', [
    'shows' => $show, 
    'connection'=> $user_connected,
    'droit'=>$admin]);
}


public function index(){
  $listfiche = Note::orderby('id','desc')->paginate(5);
  $counter   = Note::all()->count();
  /***********************************************************/
  if(Auth::check())
  {
    $user_connected = Auth::user()->id;
    if(Auth::user()->admin == 1)
      $admin = 1;
    else
      $admin =0;  
  } 
  else
  {
    $user_connected = 0;
    $admin =0;
  }
  /***********************************************************/
  return view('fiche.index', ['fiches' => $listfiche,
   'count' => $counter ,
   'connection' => $user_connected,

   'droit' => $admin,
 ]);
}

public function create(){
  return view('fiche.create');
}

public function store(NoteRequest $request){
  $note=new Note();

  $note->year = $request->input('annes');
  $note->section = $request->input('section');
  $note->groupe = $request->input('groupe');
  $note->module = $request->input('module_name');
  $note->type = $request->input('Type_note');
  $note->creator = $request->input('creator_name');
  if($request->hasfile('photo')){
   $note->note_lien = $request->photo->store('image');
  }

 $note->remarque = $request->input('remarque');
 $note->user_id = Auth::user()->id;



 $note->save();

 session()->flash('succes','Votre Affichage a bien etait posté');

 return redirect('fiche');    
}

public function edit($id){
  $listfiche = Note::find($id);

  $this->authorize('update',$listfiche);
  return view('fiche.edit', ['bdinfo' => $listfiche]);
}

public function update(NoteRequest $request, $id){
 $upd = Note::find($id);

 $upd->year = $request->input('annes');
 $upd->year = $request->input('annes');
 $upd->section = $request->input('section');
 $upd->groupe = $request->input('groupe');
 $upd->module = $request->input('module_name');
 $upd->type = $request->input('Type_note');
 $upd->creator = $request->input('creator_name');
 if($request->hasfile('photo')){
   $upd->note_lien = $request->photo->store('image');
 }

 $upd->remarque = $request->input('remarque');

 dd($upd);
 $upd->save();

 session()->flash('success_edit','Votre Affichage a bien etait modifier !!');

 return redirect('fiche');
}

public function delete($id){

  $rmv = Note::find($id);

  $this::authorize('delete', $rmv);
  $rmv->delete();

  return redirect('fiche');
}

public function search(Request $request){

  if(Auth::check())
    { $connection = Auth::id(); }
  else
    { $connection = 0; }

  $a = $request->input('year');
  $b = $request->input('section');
  $c = $request->input('groupe');

  $searching = Note::where(['year' => $a,'section' => $b,'groupe' => $c])->orderby('id','DESC')->get();

  return view('fiche.search',['find' => $searching, 'connection' => $connection]);

}

}