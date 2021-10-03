@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::comment.index') }}"></x-backlink>

    <x-panel title="Detil Comment">
        <table class="ui table definition">
        <tr><td>Id</td><td>{{ $comment->id }}</td></tr>
        <tr><td>User Id</td><td>{{ $comment->user_id }}</td></tr>
        <tr><td>Post Id</td><td>{{ $comment->post_id }}</td></tr>
        <tr><td>Title</td><td>{{ $comment->title }}</td></tr>
        <tr><td>Message</td><td>{{ $comment->message }}</td></tr>
        <tr><td>Created At</td><td>{{ $comment->created_at }}</td></tr>
        <tr><td>Updated At</td><td>{{ $comment->updated_at }}</td></tr>
        </table>
    </x-panel>

@stop
