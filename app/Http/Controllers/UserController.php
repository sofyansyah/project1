<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Artwork;
use App\Follow;
use Hash;
use Image;

class UserController extends Controller
{
  public function login()
  {
    if (Auth::check()) {
      return redirect('/');
    }
    return view('auth.login');
  }
  public function postlogin(Request $r)
  {
    $this->validate($r, [
      'email'     => 'required',
      'password'  => 'required'
      ]);

    if (Auth::attempt(['email' => $r->email, 'password' => $r->password])) {
      return redirect()->intended('/');
    }

    return redirect()->back()->with('error','email dan password yang anda masukan tidak sesuai');
  }
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function edit_profile($name)
  {
    $user = User::whereName($name)
    ->first();
    return view('user.profile-edit',compact('user'));
  }
  public function edit_profile_post(Request $r, $id)
  {
   $user = User::findOrFail($id);
       // $user->name = $r->name;
       // $user->email = $r->email;
       // $user->password = Hash::make($r->password);
   $user->bio = $r->bio;
   $user->job = $r->job;
   $user->facebook = $r->facebook;
   $user->twitter = $r->twitter;
   $user->instagram = $r->instagram;
   $user->web = $r->web;
   $user->save();

   if($r->hasFile('photo')){

     $avatar = $r->file('photo');
     $filename = $r->name.'_'.str_random(4) . '.'.pathinfo($r->file('photo')->getClientOriginalName(),PATHINFO_EXTENSION);
     Image::make($avatar)->resize(150, 150)->save (public_path('/img/avatar/' . $filename));

     $user = Auth::user();
     $user->avatar = $filename;
     $user->save();
   }
   if($r->hasFile('banner')){

     $banners = $r->file('banner');
     $filename = $r->name.'_'.str_random(4) . '.'.pathinfo($r->file('banner')->getClientOriginalName(),PATHINFO_EXTENSION);
     Image::make($banners)->crop(968, 344)->save (public_path('/img/banner/' . $filename));

     $user = Auth::user();
     $user->banner_profile = $filename;
     $user->save();
   }


   return redirect('profile/'. $user->name)->with('success','Berhasil edit profile anda');
 }


 public function profile($name){

   $user = User::whereName($name)->first();

   // $follows = DB::table('follower')->where('follow_user', '=', $user->id)->count();
   // $following = DB::table('follower')->where('user_id', '=', $user->id)->count();

   // $stats= Status::join('users', 'status.user_id', '=', 'users.id')
   // ->join('emoticon', 'status.emotion_id', '=', 'emoticon.id')
   // ->where('status.user_id', $user->id)
   // ->select('emoticon.emoticon_img as emoticon')
   // ->first();

   $art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
   // ->join('foto', 'artworks.id', 'foto.id_artwork')
   ->where('artworks.user_id', $user->id)
   ->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job', 'artworks.img_small')
   // ->groupBy('id_artwork')
   // ->orderBy('id', 'desc')
   ->get();

   $follow = Follow::where('user_id',Auth::user()->id)->where('follow_user',$user->id)->first();

   

   return view ('user.profile', compact('user', 'stats','art', 'follow', 'follows', 'following', 'followers', 'followings'));
 }

 public function followers($name){
   $user = User::whereName($name)->first();
   $followers = Follow::where('follow_user', $user->id)
   ->join('users', 'follower.user_id', 'users.id')
   ->get();

   return view ('user.followers', compact('followers', 'user'));
 }

 public function following($name){
   $user = User::whereName($name)->first();
   $following = Follow::where('user_id', $user->id)   
   ->join('users', 'follower.follow_user', 'users.id')
   ->get();


   return view ('user.following', compact('following', 'user'));
 }

 public function follow($id)
 {
  $user = User::where('users.id', $id)->first();
  $follow = new Follow;
  $follow->user_id        = Auth::user()->id;
  $follow->follow_user  = $user->id;
  $follow->save();

  return redirect()->back()->with('success','Berhasil Follow '.$id);
}
public function unfollow($id)
{
  $follow = Follow::findOrFail($id);
  $follow->delete();

  return redirect()->back()->with('success','Berhasil UnFollow ');
}

}
