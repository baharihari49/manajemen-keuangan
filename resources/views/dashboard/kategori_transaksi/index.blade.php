@extends('dashboard.layouts.mainDashboard');

@section('container')
<main class="p-4 md:ml-64 h-auto pt-20">
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 mb-4">

        <div
            class="bg-white xl:col-span-3 flex items-center shadow-md border-gray-300 rounded-lg h-max dark:border-gray-600 h-64 md:h-fit">
            {{-- <div class="w-full h-[300px] mx-auto md:mx-0 md:w-[400px] lg:w-[85%] xl:w-[75%] 2xl:w-[90%] md:h-full" id="pieChart"></div> --}}
            <div class="overflow-auto h-full w-full rounded-lg">
                @include('dashboard.kategori_transaksi.layouts.tabelKategoriTransaksi')
            </div>
        </div>
    </div>
</main>
@endsection