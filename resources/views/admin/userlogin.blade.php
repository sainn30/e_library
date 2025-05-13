<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman User login') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akunuser as $akuns)
                        @if ($akuns->usertype == "user")
                            <tr class="hover:bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $akuns->name }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $akuns->email }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ $akuns->password }}</th>
                            </tr>
                        @endif                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>