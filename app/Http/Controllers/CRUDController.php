<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDController extends Controller
{

//index method
    public function index(){
      // $users = DB::table('contacts')->select('id','name','email')->get();
      $contacts = contact::all();
      // dd($contacts);
      // return view('pages.index')->with('contacts', $contacts);
      return view('pages.index',['contacts' => $contacts]);
    }

//create method
        public function create(){
          return view('pages.addUser');
        }

        public function insert(Request $request){
            $save = new contact;
            $save->name = $request->input('name');
            $save->email = $request->input('email');
            $save->mobile = $request->input('mobile');
            $save->city= $request->input('city');

            $save->save();
            //  return view('pages.index',['contacts' => $contacts]);
            return redirect('/');
        }

        public function delete($id) 
       {
          // contact::find($id)->delete();
          // DB::delete('DELETE FROM contacts WHERE id ='[$id]);
          contact::find($id)->delete();
          return redirect('/');
       }
}
