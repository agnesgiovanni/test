<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    //
    public function movie(){
        $movielist = DB::table('movies')->get();
        return view('home', ['movielist' => $movielist]);
    }

    public function insertMoviePage(){
        return view('insertMovie');
    }

    public function insertMovie(Request $request){

        $this->validate($request,[
            'drama_title' => 'required | min:3',
            'drama_description' => 'required | max:3',
            'drama_thumbnail' => 'required|mimes:png,jpg'
        ]);

        $img = $request->file('drama_thumbnail');
        Storage::putFileAs('public/', $img, $img->getClientOriginalName());
        DB::table('dramas')->insert([
            'name'=>$request->drama_title,
            'description'=>$request->drama_description,
            'image'=> $img->getClientOriginalName()
        ]);
        return redirect('home');
    }
}