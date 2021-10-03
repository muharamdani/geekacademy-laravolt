@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::comment.index') }}"></x-backlink>

    <x-panel title="Edit Comment">
        {!! form()->bind($comment)->put(route('modules::comment.update', $comment->getKey()))->horizontal()->multipart() !!}
        @include('comment::_form')
        {!! form()->close() !!}
    </x-panel>

@stop
