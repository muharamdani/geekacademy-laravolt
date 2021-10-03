@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Post">
        <x-item>
            <x-link label="Tambah" icon="plus" url="{{ route('modules::post.create') }}"></x-link>
        </x-item>
    </x-titlebar>

    {!! $table !!}
@stop
