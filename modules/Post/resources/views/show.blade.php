@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::post.index') }}"></x-backlink>

    <x-panel title="Detil Post">
        <table class="ui table definition">
        <tr><td>Id</td><td>{{ $post->id }}</td></tr>
        <tr><td>Title</td><td>{{ $post->title }}</td></tr>
        <tr><td>Content</td><td>{{ $post->content }}</td></tr>
        <tr><td>User Id</td><td>{{ $post->user_id }}</td></tr>
        <tr><td>Created At</td><td>{{ $post->created_at }}</td></tr>
        <tr><td>Updated At</td><td>{{ $post->updated_at }}</td></tr>
        </table>
    </x-panel>

@stop
