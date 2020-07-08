<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;

class ImageUploadController extends Controller
{
    //upload products images
    public function uploadImageProducts(Request $request){
        $this->validate($request,[
            'file' => 'required|mimes:jpeg,bmp,jpg,png|between:1,6000'
        ]);
        $image_name = $request->file('file')->getRealPath();
        // dd($request->file('file'));
        Cloudder::upload($image_name,'products/'.uniqid(),[
            'resource_type' => 'image',
            // 'folder'    => 'products',
            'transformation'     => [
                'width' => 640,
                'height'=> 470,
                'crop' => 'pad'
            ],            
        ]);
        return response()->json([
            'message'   => 'Imagen subida correctamente',
            'body'      => Cloudder::getResult()
        ]);
    }

    public function deleteImage(Request $request)
    {
        # datos del request
        // dd($request->get('body'));
        $data = $request->get('body');
        $di   = Cloudder::destroyImage($data['public_id']);
        $d    = Cloudder::delete($data['public_id']);
        // dd($di,$d);
        return response()->json([
            'message'   => 'La imagen elimino correctamente',
            'body'      => $di
        ]);
    }
}
