<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Travel Logs Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
            <form action="{{ route('travel.create') }}" method="GET">
                <x-primary-button class="ml-4 mb-4">
                    {{ __('Tambah Data') }}
                </x-primary-button>
            </form>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  @foreach ( $travel_logs as $travel_log )
                    <p>Tanggal : <?= $travel_log->date ?></p>
                    <p>Waktu : <?= $travel_log->time ?></p>
                    <p>Lokasi : <?= $travel_log->location ?></p>
                    <p>Suhu Tubuh : <?= $travel_log->temperature ?></p>
                    <br>
                  @endforeach  
                </div>

            </div>
        </div>
    </div>
</x-app-layout>