<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $appends=[
        'getParentsTree'
    ];
    public static function getParentsTree($category, $title){
        if($category->parent_id == 0){
            return $title;
        }
        $parent=Category::find($category->parent_id);
        $title=$parent->title.' > '.$title;
        return CategoryController::getParentsTree($parent,$title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data= Category::all();
        return view('admin.category.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data= Category::all();
        return view('admin.category.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //dd($request);
        $data=new Category();
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keyword=$request->keyword;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/category/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $data= Category::find($id);
        return view('admin.category.show',[
            'data'=>$data
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
        $data= Category::find($id);
        $datalist= Category::all();
        return view('admin.category.edit',[
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
        $data=Category::find($id);
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keyword=$request->keyword;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/category/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Category::find($id);
        $data->delete();
        return redirect('admin/category/');
    }
}