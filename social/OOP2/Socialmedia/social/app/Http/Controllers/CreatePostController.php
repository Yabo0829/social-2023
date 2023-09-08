<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class CreatePostController extends Controller
{
    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->post = $request->post;
        $request->user()->posts($post)->save($post);
        return redirect(route('social.index'));
    }
    public function global(Request $request)
    {
        $stories = Post::all();
        return view('media.global', ['stories' => $stories]);
    }

    public function edit(Post $yourpost )
    {
        return view('media.edit', ['yourpost' => $yourpost]);
    }

    public function update(Post $yourpost, Request $request)
    {
        $data = [

            'title' => $request->title,
            'post' => $request->post

        ];
        $yourpost->update($data);
        return redirect(route('social.index'));

    }

    public function destroy(Post $yourpost)
    {
        $yourpost->delete();
        return redirect(route('social.index'));
    }
  

}
