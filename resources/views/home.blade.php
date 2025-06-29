@extends('layouts.app')

@section('title', 'Home | Notepad')

@section('content')
    <div class="bg-gray-200 h-screen px-8 py-4">
        <div class="add-btn">
            <p class="text-4xl text-green-500 p-1 absolute"><a href="/tambah">+</a></p>
        </div>
        <div class="title flex items-center justify-center">
            <p class="text-3xl">PRIVATE NOTEPAD</p>
        </div>
        <div class="container grid grid-cols-4 gap-4 mb-2 mt-8">
            @foreach ($note as $item)
<x-card :judul="$item->judul" :isi="$item->isi" :id="$item->id" />
            @endforeach
        </div>
    </div>


@endsection
