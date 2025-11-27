<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_name }} | @yield('title')</title>

    <link rel="icon" href="{{ asset('storage/app/public/' . $settings->favicon) }}" type="image/png" />

    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    screens: {
                        'xs': '375px',
                    },
                    colors: {
                        primary: {
                             DEFAULT: '#0052FF',
                           '50': '#e5efff',
                           '100': '#cce0ff',
                            '200': '#99c2ff',
                            '300': '#66a3ff',
                            '400': '#3385ff',
                            '500': '#0052FF',
                            '600': '#0048e6',
                            '700': '#003dbf',
                            '800': '#003399',
                            '900': '#002266',
                        },
                        secondary: {
                            DEFAULT: '#4A9D7F',
                            '50': '#E8F5F0',
                            '100': '#D1EBE1',
                            '200': '#A3D7C3',
                            '300': '#76C3A5',
                            '400': '#4A9D7F',
                            '500': '#3C7F65',
                            '600': '#2E614D',
                            '700': '#214435',
                            '800': '#13261E',
                            '900': '#040906',
                        },
                        tertiary: {
                            DEFAULT: '#627EEA', // Ethereum blue
                            '50': '#EDF0FC',
                            '100': '#DBE1F9',
                            '200': '#B7C3F3',
                            '300': '#93A6ED',
                            '400': '#627EEA',
                            '500': '#3053E4',
                            '600': '#173BCE',
                            '700': '#122FA8',
                            '800': '#0D2382',
                            '900': '#08165C',
                        },
                        accent: {
                            DEFAULT: '#F0B90B', // Binance yellow
                            '50': '#FEF9E6',
                            '100': '#FDF3CC',
                            '200': '#FAE699',
                            '300': '#F7DA66',
                            '400': '#F0B90B',
                            '500': '#C39508',
                            '600': '#967106',
                            '700': '#694D04',
                            '800': '#3C2A02',
                            '900': '#0F0A01',
                        },
                        danger: {
                            DEFAULT: '#FF6B6B',
                            '50': '#FFF0F0',
                            '100': '#FFE0E0',
                            '200': '#FFC2C2',
                            '300': '#FFA3A3',
                            '400': '#FF6B6B',
                            '500': '#FF3838',
                            '600': '#FF0505',
                            '700': '#D10000',
                            '800': '#9E0000',
                            '900': '#6B0000',
                        },
                        purple: {
                            DEFAULT: '#9164CC',
                            '50': '#F3EDFA',
                            '100': '#E7DCF5',
                            '200': '#CFB9EB',
                            '300': '#B796E0',
                            '400': '#9164CC',
                            '500': '#7642BE',
                            '600': '#5D33A0',
                            '700': '#44267C',
                            '800': '#2C1958',
                            '900': '#140B34',
                        },
                        dark: {
                            DEFAULT: '#1A1F2C',
                            '50': '#1E2430',
                            '100': '#2A303C',
                            '200': '#343D4F',
                            '300': '#3E4A62',
                        },
                        light: {
                            DEFAULT: '#F8FAFC',
                            '50': '#FFFFFF',
                            '100': '#F1F5F9',
                            '200': '#E2E8F0',
                            '300': '#CBD5E1',
                        },
                    },
                    animation: {
                        'in': 'fadeIn 0.3s ease-in-out',
                        'slide-in-top': 'slideInFromTop 0.3s ease-in-out',
                        'slide-in-bottom': 'slideInFromBottom 0.3s ease-in-out',
                    },
                    keyframes: {
                        fadeIn: {
                            'from': { opacity: '0' },
                            'to': { opacity: '1' }
                        },
                        slideInFromTop: {
                            'from': { transform: 'translateY(-20px)', opacity: '0' },
                            'to': { transform: 'translateY(0)', opacity: '1' }
                        },
                        slideInFromBottom: {
                            'from': { transform: 'translateY(20px)', opacity: '0' },
                            'to': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
 <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Lucide Icons -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js"></script>

    <!-- Additional libraries that are still needed -->
    <link rel="stylesheet" href="{{ asset('dash2/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <script src="{{ asset('dash2/libs/sweetalert/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <!-- Select2 for dropdowns -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link rel="stylesheet" href="https://jcsoci.github.io/FontAwesome6Pro/css/all.min.css" >

    <!-- Custom Styles -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInFromTop {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes slideInFromBottom {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        .slide-in-from-top {
            animation: slideInFromTop 0.3s ease-in-out;
        }
        .slide-in-from-bottom {
            animation: slideInFromBottom 0.3s ease-in-out;
        }

        /* DataTables responsive fixes */
        .dataTables_wrapper {
            overflow-x: auto;
            width: 100%;
        }

        /* Select2 dropdown fixes */
        .select2-container {
            width: 100% !important;
        }

        /* Light and Dark mode styles */
        .dark {
            color-scheme: dark;
        }

        /* Dark mode styles for DataTables */
        .dark .dataTables_wrapper .dataTable {
            background-color: #1E2430;
            color: #fff;
        }
        .dark .dataTables_wrapper .dataTable th,
        .dark .dataTables_wrapper .dataTable td {
            border-color: #2A303C;
        }
        .dark .dataTables_wrapper .dataTables_info,
        .dark .dataTables_wrapper .dataTables_paginate {
            color: #CBD5E1 !important;
        }

        /* Light mode styles for Select2 */
        .light .select2-container--default .select2-selection--single {
            background-color: #F8FAFC;
            border-color: #CBD5E1;
        }

        /* Dark mode styles for Select2 */
        .dark .select2-container--default .select2-selection--single {
            background-color: #1E2430;
            border-color: #2A303C;
            color: #F8FAFC;
        }
        .dark .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #F8FAFC;
        }
    </style>
    @livewireStyles
    @yield('styles')
</head>

<body class="dark:bg-dark bg-light-100 dark:text-white text-dark transition-colors duration-200">
    <script>
        {!! $settings->tawk_to !!}
    </script>

    <!-- Application container -->
    <div class="flex flex-col md:flex-row min-h-screen relative">
        @include('user.sidebar')

        <!-- Main Content -->
    <div class="w-full flex flex-col">
    <!-- Top Menu -->
    @include('user.topmenu')

    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
        @yield('content')
    </div>
    
@if(Auth::user()->notification)
<style>
    @keyframes fade-in-down {
      from {
        opacity: 0;
        transform: translateY(-10%);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-down {
      animation: fade-in-down 0.3s ease-out forwards;
    }
  </style>
    <!-- Auto-Show Modal -->
  <div class="fixed inset-0 z-50 bg-black/50 flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 animate-fade-in-down">
      <div class="text-center">
        

        <div class="mt-4">
          <div class="w-12 h-12 mx-auto rounded-full bg-green-100 flex items-center justify-center">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 13l4 4L19 7"/>
            </svg>
          </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">🎉 Notification Alert</h2>
        <p class="text-gray-600 mt-2">
          {{Auth::user()->notification}}
        </p>
        <div class="mt-6">
          <!--<button disabled class="bg-gray-300 cursor-not-allowed text-white font-medium py-2 px-4 rounded-lg w-full">-->
          <!--  Please wait...-->
          <!--</button>-->
        </div>
      </div>
    </div>
  </div>
@endif

    <!-- Footer -->
    <div class="py-4 border-t dark:border-dark-100 border-light-200 text-center md:text-left hidden md:flex md:justify-between md:items-center px-4 md:px-6">
        <div>
            <p class="text-sm dark:text-gray-400 text-gray-600">All Rights Reserved &copy; {{ $settings->site_name }} {{ date('Y') }}</p>
        </div>
    </div>
</div>
    </div>

    <!-- Mobile Navigation -->
    @include('user.mobile-navigation')

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('dash2/libs/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>
<script>
        lucide.createIcons();
    </script>
    <!-- Theme Management Script -->
    <script>
        // Theme initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Check for saved theme preference or use system preference
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const savedTheme = localStorage.getItem('darkMode');

            if (savedTheme === 'true' || (savedTheme === null && prefersDark)) {
                document.documentElement.classList.add('dark');
            } else if (savedTheme === 'false') {
                document.documentElement.classList.remove('dark');
            }

            // Update theme switcher icon
            updateThemeIcon();
        });

        // Function to toggle theme
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('darkMode', 'false');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('darkMode', 'true');
            }

            // Update the icon
            updateThemeIcon();
        }

        // Update theme icon based on current theme
        function updateThemeIcon() {
            const isDark = document.documentElement.classList.contains('dark');
            const sunIcon = document.querySelector('[data-lucide="sun"]');
            const moonIcon = document.querySelector('[data-lucide="moon"]');

            if (sunIcon && moonIcon) {
                if (isDark) {
                    sunIcon.style.display = 'block';
                    moonIcon.style.display = 'none';
                } else {
                    sunIcon.style.display = 'none';
                    moonIcon.style.display = 'block';
                }
            }
        }
    </script>

    <!-- Initialize Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();

            // Mobile menu toggle functionality
            const menuToggles = document.querySelectorAll('[data-action="sidenav-pin"]');
            const sidebar = document.getElementById('sidenav-main');

            if (menuToggles.length > 0 && sidebar) {
                menuToggles.forEach(toggle => {
                    toggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        sidebar.classList.toggle('active');
                        sidebar.classList.toggle('hidden');
                        sidebar.classList.toggle('md:block');
                    });
                });

                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(e) {
                    const isMobile = window.innerWidth < 768;
                    const clickedInside = sidebar.contains(e.target);
                    const clickedToggle = Array.from(menuToggles).some(toggle => toggle.contains(e.target));

                    if (isMobile && !clickedInside && !clickedToggle && sidebar.classList.contains('active')) {
                        sidebar.classList.remove('active');
                        sidebar.classList.add('hidden');
                        sidebar.classList.add('md:block');
                    }
                });
            }

            // Initialize Select2
            if ($.fn.select2) {
                $('.select2').select2();
            }

            // Initialize DataTables responsively
            if ($.fn.DataTable) {
                $('.datatable').DataTable({
                    responsive: true,
                    dom: '<"top"fl>rt<"bottom"ip>',
                    language: {
                        search: "",
                        searchPlaceholder: "Search..."
                    }
                });
            }
        });
    </script>

   @include('layouts.livechat')

   

    @livewireScripts
    @yield('scripts')
</body>
</html>
