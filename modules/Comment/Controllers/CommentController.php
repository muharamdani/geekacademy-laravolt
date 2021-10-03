<?php

namespace Modules\Comment\Controllers;

use Illuminate\Routing\Controller;
use Modules\Comment\Requests\Store;
use Modules\Comment\Requests\Update;
use Modules\Comment\Models\Comment;
use Modules\Comment\Tables\CommentTableView;
use Modules\Post\Service\PostService;

class CommentController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return CommentTableView::make()->view('comment::index');
    }

    public function create()
    {
        $userData = $this->postService->getDropdownUserData();
        $postData = $this->postService->getPostsData();
        return view('comment::create', compact('userData', 'postData'));
    }

    public function store(Store $request)
    {
        Comment::create($request->validated());

        return redirect()->back()->withSuccess('Comment saved');
    }

    public function show(Comment $comment)
    {
        return view('comment::show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comment::edit', compact('comment'));
    }

    public function update(Update $request, Comment $comment)
    {
        $comment->update($request->validated());

        return redirect()->back()->withSuccess('Comment saved');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()->withSuccess('Comment deleted');
    }
}
