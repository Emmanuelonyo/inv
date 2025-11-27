@extends('layouts.dash')
@section('title', $title)
@section('content')

<!-- Exchange-style top header with balance cards -->
<div class="mb-4">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-bold text-dark dark:text-white flex items-center">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="currentColor" fill-opacity="0.25"/>
                <path d="M17.2339 15.9099C17.7373 15.734 18.2644 15.6412 18.7958 15.6392C21.3686 15.6392 22.5 17.5816 22.5 19.0851C22.5 20.5972 21.667 22 18.7958 22H14.7642C13.0625 22 11.8473 21.3377 11.385 20.1798" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.2789 15.0192L12.5 21.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.82069 15.9098C6.31735 15.734 5.79021 15.6412 5.25883 15.6392C2.68599 15.6392 1.5 17.5816 1.5 19.0851C1.5 20.5972 2.38039 22 5.25158 22H9.2832C10.9849 22 12.2002 21.3377 12.6624 20.1798" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Withdrawals</span>
        </h1>
        <div class="hidden md:flex space-x-2">
            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-light-100 dark:bg-dark-100 text-dark dark:text-white hover:bg-light-200 dark:hover:bg-dark-200 transition-colors">
                Withdrawal History
            </button>
            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-primary text-white hover:bg-primary-600 transition-colors">
                New Request
            </button>
        </div>
    </div>

    <!-- Balance Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Available Balance</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-primary-50 dark:bg-primary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M18.04 13.55C17.62 13.96 17.38 14.55 17.44 15.18C17.53 16.26 18.52 17.05 19.6 17.05H21.5V18.24C21.5 20.31 19.81 22 17.74 22H6.26C4.19 22 2.5 20.31 2.5 18.24V11.51C2.5 9.44 4.19 7.75 6.26 7.75H17.74C19.81 7.75 21.5 9.44 21.5 11.51V12.95H19.48C18.92 12.95 18.41 13.17 18.04 13.55Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M14.85 4.97V7.75H6.26C4.19 7.75 2.5 9.44 2.5 11.51V6.44C2.5 5.08 3.6 3.97 4.97 3.97H13.88C14.43 3.97 14.85 4.39 14.85 4.97Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M22.5588 13.9702V16.0302C22.5588 16.5802 22.1188 17.0302 21.5588 17.0502H19.5988C18.5188 17.0502 17.5288 16.2602 17.4388 15.1802C17.3788 14.5502 17.6188 13.9602 18.0388 13.5502C18.4088 13.1702 18.9188 12.9502 19.4788 12.9502H21.5588C22.1188 12.9702 22.5588 13.4202 22.5588 13.9702Z" fill="currentColor"/>
                        <path d="M7 12H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Total Withdrawn</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">{{ $settings->currency }}{{ number_format(Auth::user()->withdrawals ?? 0, 2, '.', ',') }}</p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51 10.9402 9.51 10.0202C9.51 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 7.5V16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 3V7H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 2L17 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Pending Withdrawals</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">{{ $settings->currency }}{{ number_format(Auth::user()->pending_withdrawals ?? 0, 2, '.', ',') }}</p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-tertiary-50 dark:bg-tertiary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-tertiary-600 dark:text-tertiary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M15.71 15.93L12.61 14.13C12.07 13.83 11.63 13.12 11.63 12.49V7.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Last Withdrawal</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">{{ $settings->currency }}{{ number_format(Auth::user()->last_withdrawal ?? 0, 2, '.', ',') }}</p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M16.44 8.8999C20.04 9.2099 21.51 11.0599 21.51 15.1099V15.2399C21.51 19.7099 19.72 21.4999 15.25 21.4999H8.73998C4.26998 21.4999 2.47998 19.7099 2.47998 15.2399V15.1099C2.47998 11.0899 3.92998 9.2399 7.46998 8.9099" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 2V14.88" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.35 12.6499L12 15.9999L8.65002 12.6499" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alert Messages -->
<x-danger-alert />
<x-success-alert />

