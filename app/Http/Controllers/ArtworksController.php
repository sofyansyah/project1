<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use App\Artwork;
use App\User;
use App\Foto;
use Image;
use File;
use Auth;
use Hash;

class ArtworksController extends Controller
{
	
	public function index(){
		$art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->inRandomOrder()
		->get();

		return view ('artwork.random', compact ('art'));
	}

	public function recent(){
		$art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->orderBy('id', 'desc')
		->get();

		return view ('artwork.recent', compact ('art'));
	}

	public function most_view(){
		$art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->groupBy('artworks.id')
		->orderBy('visits.id', 'desc')
		->get();

		return view ('artwork.most-view', compact ('art'));
	}

	public function most_vote(){
		$art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->groupBy('likes.artwork_id')
		->orderBy('likes.id', 'desc')
		->get();

		return view ('artwork.most-vote', compact ('art'));
	}

	
	public function upload(){

		$arts = Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->orderBy('id', 'desc')
		->limit(1)
		->get();


		return view ('artwork.upload', compact('arts'));
	}

	public function post_artwork (Request $r){

		$arts = new Artwork;
		$arts->user_id 		= Auth::user()->id;
		$arts->title 		= $r->title;
		$arts->description 	= $r->description;
		$arts->tag 			= $r->tag;
        $arts->save();

		// $extension        = collect(explode('.', $r->image)); // getting file extension
		// $gambar           = $extension->first().'_'.date('d-m-y').$extension->last();
		// $arts->image_normal      = $gambar;
		// $arts->save();

		// foreach ($r->pict as $k => $v) {
		// 	$foto[$k] = new Foto;
  //           $extension[$k]        = collect(explode('.', $v)); // getting file extension
  //           $gambar[$k]           = $extension[$k]->first().'_.'.$extension[$k]->last();
  //           $foto[$k]->id_artwork  = $arts->id;
  //           $foto[$k]->img_small    = $gambar[$k];
  //           $foto[$k]->img_normal   = $gambar[$k];
  //           $foto[$k]->save();
  //       }

        

		if($r->hasFile('image')){

			$post1 = $r->file('image');
			$filename = $r->arts.'_'.str_random(4) . '.'.pathinfo($r->file('image')->getClientOriginalName(),PATHINFO_EXTENSION);
			Image::make($post1)->save (public_path('img/artwork/' . $filename));
			$arts->img_normal = $filename;

			$post2 = $r->file('image');
			$filename = $r->arts.'_'.str_random(4) . '.'.pathinfo($r->file('image')->getClientOriginalName(),PATHINFO_EXTENSION);
			Image::make($post2)->crop(300, 400)->save(public_path('img/artwork/' . $filename));
			$arts->img_small = $filename;
			$arts->save();
		}

		return redirect('explore')->with('success','Berhasil buat artworks');
	}
	public function dropzone(Request $r)
	{
		// dd(request()->all());

        $extension    = $r->file->getClientOriginalExtension(); 
        $name         = collect(explode('.', $r->file->getClientOriginalName()));
        $image       = $name->first().'_.'.$extension;
        $manager = new ImageManager();
        $fit = $manager->make($r->file);
        $fit->save(public_path().'/img/artwork/'.$image);     
	}

	 public function post_artwork_single(Request $r)
    {
        $manager      = Input::file('file');
        // Image::make($image->getRealPath())->resize(468, 249)->save('public/img/products'.$filename);
        $name         = collect(explode('.', $manager->getClientOriginalName())); // getting file extension
        $extension    = $manager->getClientOriginalExtension(); // getting file extension
        $image       = $name->first().'_'.date('d-m-y') .$extension;
        $path         = public_path('img/'.$image);
        $fit          = Image::make($manager->getRealPath())->save($path);
    }

	public function details_artwork ($title){

		$art = Artwork::where('artworks.title', str_replace('-',' ',$title))
		->join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.id as user_id')
		->first();

		return view('artwork.details', compact ('art', 'arts'));

	}

	public function edit_artwork($id)
	{
		$art = Artwork::where('artworks.id', $id)
		->join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.id as user_id')
		->first();

		$arts = Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job')
		->orderBy('id', 'desc')
		->limit(1)
		->get();

		return view('artwork.edit', compact ('art', 'arts'));
	}
	public function post_edit_artwork(Request $request, $id)
	{
		$art = Artwork::where('artworks.id', $id)
		->join('users', 'artworks.user_id', '=', 'users.id')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.id as user_id')
		->first();
		$art->update($request->all());
		return redirect()->back();
	}

	public function like($id)
	{
		$art = Artwork::where('artworks.id', $id)->first();
		$like = new Like;
		$like->user_id        = Auth::user()->id;
		$like->artwork_id  = $art->id;
		$like->save();

		return redirect()->back();
	}
	public function unlike($id)
	{
		$like = Like::findOrFail($id);
		$like->delete();
		return redirect()->back()->with('success','Berhasil UnLike ');
	}

	public function frontpage(){

		if (Auth::check()) {
			return redirect('home');
		}

		$art= Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		->join('foto', 'artworks.id', 'foto.id_artwork')
		->select('artworks.*','users.name as user_name', 'users.avatar as user_avatar', 'users.job', 'foto.image_small')
		->groupBy('id_artwork')
		->inRandomOrder()
		->get();

		return view ('front-page', compact ('art'));

		// $art = Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		// ->select('artworks.*','users.name as user_name', 'users.photo as user_avatar', 'users.job')
		// ->orderBy('id', 'desc')
		// ->limit(8)
		// ->get();

		// $artwork = Artwork::join('users', 'artworks.user_id', '=', 'users.id')
		// ->select('artworks.*','users.name as user_name', 'users.photo as user_avatar', 'users.job')
		// ->inRandomOrder()
		// ->first();
  //       //  $teams = Team::join('ideas', 'teams.ideas_id', '=', 'ideas.id')
  //       // ->get();
		// $user = User::all();



		// $discuss= Discuss::join('users', 'discuss.user_id', '=', 'users.id')
		// ->select('discuss.*','users.name as user_name', 'users.photo as user_avatar', 'users.job')
		// ->orderBy('id', 'desc')
		// ->get();
	}

	public function delete_artwork($id)
	{
		$art = Artwork::where('artworks.id', $id)->first();
		$art->delete();
		return redirect('/explore');
	}

}

