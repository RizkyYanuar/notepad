@extends('layouts.app')

@section('title', 'Tambah | Notepad')

@section('content')

    <div class="bg-gray-200 h-screen px-8 py-4">
        <div class="add-btn">
            <p class="text-base absolute text-blue-500 p-1 hover:text-blue-600"><a href="/">Kembali</a></p>
        </div>
        <div class="title flex items-center justify-center">
            <p class="text-3xl">TAMBAH CATATAN</p>
        </div>

        <div class="container">
            <div class="block py-4 ps-4 pe-10 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 w-[50rem] mt-8">
                <form action="/tambah" method="post">
                    @csrf
                    <div class="mb-4 grid grid-cols-[10%_90%] gap-4">
                        <label for="judul" class="block pt-3 text-sm font-medium text-gray-900">Judul</label>
                        <input type="text" id="judul"
                            class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-full"
                            placeholder="" required name='judul'/>
                    </div>
                    <div class="grid grid-cols-[10%_90%] gap-4 mb-4">
                        <label for="isi" class="block pt-3 text-sm font-medium text-gray-900">Isi</label>
                        <textarea name="isi" id="" cols="30" rows="10"
                            class="rounded-lg bg-gray-50 border-gray-300 text-gray-900"></textarea>
                    </div>
                    <div class="flex items-center justify-end"><button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">Buat</button></div>
                </form>
            </div>
        </div>
    </div>

@endsection
