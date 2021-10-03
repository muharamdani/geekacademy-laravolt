<?php

namespace Modules\Post\Controllers;

use Illuminate\Routing\Controller;
use Modules\Post\Requests\Store;
use Modules\Post\Requests\Update;
use Modules\Post\Models\Post;
use Modules\Post\Service\PostService;
use Modules\Post\Tables\PostTableView;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return PostTableView::make()->view('post::index');
    }

    public function create()
    {
        $userData = $this->postService->getDropdownUserData();
        return view('post::create', compact('userData'));
    }

    public function store(Store $request)
    {
        Post::create($request->validated());

        return redirect()->back()->withSuccess('Post saved');
    }

    public function show(Post $post)
    {
        return view('post::show', compact('post'));
    }

    public function edit(Post $post)
    {
        $userData = $this->postService->getDropdownUserData();
        return view('post::edit', compact('post', 'userData'));
    }

    public function update(Update $request, Post $post)
    {
        $post->update($request->validated());

        return redirect()->back()->withSuccess('Post saved');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->withSuccess('Post deleted');
    }
}
