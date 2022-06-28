<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($pid)
    {
        $post= Post::find($pid);
        $images=DB::table('images')->where('service_id',$pid)->get();
        return view('admin.image.index',[
            'post'=>$post,
            'images'=>$images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,$pid)
    {
        //dd($request);
        $data=new Image();
        $data->service_id=$pid;
        $data->title=$request->title;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index',['pid'=>$pid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id,$pid)
    {
        $data= Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index',['pid'=>$pid]);
    }
}
