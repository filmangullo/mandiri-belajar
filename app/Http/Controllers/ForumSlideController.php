<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\ForumSlide;

class ForumSlideController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('webs.pertemuan.slide',[
          'forum_id'  => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $path = Storage::putFile('public', $request->file('slide'));
        $query = new ForumSlide;
        $query->forum_id  = $id;
        $query->name      = $request->file('slide')->getClientOriginalName();
        $query->slide      = $path;

        if($query->save()) {
          return redirect()->route('index.pertemuan', $id);
        }
    }

    /**
     * Download the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
          $query = ForumSlide::findOrFail($id);

          return response()->download(storage_path('app/' . $query->slide));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = ForumSlide::findOrFail($id);
        $forum_id = $slide->forum_id;

        if(Storage::exists($slide->slide)){
            Storage::delete($slide->slide);
        }

        $slide->delete();

        return redirect()->route('index.pertemuan', $forum_id);
    }
}
