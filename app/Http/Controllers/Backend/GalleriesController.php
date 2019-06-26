<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Requests; 
use App\Model\Fotos;

class GalleriesController extends BackendController
{
   public function upfiles(Request $request)
   {
   
    
    
    $png_url = $request->action.'_'.md5(time()).".jpg";
    $path = public_path() . "/storage/files/" . $png_url;
    $img = $request->data; 

    $img = substr($img, strpos($img, ",")+1);
    $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
    $success = file_put_contents($path, $data);
    $request->merge(array(
      'file' =>  $png_url,
      ));

   $fotos = Fotos::create($request->all());


   
   }
}
