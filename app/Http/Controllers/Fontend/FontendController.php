<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Banner;

class FontendController extends Controller
{
    public function index()
    {
        $notice = Notice::all();
        $banner = Banner::all();
        return view('Fontend.home', compact('notice', 'banner'));
    }

    public function ga_unit()
    {
        //return view('Fontend.home');

    }
    public function kha_unit()
    {
        // return view('Fontend.home');

    }
    public function k_unit()
    {
        // return view('Fontend.home');

    }
    public function branch()
    {
        // return view('Fontend.home');

    }

    public function director_speech()
    {
        // return view('Fontend.home');

    }
    public function teachers_advice()
    {
        // return view('Fontend.home');

    }
    public function behind_success()
    {
        //return view('Fontend.home');

    }

    public function du_history()
    {
        //return view('Fontend.home');

    }

    public function guide()
    {
        $notice = Notice::all();
        return view('Fontend.guide', compact('notice'));
    }

    public function about()
    {
        $notice = Notice::all();
        return view('Fontend.about', compact('notice'));
    }

    public function contact()
    {
        return view('Fontend.contact');
    }

    public function bsc()
    {
        $notice = Notice::all();
        return view('Fontend.bscNursing', compact('notice'));
    }
    public function diploma()
    {
        $notice = Notice::all();
        return view('Fontend.diplomaNursing', compact('notice'));
    }

    public function diploma_mid()
    {
        $notice = Notice::all();
        return view('Fontend.diplomaMid', compact('notice'));
    }

    public function notice($id)
    {
        $noticDtls = Notice::find($id);
        $notice = Notice::all();
        return view('Fontend.noticeDetails', compact('noticDtls', 'notice'));
    }
}
