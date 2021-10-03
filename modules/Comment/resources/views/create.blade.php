@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::comment.index') }}"></x-backlink>

    <x-panel title="Tambah Comment">
        {!! form()->post(route('modules::comment.store'))->horizontal()->multipart() !!}
        @include('comment::_form')
        {!! form()->close() !!}
    </x-panel>

@stop
