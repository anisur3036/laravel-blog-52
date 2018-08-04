<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::latest()->paginate(10);
    	return view('pages/welcome')->withPosts($posts);
    }

    public function getContact()
    {
    	return view('pages/contact');
    }

    public function getAbout()
    {
    	return view('pages/about');
    }

    public function getSingle($id)
    {
    	$post = Post::find($id);
      return view('pages.single')->withPost($post);
    }

}
