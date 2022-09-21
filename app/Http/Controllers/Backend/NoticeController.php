<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Str;
use DB;

class NoticeController extends Controller
{

    public function notice()
    {
        $notice = Notice::all();
        return view('Backend.notice', compact('notice'));
    }



    public function addnotice(Request $request)
    {
        $request->validate([
            'title' => 'required|max:500',
        ]);

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->descrition = $request->descrition;
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/notice/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $notice['image'] = $image_url;
        }
        $notice->save();

        // return redirect()->back()->with(['message' => 'Message sent successfully']);
        return redirect()->back();
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('Backend.editNotice', compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->descrition = $request->descrition;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/notice/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $notice['image'] = $image_url;
        }

        $notice->save();
        return redirect('viewNotice')->with(['message' => 'Update successfully']);
    }


    public function delet($id)
    {

        $delete = DB::table('notices')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('notices')
            ->where('id', $id)
            ->delete();

        if ($dltuser) {
            $notification = array(
                'messege' => 'Successfully Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('viewNotice')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back();
        }
    }
}
