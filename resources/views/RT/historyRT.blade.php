@extends('layouts.welcome')

@section('content')
<main class="mx-auto p-6 sm:p-12 md:p-24 lg:p-36 contain-responsive" style="min-height: 100vh; background-color: #FBEEC1;">
    <select class="custom-dropdown mb-6">
        <option value="januari">Januari</option>
        <option value="februari">Februari</option>
        <option value="maret">Maret</option>
        <option value="april">April</option>
        <option value="mei">Mei</option>
        <option value="juni">Juni</option>
        <option value="juli">Juli</option>
        <option value="agustus">Agustus</option>
        <option value="september">September</option>
        <option value="oktober">Oktober</option>
        <option value="november">November</option>
        <option value="desember">Desember</option>
    </select>

    <div class="rounded-md relative p-6 sm:p-8 md:p-12 lg:p-16 bg-white shadow-lg">
        <p class="mb-10 text-lg sm:text-xl md:text-2xl font-semibold" style="font-family: 'Poppins', sans-serif; color: black;">Data Iuran Warga:</p>
        <hr class="mb-6">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="border px-2 sm:px-4 py-2 text-center" style="color: black">No</th>
                    <th class="border px-2 sm:px-4 py-2 text-center" style="color: black">Nama Warga</th>
                    <th class="border px-2 sm:px-4 py-2 text-center" style="color: black">Bukti</th>
                    <th class="border px-2 sm:px-4 py-2 text-center" style="color: black">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-2 sm:px-4 py-2 text-center" style="color: black">1</td>
                    <td class="border px-2 sm:px-4 py-2 text-center" style="color: black">Miguel Santoso</td>
                    <td class="border px-2 sm:px-4 py-2 text-center" style="color: black">
                        <div class="flex justify-center">
                            <img src="{{ asset('img/.jpg') }}" alt="Bukti" class="w-full max-w-xs">
                        </div>
                    </td>
                    <td class="border px-2 sm:px-4 py-2 text-center" style="color: black">
                        <button class="btn-detail bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded" style="border-radius: 10px">
                            <a href="{{ route('wargaHistory') }}">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 3H21.5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.5 21H3.5V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.5 3L14.5 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.5 21L10.5 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </button>
                        <button class="btn-tolak bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded ml-2" style="border-radius: 10px">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 6L6.5 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.5 6L18.5 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="btn-acc bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded ml-2" style="border-radius: 10px">
                            <svg width="25" height="24" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 1L6.5 12L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