<!-- Withdrawal Status Strip -->
@if ($settings->enable_with == 'false')
<div class="mb-6 bg-danger-50 dark:bg-danger-900/20 border border-danger-100 dark:border-danger-800/30 text-danger-800 dark:text-danger-300 px-4 py-3 rounded-lg flex items-center">
    <svg class="w-5 h-5 mr-2 flex-shrink-0" viewBox="0 0 24 24" fill="none">
        <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
        <path d="M12 8V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M11.9946 16H12.0036" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span>Withdrawals are currently disabled. Please check back later.</span>
</div>
@endif

<!-- Exchange-style withdrawal methods table -->
<div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
    <!-- Table Header -->
    <div class="p-5 border-b border-light-200 dark:border-dark-200/50">
        <h2 class="text-base font-bold text-dark dark:text-white">Select Withdrawal Method</h2>
    </div>
    
    <!-- Filter/Search Bar -->
    <div class="p-4 bg-light-50 dark:bg-dark-100 border-b border-light-200 dark:border-dark-200/50 flex flex-wrap gap-3 items-center justify-between">
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-primary text-white hover:bg-primary-600 transition-colors">
                All Methods
            </button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-light-100 dark:bg-dark-200 text-dark-300 dark:text-light-300 hover:bg-light-200 dark:hover:bg-dark-300 transition-colors">
                Crypto
            </button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-light-100 dark:bg-dark-200 text-dark-300 dark:text-light-300 hover:bg-light-200 dark:hover:bg-dark-300 transition-colors">
                Bank Transfer
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="Search payment methods..." class="w-full md:w-60 pl-9 pr-4 py-1.5 text-sm rounded-lg bg-white dark:bg-dark-50 border border-light-200 dark:border-dark-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-dark dark:text-white">
            <svg class="w-4 h-4 text-dark-300 dark:text-light-300 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24" fill="none">
                <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 22L20 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <!-- Methods Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-light-50 dark:bg-dark-100 text-dark-300 dark:text-light-300 text-xs uppercase">
                    <th class="px-6 py-3 text-left font-medium">Method</th>
                    <th class="px-6 py-3 text-right font-medium">Limits</th>
                    <th class="px-6 py-3 text-right font-medium">Fee</th>
                    <th class="px-6 py-3 text-right font-medium">Processing Time</th>
                    <th class="px-6 py-3 text-right font-medium">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-light-200 dark:divide-dark-200/50">
                @foreach ($wmethods as $method)
                <tr class="hover:bg-light-50 dark:hover:bg-dark-100/50 transition-colors text-sm">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-lg bg-light-100 dark:bg-dark-200 p-1.5 mr-3 flex items-center justify-center">
                                <img src="{{ asset('dash2/img/Wallet.svg.png') }}" alt="{{ $method->name }}" class="h-full w-full object-contain">
                            </div>
                            <div>
                                <p class="font-medium text-dark dark:text-white">{{ $method->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="text-dark dark:text-white">
                            <div class="text-xs text-dark-300 dark:text-light-300">Min: <span class="font-medium text-dark dark:text-white">{{ $settings->currency }}{{ number_format($method->minimum) }}</span></div>
                            <div class="text-xs text-dark-300 dark:text-light-300">Max: <span class="font-medium text-dark dark:text-white">{{ $settings->currency }}{{ number_format($method->maximum) }}</span></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <span class="px-2 py-1 text-xs rounded-md {{ $method->charges_type == 'percentage' ? 'bg-secondary-50 dark:bg-secondary-900/30 text-secondary-600 dark:text-secondary-300' : 'bg-tertiary-50 dark:bg-tertiary-900/30 text-tertiary-600 dark:text-tertiary-300' }}">
                            @if ($method->charges_type == 'percentage')
                                {{ $method->charges_amount }}%
                            @else
                                {{ $settings->currency }}{{ $method->charges_amount }}
                            @endif
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <span class="text-dark dark:text-white">{{ $method->duration }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        @if ($settings->enable_with == 'false')
                            <button type="button" class="px-3 py-1.5 text-xs font-medium rounded-md bg-light-100 dark:bg-dark-200 text-dark-300 dark:text-light-300 opacity-60 cursor-not-allowed">
                                Unavailable
                            </button>
                        @else
                            <form action='{{ route('withdrawamount') }}' method="POST" class="inline-block">
                                @csrf
                                <input type="hidden" value="{{ $method->name }}" name="method">
                                <button type="submit" class="px-3 py-1.5 text-xs font-medium rounded-md bg-primary text-white hover:bg-primary-600 transition-colors">
                                    Withdraw
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Exchange-style Information Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    <!-- Withdrawal Process -->
    <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
        <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
            <svg class="w-5 h-5 text-primary mr-2" viewBox="0 0 24 24" fill="none">
                <path d="M10.75 2.44995C11.44 1.85995 12.57 1.85995 13.27 2.44995L14.85 3.81001C15.15 4.07001 15.71 4.28002 16.11 4.28002H17.81C18.87 4.28002 19.74 5.14996 19.74 6.20996V7.91003C19.74 8.30003 19.95 8.87001 20.21 9.17001L21.57 10.75C22.16 11.44 22.16 12.57 21.57 13.27L20.21 14.85C19.95 15.15 19.74 15.71 19.74 16.11V17.8101C19.74 18.8701 18.87 19.74 17.81 19.74H16.11C15.72 19.74 15.15 19.95 14.85 20.21L13.27 21.5699C12.58 22.1599 11.45 22.1599 10.75 21.5699L9.17004 20.21C8.87004 19.95 8.31004 19.74 7.91004 19.74H6.18C5.12 19.74 4.25 18.8701 4.25 17.8101V16.1C4.25 15.71 4.04 15.15 3.79 14.85L2.44 13.26C1.86 12.57 1.86 11.45 2.44 10.76L3.79 9.17001C4.04 8.87001 4.25 8.31003 4.25 7.91003V6.20996C4.25 5.14996 5.12 4.28002 6.18 4.28002H7.91004C8.30004 4.28002 8.87004 4.07001 9.17004 3.81001L10.75 2.44995Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M10.58 16.46L7.34998 13.23C6.94998 12.83 6.94998 12.16 7.34998 11.76C7.74998 11.36 8.41998 11.36 8.81998 11.76L10.58 13.52L15.18 8.91998C15.58 8.51998 16.25 8.51998 16.65 8.91998C17.05 9.31998 17.05 9.98998 16.65 10.39L10.58 16.46Z" fill="currentColor"/>
            </svg>
            <h3 class="text-base font-medium text-dark dark:text-white">Withdrawal Process</h3>
        </div>
        <div class="p-5">
            <ol class="relative border-l border-light-200 dark:border-dark-200 ml-3 space-y-6">
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">1</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Select Method</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Choose your preferred withdrawal method from the available options.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">2</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Enter Details</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Provide your withdrawal amount and destination details securely.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">3</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Confirmation</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Review and confirm your withdrawal request details.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">4</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Processing</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Your request will be processed according to the method's timeframe.</p>
                </li>
            </ol>
        </div>
    </div>
    
    <!-- Security Tips -->
<div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
    <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
        <svg class="w-5 h-5 text-accent mr-2" viewBox="0 0 24 24" fill="none">
            <path d="M10.49 2.23006L5.50003 4.10004C4.35003 4.53004 3.41003 5.89004 3.41003 7.12004V14.55C3.41003 15.73 4.19005 17.28 5.14005 17.99L9.44003 21.2C10.85 22.26 13.17 22.26 14.58 21.2L18.88 17.99C19.83 17.28 20.61 15.73 20.61 14.55V7.12004C20.61 5.89004 19.67 4.53004 18.52 4.10004L13.53 2.23006C12.68 1.92006 11.32 1.92006 10.49 2.23006Z" fill="currentColor" fill-opacity="0.2"/>
            <path d="M12 12.5C11.59 12.5 11.25 12.16 11.25 11.75V8.75C11.25 8.34 11.59 8 12 8C12.41 8 12.75 8.34 12.75 8.75V11.75C12.75 12.16 12.41 12.5 12 12.5Z" fill="currentColor"/>
            <path d="M12 16C11.44 16 11 15.55 11 15C11 14.45 11.45 14 12 14C12.55 14 13 14.45 13 15C13 15.55 12.56 16 12 16Z" fill="currentColor"/>
        </svg>
        <h3 class="text-base font-medium text-dark dark:text-white">Security Tips</h3>
    </div>
    <div class="p-5">
        <ul class="space-y-3">
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">Always verify withdrawal addresses before confirming transactions.</p>
            </li>
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">Enable two-factor authentication (2FA) for enhanced account security.</p>
            </li>
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">For crypto withdrawals, confirm network type to avoid loss of funds.</p>
            </li>
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">Start with small test withdrawals when using a new withdrawal address.</p>
            </li>
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">Never share your account credentials or verification codes with anyone.</p>
            </li>
            <li class="flex">
                <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                    <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="text-xs text-dark-300 dark:text-light-300">Be cautious of phishing attempts asking for your withdrawal information.</p>
            </li>
        </ul>
        
        <div class="mt-5 pt-4 border-t border-light-200 dark:border-dark-200/50">
            <div class="flex items-center p-3 rounded-lg bg-tertiary-50 dark:bg-tertiary-900/20 border border-tertiary-100 dark:border-tertiary-800/30">
                <svg class="w-5 h-5 text-tertiary-600 dark:text-tertiary-400 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                    <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                    <path d="M12 6V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 16H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p class="text-xs text-tertiary-700 dark:text-tertiary-300">
                    Need help with your withdrawal? Contact our support team via the help center.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Withdrawal Policy -->
<div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
    <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
        <svg class="w-5 h-5 text-secondary mr-2" viewBox="0 0 24 24" fill="none">
            <path d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z" fill="currentColor" fill-opacity="0.2"/>
            <path d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 13H12" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 17H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h3 class="text-base font-medium text-dark dark:text-white">Withdrawal Policy</h3>
    </div>
    <div class="p-5">
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                            <path d="M15.71 15.93L12.61 14.13C12.07 13.83 11.63 13.12 11.63 12.49V7.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-dark dark:text-white">Processing Time</h4>
                        <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Varies by method</p>
                    </div>
                </div>
                <div>
                    <span class="text-xs text-dark dark:text-white font-medium">24-72 hours</span>
                </div>
            </div>
            
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                            <path d="M8 13H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 17H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 9H12" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-dark dark:text-white">Minimum Withdrawal</h4>
                        <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Varies by method</p>
                    </div>
                </div>
                <div>
                    <span class="text-xs text-dark dark:text-white font-medium">See method details</span>
                </div>
            </div>
            
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                            <path d="M15.5 12H15.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 12H11.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 12H7.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-dark dark:text-white">Daily Limit</h4>
                        <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Maximum per day</p>
                    </div>
                </div>
                <div>
                    <span class="text-xs text-dark dark:text-white font-medium">
                        {{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}
                    </span>
                </div>
            </div>
            
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                            <path d="M8 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 9.08997H20.5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" fill="currentColor" fill-opacity="0.2"/>
                            <path d="M15.6947 13.7H15.7037" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.6947 16.7H15.7037" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9955 13.7H12.0045" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9955 16.7H12.0045" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.29431 13.7H8.30329" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.29431 16.7H8.30329" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-dark dark:text-white">Processing Days</h4>
                        <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Business days only</p>
                    </div>
                </div>
                <div>
                    <span class="text-xs text-dark dark:text-white font-medium">Monday-Friday</span>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <a href="#" class="text-xs text-primary dark:text-primary-400 font-medium flex items-center hover:underline">
                <span>View full withdrawal policy</span>
                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" fill="none">
                    <path d="M8.91003 19.9201L15.43 13.4001C16.2 12.6301 16.2 11.3701 15.43 10.6001L8.91003 4.08008" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
</div>

<!-- Withdrawal Disabled Modal (Mobile Style) -->
<div id="withdrawal-disabled-modal" class="hidden fixed inset-0 z-50">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-dark/50 dark:bg-dark/80" onclick="closeWithdrawalDisabledModal()"></div>
    
    <!-- Modal Content -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white dark:bg-dark-50 rounded-2xl w-[90%] max-w-md overflow-hidden">
        <div class="p-6 text-center">
            <div class="mb-4 flex justify-center">
                <div class="w-16 h-16 rounded-full bg-danger-100 dark:bg-danger-900/30 flex items-center justify-center">
                    <svg class="w-8 h-8 text-danger-600 dark:text-danger-400" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M12 8V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9946 16H12.0036" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            
            <h3 class="text-xl font-bold text-dark dark:text-white mb-2">Withdrawals Disabled</h3>
            <p class="text-dark-300 dark:text-light-300 mb-6">
                Withdrawals are currently disabled. Our team is working to restore this functionality as soon as possible.
            </p>
            
            <button onclick="closeWithdrawalDisabledModal()" class="w-full py-3 rounded-xl bg-secondary text-white font-medium">
                Got it
            </button>
        </div>
    </div>
</div>

<!-- JavaScript for Mobile Interactions -->
<script>
    // Method Details Sheet
    function showMethodDetails() {
        document.getElementById('method-details-sheet').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('sheet-content').classList.remove('translate-y-full');
        }, 10);
    }
    
    function closeMethodDetails() {
        const sheetContent = document.getElementById('sheet-content');
        sheetContent.classList.add('translate-y-full');
        setTimeout(() => {
            document.getElementById('method-details-sheet').classList.add('hidden');
        }, 300);
    }
    
    // Withdrawal Disabled Modal
    function showWithdrawalDisabledModal() {
        document.getElementById('withdrawal-disabled-modal').classList.remove('hidden');
    }
    
    function closeWithdrawalDisabledModal() {
        document.getElementById('withdrawal-disabled-modal').classList.add('hidden');
    }
    
    // For demo purposes - attach click event to mobile withdrawal methods
    document.addEventListener('DOMContentLoaded', function() {
        const methodCards = document.querySelectorAll('.method-card-mobile');
        methodCards.forEach(card => {
            card.addEventListener('click', showMethodDetails);
        });
        
        // If withdrawals are disabled, show the appropriate modal
        @if ($settings->enable_with == 'false')
        const withdrawButtons = document.querySelectorAll('.withdraw-button-mobile');
        withdrawButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                showWithdrawalDisabledModal();
            });
        });
        @endif
    });
    
    // Handle scroll behavior for the sticky header
    window.addEventListener('scroll', function() {
        const stickyHeader = document.querySelector('.sticky');
        if (window.scrollY > 10) {
            stickyHeader.classList.add('shadow-md');
        } else {
            stickyHeader.classList.remove('shadow-md');
        }
    });
</script>

<!-- CSS for Enhanced Mobile Experience -->
<style>
    /* Hide scrollbar for filter tabs */
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    
    .scrollbar-hide::-webkit-scrollbar {
        display: none;  /* Chrome, Safari, Opera */
    }
    
    /* Prevent background scrolling when modal/sheet is open */
    body.modal-open {
        overflow: hidden;
    }
    
    /* Smooth transitions for bottom sheet */
    #sheet-content {
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    /* Safe area padding for devices with notches */
    @supports (padding-bottom: env(safe-area-inset-bottom)) {
        .fixed.bottom-0 {
            padding-bottom: env(safe-area-inset-bottom);
        }
    }
    
    /* Pull to refresh indicator for mobile */
    .pull-to-refresh {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .pull-to-refresh-spinner {
        width: 24px;
        height: 24px;
        border: 2px solid rgba(var(--color-primary), 0.3);
        border-top-color: var(--color-primary);
        border-radius: 50%;
        animation: spinner 0.8s linear infinite;
    }
    
    @keyframes spinner {
        to {transform: rotate(360deg);}
    }
</style>
@endsection