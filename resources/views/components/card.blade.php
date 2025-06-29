<div>

    <div class="block max-w-sm  p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $judul }}</h5>
        <p class="font-normal text-gray-700 ">{{ $isi }}</p>

        <div class="action flex flex-row gap-4 justify-end">
            <a href="/edit/{{ $id }}">
                <button type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-1.5 mt-4">
                    Edit
                </button>
            </a>


            <form action="/delete/{{ $id }}" method="post">
                @csrf
                <button type="submit"
                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 mt-4">
                    Hapus
                </button>
            </form>

        </div>


    </div>

</div>
