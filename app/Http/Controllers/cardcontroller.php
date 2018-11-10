<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class cardcontroller extends Controller
{
  public function home()
    {
       return view('/home'); 
    }



    public function index()
    {
       return view('card.card_new_add'); 
    }

     
    public function view(){
        $contact = DB::table('cards')->get();

        return view('home')->with('ppp',$contact);
    }
 

    public function store(Request $request){  
       $data = array();
        $data ['title']=$request->title;
        $data ['image']=$request->image;
         $data ['description']=$request->description;
         $data ['date']=$request->date;

         $ins = DB::table('cards')->insert($data);

       return redirect()->route('card_new_add');
     }


    public function delete_card($id)
    {

       $delete= DB::table('cards')->where('id',$id)->delete();

      return redirect()->back();   
    }
 
public function edit_card($id)
    {

       $edit= DB::table('cards')->where('id',$id)->first();

      return view('card.edit_card', compact('edit'));
    }

    public function update_add (Request $request, $id)
    {
       $data = array();
        $data ['title']=$request->title;
        $data ['image']=$request->image;
         $data ['description']=$request->description;
         $data ['date']=$request->date;


        $dins = DB::table('cards')->where('id',$id)->update($data);

        return view('welcome');




    }
 


}

