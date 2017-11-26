<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\menu;
use Modules\Core\Entities\language;
use Modules\Core\Entities\about;
use Modules\Core\Entities\skill;
use Modules\Core\Entities\education;
use App\Mail\ContactMe;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        if(!session()->has('langsession'))
        {
            session(['langsession' => 'en']);
        }
        $Setting= session('langsession');
        $menu= menu::leftjoin('language','menu.vLanguage','=','language.vID')
            ->where('language.vLink',$Setting)
            ->get();
        $language= language::all();
        $about = about::leftjoin('language','about.vLanguage','=','language.vID')
            ->where('language.vLink',$Setting)
            ->first();
        $skill= skill::all();
        $education = education::leftjoin('language','education.vLanguage','=','language.vID')
            ->where('language.vLink',$Setting)
            ->get();
        return view('core::index',compact('menu','language','Setting','about','skill','education'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function setlanguage(Request $request)
    {
        if($request->has('language'))
        {
            $Setting=$request->input('language');
            session(['langsession' => $Setting]);
            return response()->json([
                'Message' => 'Setting language to '.$Setting,
                'Status' => '200'
            ]);
        }
    }

    public function SendContact(Request $request)
    {
        $Name=$request->input('name');
        $Email=$request->input('email');
        $Subject=$request->input('subject');
        $Message=$request->input('message');

        Mail::to('sonminh18@gmail.com')->send();
    }
    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('core::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('core::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
