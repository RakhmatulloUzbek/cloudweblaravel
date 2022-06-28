<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Post::all();
        return view('admin.post.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.post.create', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Post();
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keyword = $request->keyword;
        $data->description = $request->description;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->detail = $request->detail;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::find($id);
        return view('admin.post.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Post::find($id);
        $datalist= Category::all();
        return view('admin.post.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
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
        $data=Post::find($id);
        $data->category_id=$request->category_id;
        $data->title=$request->title;
        $data->keyword=$request->keyword;
        $data->description=$request->description;
        $data->detail=$request->detail;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/post/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::find($id);
        if ($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/post');
    }
}
