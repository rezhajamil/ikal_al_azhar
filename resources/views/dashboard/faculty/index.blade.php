@extends('layouts.dashboard.app')
@section('body')
    <div class="w-full mx-4">
        <div class="flex flex-col">
            <div class="mt-4">
                <h4 class="text-xl font-bold text-gray-600 align-baseline">Data Fakultas</h4>

                <a href="{{ route('admin.faculty.create') }}"
                    class="inline-block px-4 py-2 my-2 font-bold text-white rounded-md bg-emerald-600 hover:bg-teal-600"><i
                        class="mr-2 fa-solid fa-plus"></i> Data Fakultas Baru</a>

                <div class="overflow-auto bg-white rounded-md shadow w-fit">
                    <table class="overflow-auto text-left border-collapse w-fit">
                        <thead class="border-b">
                            <tr>
                                <th class="p-3 text-sm font-bold text-gray-100 uppercase bg-teal-600">No</th>
                                <th class="p-3 text-sm font-medium text-gray-100 uppercase bg-teal-600">Nama</th>
                                <th class="p-3 text-sm font-medium text-gray-100 uppercase bg-teal-600">Deskripsi</th>
                                <th class="p-3 text-sm font-medium text-gray-100 uppercase bg-teal-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculty as $key => $data)
                                <tr class="hover:bg-gray-200">
                                    <td class="p-4 font-bold text-gray-700 border-b">{{ $key + 1 }}</td>
                                    <td class="p-4 text-gray-700 border-b name">{{ $data->name }}</td>
                                    <td class="p-4 text-gray-700 border-b description">{{ $data->description }}
                                    </td>
                                    <td class="p-4 text-gray-700 border-b">
                                        <a href="{{ route('admin.faculty.edit', $data->id) }}"
                                            class="block my-1 text-base font-semibold transition text-emerald-600 hover:text-emerald-800">Edit</a>
                                        <form action="{{ route('admin.faculty.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class="block my-1 text-base font-semibold text-left text-red-600 transition hover:text-red-800">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
