<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Post;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function recentpostslist(){
        return  Post::orderBy('id', 'desc')->limit(4)->get();
    }
    public static function getsettings(){
        return  Setting::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        //$recentPosts = Post::orderBy('id', 'desc')->limit(3)->get();
        //dd( Auth::check());
        if(Auth::check() && !Auth::user()->email_verified_at){
            return redirect()->route('logoutuser');
        }
        $setting = Setting::first();
        return view('home.index',[
            'setting'=>$setting
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        return view('home.aboutus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view('home.contactus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('home.faq');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.page_404');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('home.page_404');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function posts()
    {
        $title = 'Postlar';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('home.posts',['posts'=>$posts,'title'=>$title]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function data_detail($id)
    {
        $data = Post::find($id);
        $images=DB::table('images')->where('service_id',$id)->get();
        return view('home.data_detail',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function getservices(Request $request)
    {
        $data = Post::where('title',$request->input('search'))->first();
        if(!$data){
            $data = Service::where('title',$request->input('search'))->first();
        }
        if(!$data){
            return redirect()->route('data_detail',['id'=>0]);
        }
        return redirect()->route('data_detail',['id'=>$data->id]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('home.services');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function categoryservices($id)
    {
        //$title = DB::table('categories')->where('id','=', $id)->value('title');
        //$title =DB::table('categories')->select('title')->where('id','=',$id)->get();
        $category = Category::find($id);
        $data = Post::where('category_id','=',$category->id)->orderBy('id', 'desc')->get();
        if($data->isEmpty()){
            $data = Service::where('category_id','=',$category->id)->orderBy('id', 'desc')->get();
            //dd($data);
        }
        return view('home.posts',['posts'=>$data,'title'=>$category->title]);


    }

    public function storemessage(Request $request){
        dd($request);
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contactus')->with('info','Your message has been sent, Thank you.!');
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginusercheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //email_verified kontrol et.
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::check()){
                $user = Auth::user();
                if(!$user->email_verified_at){
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    return back()->withErrors(['error' => 'Before login, could you verify your email address by clicking on the link we emailed to you?',]);
                }
                return redirect()->intended('/');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
