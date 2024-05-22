@extends('layouts.welcome')
@section('content')
<div style="height: 100px;"></div>

<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="col card">
					<div class="d-flex justify-content-end pb-3">
						<div class="btn-group gap gap-2">
							<a href="#" class="btn btn-secondary">
								<span class="badge">0</span> Histori Data Kas
							</a>
							<button type="button" class="btn btn-primary icon icon-left" data-bs-toggle="modal"
								data-bs-target="#createModal">
								<i class="bi bi-plus-circle"></i> Tambah Data Kas
							</button>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table w-100 table-hover" id="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama Warga</th>
									<th scope="col">Total Bayar</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Dicatat Oleh</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="mx-auto p-36 contain-responsive" style="min-height: 100vh; background-color: #FBEEC1;">
        <div class="rounded-md relative p-16 top-32 left-16" style="background-color: white">
            <p class="mb-10"  style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 600; color: black;">Daftar Izin Usaha RT 10:</p>
            <hr class="mb-6">
            {{-- <p class="mb-6" style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; color: black;">{{ $breadcrumb->subtitle }}</p> --}}
            <table class="md:table-fixed w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: black">No</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: black">Nama Warga</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: black">Bukti</th>
                        <th class="border px-4 py-2 text-center w-1/6" style="color: black">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2 text-center" style="color: black">1</td>
                        <td class="border px-4 py-2 text-center" style="color: black">Miguel Santoso</td>
                        <td class="border px-4 py-2 text-center" style="color: black">Mi Amor Bakery</td>

                            <div class="flex justify-center">
                                <img src="{{ asset('img/.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-center" style="color: black">
                            <button class="btn-detail bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded" style="border-radius: 10px"><a href="{{ route('detailIzinUsaha') }}">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 3H21.5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.5 21H3.5V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.5 3L14.5 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.5 21L10.5 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></a>       
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
