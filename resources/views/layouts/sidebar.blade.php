   {{-- Sidebar --}}
   <div id="sidenav" class="fixed z-[9999999999] top-0 left-0 p3">
    <div class="close flex items-center justify-center relative pointer mb2 right">
        <div class="absolute cross bg-black left"></div>
        <div class="absolute cross bg-black right"></div>
    </div>

    <div class="flex items-center complex">
        <svg width="52" height="39" viewBox="0 0 52 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="4.12695" y1="19.5" x2="4.12695" y2="38.9925" stroke="#2A424F" stroke-width="4" />
            <line y1="-2" x2="19.3393" y2="-2"
                transform="matrix(-0.662751 0.74884 -0.737003 -0.67589 14.8945 5.42188)" stroke="#2A424F"
                stroke-width="4" />
            <line y1="-2" x2="19.356" y2="-2"
                transform="matrix(-0.625314 0.780373 -0.769364 -0.638811 33.7109 4.36719)" stroke="#2A424F"
                stroke-width="4" />
            <line y1="-2" x2="21.4848" y2="-2"
                transform="matrix(0.756985 0.653433 -0.640054 0.76833 32.9785 6.50488)" stroke="#2A424F"
                stroke-width="4" />
            <line y1="-2" x2="15.2292" y2="-2"
                transform="matrix(0.7684 0.63997 -0.626481 0.779437 13.8301 6.50488)" stroke="#2A424F"
                stroke-width="4" />
            <line x1="23.2773" y1="19.5" x2="23.2773" y2="38.9925" stroke="#2A424F" stroke-width="4" />
            <line x1="26.5957" y1="22.9146" x2="37.234" y2="22.9146" stroke="#2A424F" stroke-width="4" />
            <line x1="41.8945" x2="41.8945" y2="39" stroke="#2A424F" stroke-width="4" />
            <line x1="49.873" y1="19.5" x2="49.873" y2="38.9925" stroke="#2A424F" stroke-width="4" />
            <line y1="36.9927" x2="50" y2="36.9927" stroke="#2A424F" stroke-width="4" />
        </svg>

        <p id="sidebar-title" class="m5 bold"
            style = "margin-left: 15px; color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;text-align: center;">
            ComplexHub</p>

    </div>



    <ul class="list-reset ">
        <li class="pointer mb3">
            <a class = "w-100 flex" href="{{ auth()->user()->role_id == 1 ? url('/RT/dashboardRT') : (auth()->user()->role_id == 2 ? url('/RW/dashboardRW') : url('/PD/dashboardPD')) }}"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;">
                <svg class="pointer" width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4531 3.73844V9.70763C13.4531 10.2019 13.3554 10.6913 13.1657 11.1477C12.976 11.6042 12.698 12.0187 12.3476 12.3674C11.9972 12.7162 11.5814 12.9924 11.1239 13.1801C10.6665 13.3679 10.1764 13.4635 9.68192 13.4614H3.74042C3.24724 13.4644 2.75854 13.3679 2.30361 13.1775C1.84868 12.9872 1.43689 12.707 1.09291 12.3538C0.744374 12.0071 0.46827 11.5946 0.280653 11.1404C0.0930365 10.6861 -0.0023487 10.1991 4.39207e-05 9.70763V3.75382C3.55776e-05 2.76091 0.393617 1.80843 1.09463 1.10489C1.79565 0.401356 2.747 0.00406933 3.74042 0H9.69731C10.19 0.000473097 10.6776 0.0986187 11.1321 0.288755C11.5865 0.47889 11.9987 0.757239 12.3448 1.10768C12.6957 1.45021 12.9745 1.8594 13.1648 2.31119C13.3551 2.76297 13.4531 3.24824 13.4531 3.73844ZM30 3.75382V9.70763C29.992 10.6981 29.5959 11.6459 28.8966 12.3477C28.1973 13.0496 27.2506 13.4494 26.2596 13.4614H20.2873C19.2918 13.4554 18.3373 13.0638 17.6244 12.3691C17.2761 12.0191 17.0003 11.6039 16.8128 11.1472C16.6252 10.6905 16.5297 10.2013 16.5316 9.70763V3.75382C16.5295 3.26103 16.6265 2.77285 16.8169 2.31827C17.0072 1.8637 17.2871 1.45202 17.6398 1.10768C17.9859 0.757239 18.3981 0.47889 18.8526 0.288755C19.307 0.0986187 19.7947 0.000473097 20.2873 0H26.2442C27.2378 0.00804159 28.1885 0.406114 28.8911 1.10836C29.5937 1.8106 29.992 2.76073 30 3.75382ZM30 20.2922V26.246C29.992 27.2364 29.5959 28.1843 28.8966 28.8861C28.1973 29.5879 27.2506 29.9878 26.2596 29.9998H20.2873C19.2854 30.01 18.319 29.6291 17.5937 28.9383C17.244 28.5893 16.9672 28.1742 16.7796 27.7173C16.592 27.2603 16.4972 26.7707 16.5008 26.2767V20.3229C16.4988 19.8302 16.5958 19.342 16.7862 18.8874C16.9766 18.4329 17.2564 18.0212 17.609 17.6768C17.9552 17.3264 18.3674 17.0481 18.8218 16.858C19.2763 16.6679 19.7639 16.5697 20.2566 16.5691H26.2134C27.2071 16.5772 28.1577 16.9752 28.8603 17.6775C29.5629 18.3797 29.9612 19.3299 29.9692 20.3229L30 20.2922ZM13.4531 20.3076V26.2614C13.441 27.2544 13.0388 28.2029 12.3333 28.9023C11.6278 29.6017 10.6756 29.9958 9.68192 29.9998H3.74042C3.24865 30.0018 2.76136 29.9065 2.30663 29.7194C1.85191 29.5322 1.43877 29.2569 1.09103 28.9094C0.743302 28.5618 0.467866 28.1489 0.280615 27.6944C0.0933652 27.2399 -0.00199239 26.7529 4.39207e-05 26.2614V20.3076C0.00400934 19.3144 0.398389 18.3627 1.09812 17.6575C1.79785 16.9524 2.74685 16.5505 3.74042 16.5384H9.69731C10.6954 16.5469 11.6507 16.9443 12.3602 17.646C13.0623 18.3539 13.4552 19.3109 13.4531 20.3076Z"
                        fill="#2A424F" />
                </svg>
                <span  class="pointer"  style="margin-left: 10px;">Dashboard</span>
            </a>
        </li>

        <li class="pointer mb3">
            <a class = "w-100 flex"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;
                "onclick="toggleDropdown('dropdown-datawarga')">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31 7.66667C31 11.35 24.2833 14.3333 16 14.3333C7.71667 14.3333 1 11.35 1 7.66667M31 7.66667C31 3.98333 24.2833 1 16 1C7.71667 1 1 3.98333 1 7.66667M31 7.66667V16ZM1 7.66667V16ZM16 22.6667C7.71667 22.6667 1 19.6833 1 16ZM1 16V24.3333C1 28.0167 7.71667 31 16 31M26 21V26ZM26 31V26ZM26 26H31ZM26 26H21Z"
                        fill="#2A424F" />
                    <path
                        d="M31 7.66667C31 11.35 24.2833 14.3333 16 14.3333C7.71667 14.3333 1 11.35 1 7.66667M31 7.66667C31 3.98333 24.2833 1 16 1C7.71667 1 1 3.98333 1 7.66667M31 7.66667V16M1 7.66667V16M1 16C1 19.6833 7.71667 22.6667 16 22.6667M1 16V24.3333C1 28.0167 7.71667 31 16 31M26 21V26M26 26V31M26 26H31M26 26H21"
                        stroke="#2A424F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span style="margin-left: 10px;">Data Warga</span></a>
            <ul id="dropdown-datawarga" class="list-reset dropdown-content ml3">
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a  href="{{ url('/rt') }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Data RT</a>
                </li>
                {{-- <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a class = "w-100 flex" href="{{ url('/kk') }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Data KK</a>
                </li> --}}
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a  href="{{ url('/warga') }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Data Penduduk</a>
                </li>
            </ul>

        </li>

        <li class="pointer mb3">
            <a class = "w-100 flex"href="#Keuangan"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;"
                onclick="toggleDropdown('dropdown-keuangan')">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 12.5007H14" stroke="#2A424F" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M31.997 16.2507C31.997 16.1352 32 15.4512 31.997 15.4032C31.943 14.6517 31.2995 14.0532 30.4895 14.0037C30.437 14.0007 30.3755 14.0007 30.2495 14.0007H26.3465C23.669 14.0007 21.5 16.0152 21.5 18.5007C21.5 20.9862 23.6705 23.0007 26.345 23.0007H30.2495C30.3755 23.0007 30.437 23.0007 30.4895 22.9977C31.2995 22.9482 31.9445 22.3497 31.997 21.5982C32 21.5502 32 20.8662 32 20.7507"
                        stroke="#2A424F" stroke-width="3" stroke-linecap="round" />
                    <path
                        d="M26 20.0007C26.8284 20.0007 27.5 19.3292 27.5 18.5007C27.5 17.6723 26.8284 17.0007 26 17.0007C25.1716 17.0007 24.5 17.6723 24.5 18.5007C24.5 19.3292 25.1716 20.0007 26 20.0007Z"
                        fill="#2A424F" />
                    <path
                        d="M14.6549 32H19.4005C25.3657 32 28.3491 32 30.2014 30.1495C31.4811 28.8738 31.8782 27.0612 32 24.1055M32 14.6321C31.8766 11.6764 31.4811 9.86377 30.2014 8.58802C28.3491 6.73754 25.3657 6.73754 19.4005 6.73754H14.6549C8.68969 6.73754 5.7063 6.73754 3.85394 8.58802C2 10.4369 2 13.4147 2 19.3688C2 25.3228 2 28.3006 3.85394 30.1495C4.8869 31.1821 6.27103 31.6384 8.32745 31.839M8.32745 6.73754L14.2357 2.8266C15.0666 2.28715 16.0365 2 17.0277 2C18.0189 2 18.9888 2.28715 19.8197 2.8266L25.7279 6.73754"
                        stroke="#2A424F" stroke-width="3" stroke-linecap="round" />
                </svg>

                <span style="margin-left: 10px;">Keuangan</span>
            </a>
            <ul id="dropdown-keuangan" class="list-reset dropdown-content ml3">
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a class = "w-100 flex" href="{{ url('/iuran/RT/kasIuranRT') }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Kas</a>
                </li>
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a  href="{{ url('/pengeluaran/RT/pengeluaranRT') }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Iuran</a>
                </li>
            </ul>

        </li>

        <li class="pointer mb3">
            <a class = "w-100 flex" href="{{ auth()->user()->role_id == 1 ? url('saran/RT/saranRT') : (auth()->user()->role_id == 2 ? url('saran/RW/saranRW') : url('/Penduduk/saranPD')) }}"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;">
                <svg width="34" height="34" viewBox="0 0 34 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.3333 11.8335H10.35M17 11.8335H17.0167M23.6667 11.8335H23.6833M12 21.8335H5.33333C4.44928 21.8335 3.60143 21.4823 2.97631 20.8572C2.35119 20.2321 2 19.3842 2 18.5002V5.16683C2 4.28277 2.35119 3.43493 2.97631 2.80981C3.60143 2.18469 4.44928 1.8335 5.33333 1.8335H28.6667C29.5507 1.8335 30.3986 2.18469 31.0237 2.80981C31.6488 3.43493 32 4.28277 32 5.16683V18.5002C32 19.3842 31.6488 20.2321 31.0237 20.8572C30.3986 21.4823 29.5507 21.8335 28.6667 21.8335H20.3333L12 30.1668V21.8335Z"
                        stroke="#2A424F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span style="margin-left: 4px;">Saran Dan Pengaduan</span></a>
        </li>

        <li class="pointer mb3">
            <a class = "w-100 flex" href="#umkm"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;"
                onclick="toggleDropdown('dropdown-umkm')">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.819 16.4996C22.9437 16.4996 23.9334 15.8848 24.4433 14.955L29.8118 5.22271C29.9382 4.99541 30.003 4.73905 29.9999 4.479C29.9968 4.21895 29.9258 3.96422 29.794 3.74001C29.6622 3.51581 29.4742 3.32991 29.2485 3.2007C29.0228 3.07149 28.7672 3.00345 28.5072 3.00332H6.31326L4.90365 0.00415039H0V3.00332H2.99917L8.39769 14.3852L6.37325 18.0442C5.27855 20.0536 6.71815 22.498 8.99752 22.498H26.9926V19.4988H8.99752L10.6471 16.4996H21.819ZM7.73787 6.0025H25.9579L21.819 13.5004H11.2919L7.73787 6.0025ZM8.99752 23.9975C7.34798 23.9975 6.01334 25.3472 6.01334 26.9967C6.01334 28.6463 7.34798 29.9959 8.99752 29.9959C10.6471 29.9959 11.9967 28.6463 11.9967 26.9967C11.9967 25.3472 10.6471 23.9975 8.99752 23.9975ZM23.9934 23.9975C22.3438 23.9975 21.0092 25.3472 21.0092 26.9967C21.0092 28.6463 22.3438 29.9959 23.9934 29.9959C25.6429 29.9959 26.9926 28.6463 26.9926 26.9967C26.9926 25.3472 25.6429 23.9975 23.9934 23.9975Z"
                        fill="#2A424F" />
                </svg>

                <span style="margin-left: 10px;">UMKM</span>
            </a>
            <ul id="dropdown-umkm" class="list-reset dropdown-content ml3">
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a  href="{{ auth()->user()->role_id == 1 ? url('/RT/izinUsahaRT') : (auth()->user()->role_id == 2 ? url('/RW/izinUsahaRW') : url('/Penduduk/izinUsahaPenduduk')) }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Izin
                        Usaha</a>
                </li>
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a  href="{{ auth()->user()->role_id == 1 ? url('/RT/dataUsahaRT') : (auth()->user()->role_id == 2 ? url('/RW/dataUsahaRW') : url('/Penduduk/dataUsahaPenduduk')) }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Data
                        Usaha</a>
                </li>
            </ul>

        </li>

        <li class="pointer mb3">
            <a class = "w-100 flex" href="#kegiatan"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;"
                onclick="toggleDropdown('dropdown-kegiatan')">
                <svg width="37" height="30" viewBox="0 0 37 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.59091 8.40909C6.24131 8.40909 5.90602 8.54797 5.65881 8.79518C5.41161 9.04239 5.27273 9.37767 5.27273 9.72727C5.27273 10.0769 5.41161 10.4122 5.65881 10.6594C5.90602 10.9066 6.24131 11.0455 6.59091 11.0455H25.0455C25.3951 11.0455 25.7303 10.9066 25.9776 10.6594C26.2248 10.4122 26.3636 10.0769 26.3636 9.72727C26.3636 9.37767 26.2248 9.04239 25.9776 8.79518C25.7303 8.54797 25.3951 8.40909 25.0455 8.40909H6.59091ZM6.59091 13.6818C6.24131 13.6818 5.90602 13.8207 5.65881 14.0679C5.41161 14.3151 5.27273 14.6504 5.27273 15V20.2727C5.27273 20.6223 5.41161 20.9576 5.65881 21.2048C5.90602 21.452 6.24131 21.5909 6.59091 21.5909H11.8636C12.2132 21.5909 12.5485 21.452 12.7957 21.2048C13.0429 20.9576 13.1818 20.6223 13.1818 20.2727V15C13.1818 14.6504 13.0429 14.3151 12.7957 14.0679C12.5485 13.8207 12.2132 13.6818 11.8636 13.6818H6.59091ZM7.90909 18.9545V16.3182H10.5455V18.9545H7.90909ZM17.1364 13.6818C16.7868 13.6818 16.4515 13.8207 16.2043 14.0679C15.9571 14.3151 15.8182 14.6504 15.8182 15C15.8182 15.3496 15.9571 15.6849 16.2043 15.9321C16.4515 16.1793 16.7868 16.3182 17.1364 16.3182H25.0455C25.3951 16.3182 25.7303 16.1793 25.9776 15.9321C26.2248 15.6849 26.3636 15.3496 26.3636 15C26.3636 14.6504 26.2248 14.3151 25.9776 14.0679C25.7303 13.8207 25.3951 13.6818 25.0455 13.6818H17.1364ZM17.1364 18.9545C16.7868 18.9545 16.4515 19.0934 16.2043 19.3406C15.9571 19.5878 15.8182 19.9231 15.8182 20.2727C15.8182 20.6223 15.9571 20.9576 16.2043 21.2048C16.4515 21.452 16.7868 21.5909 17.1364 21.5909H25.0455C25.3951 21.5909 25.7303 21.452 25.9776 21.2048C26.2248 20.9576 26.3636 20.6223 26.3636 20.2727C26.3636 19.9231 26.2248 19.5878 25.9776 19.3406C25.7303 19.0934 25.3951 18.9545 25.0455 18.9545H17.1364ZM0 5.77273C0 4.37431 0.555518 3.03317 1.54435 2.04435C2.53317 1.05552 3.87431 0.5 5.27273 0.5H26.3636C27.7621 0.5 29.1032 1.05552 30.092 2.04435C31.0808 3.03317 31.6364 4.37431 31.6364 5.77273C33.0348 5.77273 34.3759 6.32824 35.3647 7.31707C36.3536 8.3059 36.9091 9.64704 36.9091 11.0455V22.9091C36.9091 24.6571 36.2147 26.3335 34.9787 27.5696C33.7426 28.8056 32.0662 29.5 30.3182 29.5H6.59091C4.84289 29.5 3.16647 28.8056 1.93043 27.5696C0.694397 26.3335 0 24.6571 0 22.9091V5.77273ZM30.3182 22.9091C29.9686 22.9091 29.6333 22.7702 29.3861 22.523C29.1389 22.2758 29 21.9405 29 21.5909V5.77273C29 5.07352 28.7222 4.40295 28.2278 3.90854C27.7334 3.41412 27.0628 3.13636 26.3636 3.13636H5.27273C4.57352 3.13636 3.90295 3.41412 3.40854 3.90854C2.91412 4.40295 2.63636 5.07352 2.63636 5.77273V22.9091C2.63636 23.9579 3.053 24.9638 3.79462 25.7054C4.53624 26.447 5.5421 26.8636 6.59091 26.8636H30.3182C31.367 26.8636 32.3728 26.447 33.1145 25.7054C33.8561 24.9638 34.2727 23.9579 34.2727 22.9091V11.0455C34.2727 10.3462 33.995 9.67568 33.5006 9.18126C33.0061 8.68685 32.3356 8.40909 31.6364 8.40909V21.5909C31.6364 21.9405 31.4975 22.2758 31.2503 22.523C31.0031 22.7702 30.6678 22.9091 30.3182 22.9091Z"
                        fill="#2A424F" />
                </svg>

                <span style="margin-left: 10px; ">Info Kegiatan</span>
            </a>
            <ul id="dropdown-kegiatan" class="list-reset dropdown-content ml3">
                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a href="{{ auth()->user()->role_id == 1 ? url('usulan/RT/usulanKegiatanRT') : (auth()->user()->role_id == 2 ? url('usulan/RW/usulanKegiatanRW') : url('usulan/Penduduk/usulanKegiatanPD')) }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">
                        Usulan Kegiatan
                    </a>
                </li>

                <li class = "w-100  flex h-fit items-center">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.444114 0.967783C0.303332 1.10828 0.191641 1.27516 0.115433 1.45887C0.0392265 1.64258 0 1.83952 0 2.03842C0 2.23731 0.0392265 2.43425 0.115433 2.61796C0.191641 2.80168 0.303332 2.96856 0.444114 3.10905L6.33639 9.00133L0.444114 14.8936C0.160165 15.1776 0.000643035 15.5627 0.000643035 15.9642C0.000643035 16.3658 0.160165 16.7509 0.444114 17.0349C0.728064 17.3188 1.11318 17.4783 1.51475 17.4783C1.91631 17.4783 2.30143 17.3188 2.58538 17.0349L9.55589 10.0644C9.69667 9.92388 9.80836 9.757 9.88457 9.57328C9.96078 9.38957 10 9.19263 10 8.99374C10 8.79484 9.96078 8.5979 9.88457 8.41419C9.80836 8.23048 9.69667 8.0636 9.55589 7.9231L2.58538 0.952597C2.0083 0.375518 1.03638 0.375518 0.444114 0.967783Z"
                            fill="#2A424F" />
                    </svg>
                    <a   href="{{ auth()->user()->role_id == 1 ? url('destinasi/RT/destinasiwisataRT') : (auth()->user()->role_id == 2 ? url('destinasi/RW/destinasiwisataRW') : url('usulan/PD/usulanKegiatanPD')) }}"
                        style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 400; font-size: 18px; margin-left: 7px;">Pemilihan
                        Destinasi</a>
                </li>



            </ul>
        <li class="pointer" style="position: absolute;
    bottom: 30px;
    left: 30px;"><a href= "{{ url('/') }}"class = "w-100 flex"
                href="#logout"
                style="color: #2A424F; text-decoration: none; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 24px;">
                <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30.2353 16.1176H13.4706M26.7059 21.4118L32 16.1176L26.7059 10.8235M17.8824 7.29412V5.52941C17.8824 4.59335 17.5105 3.69563 16.8486 3.03374C16.1867 2.37185 15.289 2 14.3529 2H5.52941C4.59335 2 3.69563 2.37185 3.03374 3.03374C2.37185 3.69563 2 4.59335 2 5.52941V26.7059C2 27.6419 2.37185 28.5397 3.03374 29.2016C3.69563 29.8634 4.59335 30.2353 5.52941 30.2353H14.3529C15.289 30.2353 16.1867 29.8634 16.8486 29.2016C17.5105 28.5397 17.8824 27.6419 17.8824 26.7059V24.9412"
                        stroke="#2A424F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span style="margin-left: 4px;">Logout</span>
            </a>
        </li>
        </li>


</div>
