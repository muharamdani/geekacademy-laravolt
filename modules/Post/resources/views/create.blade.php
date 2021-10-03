@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::post.index') }}"></x-backlink>

    <x-panel title="Tambah Post">
        {!! form()->post(route('modules::post.store'))->horizontal()->multipart() !!}
        @include('post::_form')
        {!! form()->close() !!}
    </x-panel>

@stop
