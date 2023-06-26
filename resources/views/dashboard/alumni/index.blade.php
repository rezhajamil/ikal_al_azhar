@extends('layouts.dashboard.app')
@section('body')
    <div class="w-full mx-4">
        <div class="flex flex-col">
            <div class="mt-4">
                <h4 class="text-xl font-bold text-gray-600 align-baseline">Data Alumni</h4>

                <div class="flex flex-wrap items-end mb-2 gap-x-4">
                    <input type="text" name="search" id="search" placeholder="Search..." class="px-4 rounded-lg">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-600">Berdasarkan</span>
                        <select name="search_by" id="search_by" class="rounded-lg">
                            <option value="faculty">Fakultas</option>
                            <option value="major">Jurusan</option>
                            <option value="name">Nama</option>
                            <option value="nim">NIM</option>
                            <option value="phone">Telp</option>
                            <option value="email">Email</option>
                            <option value="job">Pekerjaan</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-600">Status</span>
                        <select name="filter_status" id="filter_status" class="rounded-lg">
                            <option value="">All</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                {{-- <span class="inline-block mt-6 mb-2 text-lg font-semibold text-gray-600">Direct Sales By Region</span> --}}
                <a href="{{ route('admin.alumni.create') }}"
                    class="inline-block px-4 py-2 my-2 font-bold text-white rounded-md bg-emerald-600 hover:bg-teal-600"><i
                        class="mr-2 fa-solid fa-plus"></i> Data Alumni Baru</a>
                <button id="btn-print"
                    class="inline-block px-4 py-2 mx-4 my-2 font-bold text-white bg-gray-600 rounded-md hover:bg-gray-800"><i
                        class="mr-2 fa-solid fa-file-pdf"></i> Laporan Data Alumni
                </button>

                <div class="overflow-auto bg-white rounded-md shadow w-fit" id="table-data">
                    <table class="overflow-auto text-left border-collapse w-fit">
                        <thead class="border-b">
                            <tr>
                                <th class="px-2 py-1 text-sm font-bold text-gray-100 uppercase bg-teal-600">No</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Fakultas</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Jurusan</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Nama</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">NIM</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Telepon</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Email</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Tahun Lulus
                                </th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600">Pekerjaan</th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600 sosmed">Sosmed
                                </th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600 status">Status
                                </th>
                                <th class="px-2 py-1 text-sm font-medium text-gray-100 uppercase bg-teal-600 action">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumni as $key => $data)
                                <tr class="hover:bg-gray-200 {{ $data->status ? 'active' : 'inactive' }}">
                                    <td class="px-2 py-1 font-bold text-gray-700 border-b">{{ $key + 1 }}</td>
                                    <td class="px-2 py-1 text-gray-700 uppercase border-b faculty">
                                        {{ $data->faculty->name }}</td>
                                    <td class="px-2 py-1 text-gray-700 uppercase border-b major">{{ $data->major->name }}
                                    </td>
                                    <td class="px-2 py-1 text-gray-700 border-b whitespace-nowrap name">{{ $data->name }}
                                    </td>
                                    <td class="px-2 py-1 text-gray-700 uppercase border-b nim">{{ $data->nim }}</td>
                                    <td class="px-2 py-1 text-gray-700 border-b phone">{{ $data->phone }}</td>
                                    <td class="px-2 py-1 text-gray-700 border-b email">{{ $data->email }}</td>
                                    <td class="px-2 py-1 text-gray-700 border-b year">{{ $data->year }}</td>
                                    <td class="px-2 py-1 text-gray-700 border-b job">{{ $data->job }}</td>
                                    <td class="px-2 py-1 text-gray-700 border-b sosmed">
                                        @if ($data->facebook)
                                            <a href="{{ $data->facebook }}" target="_blank"
                                                class="mr-2 text-xl text-blue-600 transition-all hover:text-blue-800"><i
                                                    class="fa-brands fa-facebook"></i>
                                            </a>
                                        @endif
                                        @if ($data->instagram)
                                            <a href="{{ $data->instagram }}" target="_blank"
                                                class="text-xl text-transparent transition-all bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 hover:text-purple-800"><i
                                                    class="fa-brands fa-instagram"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td class="px-2 py-1 text-gray-700 border-b status">
                                        @if ($data->status)
                                            <div
                                                class="flex items-center justify-center px-3 py-1 rounded-full bg-green-200/50">
                                                <span class="text-sm font-semibold text-green-900 status">Aktif</span>
                                            </div>
                                        @else
                                            <div
                                                class="flex items-center justify-center px-3 py-1 rounded-full bg-red-200/50">
                                                <span
                                                    class="text-sm font-semibold text-red-900 whitespace-nowrap status">Tidak
                                                    Aktif</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-2 py-1 text-gray-700 border-b action">
                                        <a href="{{ route('admin.alumni.edit', $data->id) }}"
                                            class="block my-1 text-base font-semibold transition text-emerald-600 hover:text-emerald-800">Edit</a>
                                        <a href="{{ route('admin.alumni.change_status', $data->id) }}"
                                            class="block my-1 text-base font-semibold text-left text-red-600 transition hover:text-red-800 whitespace-nowrap">Ubah
                                            Status</a>
                                        {{-- <form action="{{ route('admin.alumni.change_status', $data->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit"
                                                class="block my-1 text-base font-semibold text-left text-red-600 transition hover:text-red-800 whitespace-nowrap">Ubah
                                                Status</button>
                                        </form> --}}
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
@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js">
    </script>
    <script>
        function createPDF(table) {
            // var table = document.getElementById('table-data').innerHTML;
            console.log(table);
            var style = "<style>";
            style = style + "table {width: 100%;font: 17px Calibri;}";
            style = style + "table.resume, th.resume, td.resume {border: solid 1px #059669; border-collapse: collapse;}";
            style = style + "table, th, td {border: solid 1px #ccc; border-collapse: collapse;";
            style = style + "padding: 2px 3px;text-align: center;}";
            style = style + "h4{ width:100%;text-align: center;}";
            style = style + "</style>";

            // CREATE A WINDOW OBJECT.
            var win = window.open('', '', 'height=700,width=700');

            win.document.write('<html><head> ');
            win.document.write(`<title>Daftar Alumni</title>`); // <title> FOR PDF HEADER.
            win.document.write(style); // ADD STYLE INSIDE THE HEAD TAG.
            win.document.write('</head>');
            win.document.write('<body>');
            win.document.write('<body><h4>Daftar Alumni Al-Azhar Centre Medan</h4>');
            win.document.write(table); // THE TABLE CONTENTS INSIDE THE BODY TAG.
            win.document.write('</body> </html > ');

            win.document.close(); // CLOSE THE CURRENT WINDOW.

            win.print(); // PRINT THE CONTENTS.
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#search").on("input", function() {
                find();
            });

            $("#search_by").on("input", function() {
                find();
            });

            $("#filter_status").on("input", function() {
                filter_status();
            });

            $("#btn-print").on("click", function() {
                var table = $("#table-data").clone();

                table.find('.action').remove();
                table.find('.sosmed').remove();
                table.find('.status').remove();
                table.find('.inactive').remove();
                createPDF(table[0].innerHTML)
            });

            const find = () => {
                let search = $("#search").val();
                let searchBy = $('#search_by').val();
                let pattern = new RegExp(search, "i");
                $(`.${searchBy}`).each(function() {
                    let label = $(this).text();
                    if (pattern.test(label)) {
                        $(this).parent().show();
                    } else {
                        $(this).parent().hide();
                    }
                });
            }

            const filter_status = () => {
                let filter_status = $('#filter_status').val();
                $(`.status`).each(function() {
                    let label = $(this).text();
                    if (filter_status == '') {
                        $(this).parent().parent().parent().show();
                    } else {
                        if (filter_status == label) {
                            $(this).parent().parent().parent().show();
                        } else {
                            $(this).parent().parent().parent().hide();
                        }
                    }
                });

            }

        })
    </script>
@endsection
