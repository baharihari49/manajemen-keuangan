@extends('dashboard.layouts.mainDashboard')

@section('container')
<main class="p-4 md:ml-64 h-auto pt-20">
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

        <div class="bg-white relative shadow-md border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-36">
            <i style="color: #1c64f2" class="ms-3 sm:ms-5 mt-5 w-[35px] h-[35px]" data-feather="dollar-sign"></i>
            <span style="color: #1e293b" class="absolute bottom-3 left-3 2xl:bottom-4 2xl:left-5 block font-bold">
                <p class="sm:text-3xl text-xl mb-1">Rp. 500.000</p>
                <P class="text-xs text-slate-500">Saldo</P>
            </span>
        </div>

        <div class="bg-white relative shadow-md border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-36">
            <i style="color: #057A55" class="ms-3 sm:ms-5 mt-5 w-[35px] h-[35px]" data-feather="trending-down"></i>
            <span style="color: #1e293b" class="absolute bottom-3 left-3 2xl:bottom-4 2xl:left-5 block font-bold">
                <p class="sm:text-3xl mb-1 text-xl">Rp. 500.000</p>
                <P class="text-xs text-slate-500">Pendapatan</P>
            </span>
        </div>

        <div class="bg-white relative shadow-md border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-36">
            <i style="color: #7E3AF2" class="ms-3 sm:ms-5 mt-5 w-[35px] h-[35px]" data-feather="pocket"></i>
            <span style="color: #1e293b" class="absolute bottom-3 left-3 2xl:bottom-4 2xl:left-5 block font-bold">
                <p class="sm:text-3xl mb-1 text-xl">Rp. 500.000</p>
                <P class="text-xs text-slate-500">Anggaran</P>
            </span>
        </div>

        <div class="bg-white relative shadow-md border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-36">
            <i style="color: #E11D48" class="ms-3 sm:ms-5 mt-5 w-[35px] h-[35px]" data-feather="shopping-bag"></i>
            <span style="color: #1e293b" class="absolute bottom-3 left-3 2xl:bottom-4 2xl:left-5 block font-bold">
                <p class="sm:text-3xl mb-1 text-xl">Rp. 500.000</p>
                <P class="text-xs text-slate-500">Pengeluaran</P>
            </span>
        </div>

    </div>


    {{-- LINE chart --}}
    <div class="bg-white shadow-md p-4 rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4">
        <div class="w-full h-full" id="LineChart"></div>
    </div>
    {{-- LINE chart END --}}


    <div class="grid lg:grid-cols-4 gird-cols-2 gap-4 mb-4">
        <div class="xl:col-span-3 bg-white shadow-md rounded-lg border-gray-300 dark:border-gray-600 h-[300px] md:h-72">
          <div class="h-full" id="BarChart"></div>
        </div>
        <div class="bg-white xl:col-span-1 shadow-md rounded-lg border-gray-300 dark:border-gray-600 h-[300px] lg:h-full md:h-72">
          <div class="w-full h-full" id="pieChartAnggaran"></div>
        </div>
        <div class="xl:col-span-2 bg-white shadow-md px-2 py-1 rounded-lg border-gray-300 dark:border-gray-600 h-[300px] md:h-72">
          <div class="overflow-y-auto h-full">
            @include('dashboard.layouts.tabelAnggaran')
          </div>
        </div>
        <div class="xl:col-span-2 bg-white shadow-md px-2 py-1 rounded-lg border-gray-300 dark:border-gray-600 h-[300px] md:h-72">
          <div class="overflow-y-auto h-full">
            @include('dashboard.layouts.tabelAnggaran')
          </div>
        </div>
    </div>



    {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
    <div class="grid grid-cols-2 gap-4">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div> --}}
  </main>
  @include('dashboard.chart.barChartForAnggaran')
@include('dashboard.chart.lineChart')
@include('dashboard.chart.pieChartForAnggaran')
@endsection
