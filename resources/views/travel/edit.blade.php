<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Travel Logs Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('travel.update', $travel_log->id) }}">
                    @csrf

                    <!-- Tanggal -->
                    <div>
                        <x-input-label for="date" :value="__('Tanggal')" />
                        <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{$travel_log->date}}" required autofocus />
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>

                    <!-- Waktu -->
                    <div class="mt-4">
                        <x-input-label for="time" :value="__('Waktu')" />
                        <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" value="{{$travel_log->time}}" required />
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <x-input-label for="location" :value="__('Lokasi')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" value="{{$travel_log->location}}" required autofocus />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <!-- Suhu Tubuh -->
                    <div>
                        <x-input-label for="temperature" :value="__('Suhu Tubuh')" />
                        <x-text-input id="temperature" class="block mt-1 w-full" type="text" name="temperature" value="{{$travel_log->temperature}}" required autofocus />
                        <x-input-error :messages="$errors->get('temperature')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Update Data') }}
                        </x-primary-button>
                    </div>
                    @method('put')
                </form>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>