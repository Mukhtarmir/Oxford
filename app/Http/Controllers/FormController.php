<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
  public function create() {
      return view('inc.create');
  }
  public function store(Request $request){
      
      $this->validate($request, [
    'filename' => 'required',
    'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);
 if($request->hasfile('file_name'))
         {
              
              foreach($request->file('file_name') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         $form= new Form();
         $form->filename=json_encode($data);
         $form->save();
         
         }     
        
        echo 'hi';

        return back()->with('success', 'Your images has been successfully uploaded');
  } 
  
  
  // crousel display
  
  public function crousel() {
        $titleName = "crousel";
        $images = \File::allFiles(public_path('images'));

        return view('inc.crousel', compact('titleName'))->with('images', $images);
  }  
  

public function delete(){
    
    
    
    
}  
}
