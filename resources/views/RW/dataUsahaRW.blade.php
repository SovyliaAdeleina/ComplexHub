@extends('layouts.welcome')
@section('content')
    {{-- Content --}}
    <main class="mx-auto p-36 contain-responsive" style="min-height: 100vh; background-color: #FBEEC1;">
        <div class="opsi flex flex-col md:flex-row md:justify-between mt-20">
            <div class="md:w-2/5 h-96 rounded-md md:ml-16 mt-4 md:mt-0"
                style="background-color: #659DBD; filter: drop-shadow(12px 13px 4px rgba(2, 109, 124, 0.25));">
                <p class="values w-911 h-62 relative md:left-20 top-16 text-center md:text-left"
                    style="font-size: 80px; font-family: 'Poppins', sans-serif; font-weight: 600; color: #FFFEFE;">
                    RT :
                    <div class="values w-911 h-62 relative md:left-96 top-2 text-center md:text-left"
                        style="font-size: 146px; font-family: 'Poppins', sans-serif; font-weight: 600; color: #FFFEFE;">
                        <select class="bg-transparent border-white outline-none text-white w-full md:w-auto">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <!-- tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                </p>
            </div>
            <div class="md:w-2/5 h-96 rounded-md md:relative md:mr-16 mt-8 md:mt-0"
                style="background-color: #659DBD; filter: drop-shadow(12px 13px 4px rgba(2, 109, 124, 0.25));">
                <p class="w-911 h-62 relative md:left-20 top-16 text-center md:text-left"
                    style="font-size: 60px; font-family: 'Poppins', sans-serif; font-weight: 600; color: #FFFEFE;">
                    Total UMKM :
                    <div class="w-911 h-62 relative md:left-96 top-12 ml-12 text-center md:text-left"
                        style="font-size: 146px; font-family: 'Poppins', sans-serif; font-weight: 600; color: #FFFEFE;">
                        <selected class="bg-transparent border-white outline-none text-white w-full md:w-auto">
                            <option value="{{ count($izinUsaha) }}">{{ count($izinUsaha) }}</option>
                        </selected>
                    </div>
                </p>
            </div>
        </div>




        <div class="rounded-md relative p-16 top-32 left-16" style="background-color: #659DBD">
            <p class="mb-10"  style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 600; color: white;">Daftar Izin Usaha RT :</p>
            <table class="md:table-fixed w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">No</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">Nama Warga</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">Nama Usaha</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">Deskripsi</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">Foto Produk</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: white">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($izinUsaha as $izin)
                    <tr>
                        <td class="border px-4 py-2 text-center" style="color: white">{{ $izin->id }}</td>
                        <td class="border px-4 py-2 text-center" style="color: white">{{ $izin->nama_warga }}</td>
                        <td class="border px-4 py-2 text-center" style="color: white">{{ $izin->nama_usaha }}</td>
                        <td class="border px-4 py-2 text-center" style="color: white">{{ $izin->deskripsi }}</td>
                        <td class="border px-4 py-2 text-center" style="color: white">
                            <div class="flex justify-center">
                                <img src="{{ asset($izin->foto_produk) }}" alt="">
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-center" style="color: white">Izin telah di setujui</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection
