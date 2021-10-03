@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Comment">
        <x-item>
            <x-link label="Tambah" icon="plus" url="{{ route('modules::comment.create') }}"></x-link>
        </x-item>
    </x-titlebar>

    {!! $table !!}
@stop
