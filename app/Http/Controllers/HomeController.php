<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Post;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Subcribe;
use App\Models\Subscriber;
use http\Client\Curl\User;
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
    public static function servicelist(){
        return  Service::orderBy('id', 'desc')->get();
    }
    public static function getsettings(){
        return  Setting::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //$recentPosts = Post::orderBy('id', 'desc')->limit(3)->get();
        //dd( Auth::check());
        if(Auth::check() && !Auth::user()->email_verified_at){
            $user = Auth::user();
            $user->delete();
        }
        $hizmet = Category::where('title', 'Hizmetler')->value('id');
        $hizmetler = Service::where('category_id', $hizmet)->orderBy('id', 'desc')->limit(3)->get();

        $urun = Category::where('title', 'Ürünler')->value('id');
        $urunler = Service::where('category_id', $urun)->orderBy('id', 'desc')->limit(3)->get();

        $postlar = Post::orderBy('id','desc')->limit(8)->get();
        $setting = Setting::first();
        return view('home.index',[
            'setting'=>$setting,
            'hizmetler'=>$hizmetler,
            'urunler'=>$urunler,
            'postlar'=>$postlar
        ]);
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
    public function data_detail($title)
    {
        $id = DB::table('posts')->where('title', $title)->value('id');
        if(!$id){
            $id = DB::table('services')->where('title', $title)->value('id');
            $data = Service::find($id);
            return view('home.data_detail',[
                'data'=>$data
            ]);
        }
        $data = Post::find($id);
        return view('home.data_detail',[
            'data'=>$data
        ]);
    }
    public function getservices(Request $request)
    {
        $data = Post::where('title',$request->input('search'))->first();
        if(!$data){
            $data = Service::where('title',$request->input('search'))->first();
        }
        if(!$data){
            return redirect()->route('data_detail',['title'=>'']);
        }
        return redirect()->route('data_detail',['title'=>$data->title]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function services()
    {
        $title = "Ürünler ve Hizmetler";
        $services = Service::all();
        return view('home.services',['services'=>$services,'title'=>$title]);
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
        //dd($request);
        if($request->input('subcribe')){
            $subcribes = Subscriber::where('email','=',$request->input('email'))->first();
            if(!$subcribes){
                $data = new Subscriber();
                $data->name=$request->input('name');
                $data->email=$request->input('email');
                $data->phone=$request->input('phone');
                $data->save();
            }
        }
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->subcribe=$request->input('subcribe');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contactus')->with('info','Mesajınız gönderildi.Teşekkürler.!');
    }
    public function subcribe(Request $request)
    {
        $subscribers = Subscriber::where('email','=',$request->input('email_address'))->first();
        if($subscribers)
            return redirect()->back()->with('error','Zaten bu mail kayıtlı!');

        $data = new Subscriber();
        if(Auth::check()){
            $data->name=Auth::user()->name;
            if(Auth::user()->phone)
                $data->phone=Auth::user()->phone;
        }
        $data->email=$request->input('email_address');
        $data->save();
        return redirect()->back()->with('info','Teşekkürler.!');
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
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'error' => 'Sağlanan kimlik bilgileri kayıtlarımızla eşleşmiyor.',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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
}
