<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
use DB;

class BannerController extends Controller
{
    public function viewBanner()
    {

        $banner = Banner::all();
        return view('Backend.banner', compact('banner'));
    }



    public function addbanner(Request $request)
    {
        $request->validate([
            'title' => 'required|max:500',
        ]);

        $notice = new Banner();
        $notice->title = $request->title;
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/banner/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $notice['image'] = $image_url;
        }
        $notice->save();




        // return redirect()->back()->with(['message' => 'Message sent successfully']);
        return redirect()->back();
    }


    public function delet($id)
    {

        $delete = DB::table('banners')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('banners')
            ->where('id', $id)
            ->delete();

        if ($dltuser) {
            $notification = array(
                'messege' => 'Successfully Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('viewBanner')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back();
        }
    }
}
