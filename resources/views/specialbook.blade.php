<x-app-layout>    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Limited Book') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Special Book</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 p-6">
        <div class="container mx-auto">
            <!-- Section 1 -->
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-center m-6">Agama</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\ethics of islam.png') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">Ethics of Islam</h3>
                        <p class="text-gray-600 mt-2">Ethics of Islam is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/1INmH_NXhO5sGtXfdAbJAp1CYE3xOuvoi/view?usp=sharing" target="_blank">Baca</a></button>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\belief and islam.png') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">Belief and Islam</h3>
                        <p class="text-gray-600 mt-2">Belief and Islam is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/1QK172VVAXVTdMUcibS2vIVMzBeDUVdgk/view?usp=drive_link" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
            
            <!-- Section 2 -->
            <section class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-center m-6">Keuangan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\rich dad.jpeg') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">Rich Dad Poor Dad</h3>
                        <p class="text-gray-600 mt-2">Rich Dad Poor Dad is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/14MTyV3aE-j9EoqhjN1EtjDRlOA_I6_Cw/view?usp=sharing" target="_blank">Baca</a></button>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\of money.jpeg') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">The Psychology of Money</h3>
                        <p class="text-gray-600 mt-2">The Psychology of Money is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/1brbtyOcQ-xslQzTfedtMsxuhxl5KBHe1/view?usp=drive_link" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
<!-- Section 3 -->
            <section>
                <h2 class="text-2xl font-bold mb-4 m-6 text-center">Sejarah</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\sejarah indonesia.jpeg') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">Sejarah Indonesia</h3>
                        <p class="text-gray-600 mt-2">Sejarah Indonesia is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/1ct0UokyS-JgRe6u3_Dh3N7WyDeL9T6z-/view?usp=drive_link" target="_blank">Baca</a></button>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                        <img src="{{ asset('storage\image\the proof.png') }}" alt="Book Image" class="w-full h-[25rem] object-cover rounded-lg">
                        <h3 class="text-xl font-semibold mt-4 text-center">The Proof of Prophethood</h3>
                        <p class="text-gray-600 mt-2">The Proof of Prophethood is a book written by don't know</p>
                        <button class="w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"><a href="https://drive.google.com/file/d/1t9pr4zDzdH7gsYAPbB2QGejxFMf4_IkH/view?usp=drive_link" target="_blank">Baca</a></button>
                    </div>
                </div>
            </section>
        </div>
    </body>
    </html>
</x-app-layout>
