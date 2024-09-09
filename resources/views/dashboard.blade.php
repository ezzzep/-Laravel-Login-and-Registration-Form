<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('TESTING') }}
        </h2>
    </x-slot>

    <div class="px-6 py-10 flex items-end">
            <video autoplay muted loop src="{{ asset('image/house3.mp4') }}"  style="width: 50%; height: auto;"></video>

        <div class="p-6 ">
            <div class="bg-white rounded-lg shadow-lg h-full p-6">
                <h3 class="text-lg font-semibold mb-4">HELLO!</h3>
                <p class="font-serif text-lg font-bold">Don’t miss out on this rare opportunity! Your ideal home with modern amenities and a beautiful backyard is just a showing away!</p><br>
                <p>kinuha ko lang pic sa stock photos tapos kay chat yung description</p><br>
                <p class="underline">
                    <a href="https://www.pexels.com/search/house/" target="_blank">https://www.pexels.com/search/house/</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
