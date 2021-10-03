@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::post.index') }}"></x-backlink>

    <x-panel title="Edit Post">
        {!! form()->bind($post)->put(route('modules::post.update', $post->getKey()))->horizontal()->multipart() !!}
        @include('post::_form')
        {!! form()->close() !!}
    </x-panel>

@stop
