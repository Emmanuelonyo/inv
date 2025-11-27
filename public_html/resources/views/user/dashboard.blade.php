@extends('layouts.dash')
@section('title', $title)
@section('content')
<!-- Alert Messages -->
<x-danger-alert />
<x-success-alert />

<!-- Announcements (if enabled) -->
@if ($settings->enable_annoc == 'on' and !empty($settings->newupdate))
<div class="mb-6 dark:bg-dark-50 bg-light-200 border-l-4 border-tertiary p-4 rounded-lg animate-in slide-in-from-top">
    <div class="flex">
        <div class="flex-shrink-0">
            <i data-lucide="info" class="h-5 w-5 text-tertiary"></i>
        </div>
        <div class="ml-3">
            <p class="text-sm dark:text-gray-300 text-gray-700">{{ $settings->newupdate }}</p>
        </div>
        <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-auto bg-transparent dark:text-gray-400 text-gray-600 hover:text-dark dark:hover:text-white">
            <i data-lucide="x" class="h-4 w-4"></i>
        </button>
    </div>
</div>
@endif

<!-- Header with gradient background and stats overview -->
<div class="relative mb-6 overflow-hidden rounded-xl dark:bg-gradient-to-r dark:from-dark-50 dark:via-dark-100 dark:to-dark-200 bg-gradient-to-r from-light-200 via-light-300 to-light-200 p-4 sm:p-6">
    <!-- Background Grid Pattern -->
    <div class="absolute inset-0 opacity-10">
        <svg viewBox="0 0 400 400" class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 0 10 L 40 10 M 10 0 L 10 40" stroke="currentColor" stroke-width="0.5" fill="none"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"></rect>
        </svg>
    </div>
    
    <!-- Content Area -->
    <div class="relative z-10">
        <!-- Top Section with Greeting and Quick Action -->
        <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-xl sm:text-2xl font-bold dark:text-white text-dark">Welcome back, {{ Auth::user()->name }}!</h1>
                <p class="text-primary text-sm">{{ now()->format('l, F j, Y') }}</p>
            </div>
            <div class="mt-4 flex flex-wrap items-center gap-3 sm:mt-0">
                <a href="{{ route('deposits') }}" class="flex items-center gap-2 rounded-md bg-secondary px-3 py-2 text-sm font-medium text-white hover:bg-secondary/90 transition-colors w-auto sm:w-auto shadow-lg">
                    <i data-lucide="plus" class="h-4 w-4"></i>
                    <span>Quick Deposit</span>
                </a>
            </div>
        </div>
        
        <!-- Balance Cards Section - Split Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-4 items-stretch">
            <!-- Primary Balance Card - Left Side (2 columns on large screens) -->
            <div class="lg:col-span-2 h-full rounded-xl dark:bg-gradient-to-r dark:from-dark-50 dark:to-dark-100 bg-gradient-to-r from-light-100 to-light-200 backdrop-blur-sm p-4 sm:p-5 transition-all duration-300 shadow-lg relative group balance-card" id="balanceCard">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-base sm:text-lg font-bold dark:text-white text-dark flex items-center">
                            <i data-lucide="wallet" class="h-5 w-5 mr-2 text-primary"></i>
                            Account Balance
                        </h2>
                        <p class="text-xs dark:text-gray-400 text-gray-600">Your current available balance</p>
                    </div>
                    <button id="toggleBalanceVisibility" class="dark:text-gray-400 text-gray-600 hover:text-dark dark:hover:text-white transition-colors">
                        <i data-lucide="eye" class="h-5 w-5" id="visibilityIcon"></i>
                    </button>
                </div>
                
                <div class="flex flex-col">
                    <div class="flex items-center mb-2">
                        <h3 id="balanceAmount" class="text-2xl sm:text-3xl font-bold dark:text-white text-dark mr-2">{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</h3>
                        <h3 id="hiddenBalance" class="text-2xl sm:text-3xl font-bold dark:text-white text-dark mr-2 hidden">••••••</h3>
                    </div>
                    <div class="flex items-center text-secondary bg-secondary/10 px-2 py-1 rounded-full text-xs w-fit mb-3">
                        <i data-lucide="check-circle" class="h-3 w-3 mr-1"></i>
                        <span>Available for Withdrawal</span>
                    </div>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mb-4">Last updated: {{ now()->format('M d, Y h:i A') }}</p>
                    
                    <div class="mt-auto flex gap-2">
                        <a href="{{ route('deposits') }}" class="dark:bg-dark-100 bg-light-200 hover:bg-light-200/70 dark:hover:bg-dark-100/70 dark:text-white text-dark text-xs font-medium px-3 py-1.5 rounded-lg transition-colors flex items-center gap-1 flex-1 justify-center">
                            <i data-lucide="plus-circle" class="h-3.5 w-3.5"></i>
                            <span>Deposit</span>
                        </a>
                        @if ($mod['investment'] || $mod['cryptoswap'])
                        <a href="{{ route('withdrawalsdeposits') }}" class="dark:bg-dark-100 bg-light-200 hover:bg-light-200/70 dark:hover:bg-dark-100/70 dark:text-white text-dark text-xs font-medium px-3 py-1.5 rounded-lg transition-colors flex items-center gap-1 flex-1 justify-center">
                            <i data-lucide="arrow-up-right" class="h-3.5 w-3.5"></i>
                            <span>Withdraw</span>
                        </a>
                        @endif
                    </div>
                </div>
                
                <!-- Decorative Gradient Accent -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-primary via-secondary to-primary opacity-80"></div>
            </div>
            
            <!-- Secondary Stats Cards -->
            <div class="lg:col-span-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 gap-3 h-full">
                <!-- Total Profit Card -->
                @if ($mod['investment'])
                <div class="rounded-lg dark:bg-dark-50 bg-light-100 dark:border-dark-100/50 border-light-200/50 border p-4 transition-all hover:border-secondary/30 h-full flex flex-col">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="text-sm dark:text-gray-400 text-gray-600">Total Profit</span>
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-secondary/10">
                            <i data-lucide="dollar-sign" class="h-4 w-4 text-secondary"></i>
                        </div>
                    </div>
                    <h3 class="mb-1 text-lg font-medium dark:text-white text-dark truncate">{{ $settings->currency }}{{ number_format(Auth::user()->roi, 2, '.', ',') }}</h3>
                    <div class="flex items-center text-secondary mt-auto">
                        <i data-lucide="trending-up" class="mr-1 h-3 w-3"></i>
                        <span class="text-xs">+2.5% Last period</span>
                    </div>
                </div>
                @endif
                
                <!-- Bonus Card - NEW -->
                <div class="rounded-lg dark:bg-dark-50 bg-light-100 dark:border-dark-100/50 border-light-200/50 border p-4 transition-all hover:border-accent/30 h-full flex flex-col">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="text-sm dark:text-gray-400 text-gray-600">Bonus</span>
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-accent/10">
                            <i data-lucide="gift" class="h-4 w-4 text-accent"></i>
                        </div>
                    </div>
                    <h3 class="mb-1 text-lg font-medium dark:text-white text-dark truncate">{{ $settings->currency }}{{ number_format(Auth::user()->bonus, 2, '.', ',') }}</h3>
                    <div class="flex items-center text-accent mt-auto">
                        <i data-lucide="award" class="mr-1 h-3 w-3"></i>
                        <span class="text-xs">Rewards & Promotions</span>
                    </div>
                </div>
                
                <!-- Total Deposit Card -->
                <div class="rounded-lg dark:bg-dark-50 bg-light-100 dark:border-dark-100/50 border-light-200/50 border p-4 transition-all hover:border-tertiary/30 h-full flex flex-col">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="text-sm dark:text-gray-400 text-gray-600">{{ $mod['investment'] || $mod['cryptoswap'] ? 'Total Deposit' : 'Deposit' }}</span>
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-tertiary/10">
                            <i data-lucide="arrow-down" class="h-4 w-4 text-tertiary"></i>
                        </div>
                    </div>
                    <h3 class="mb-1 text-lg font-medium dark:text-white text-dark truncate">{{ $settings->currency }}{{ number_format($deposited, 2, '.', ',') }}</h3>
                    <div class="flex items-center text-tertiary mt-auto">
                        <i data-lucide="calendar" class="mr-1 h-3 w-3"></i>
                        <span class="text-xs">All time</span>
                    </div>
                </div>
                
                <!-- Total Withdrawal Card -->
                @if ($mod['investment'] || $mod['cryptoswap'])
                <div class="rounded-lg dark:bg-dark-50 bg-light-100 dark:border-dark-100/50 border-light-200/50 border p-4 transition-all hover:border-primary/30 h-full flex flex-col">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="text-sm dark:text-gray-400 text-gray-600">Total Withdrawal</span>
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10">
                            <i data-lucide="arrow-up" class="h-4 w-4 text-primary"></i>
                        </div>
                    </div>
                    <h3 class="mb-1 text-lg font-medium dark:text-white text-dark truncate">{{ $settings->currency }}{{ number_format($total_withdrawal, 2, '.', ',') }}</h3>
                    <div class="flex items-center text-primary mt-auto">
                        <i data-lucide="calendar" class="mr-1 h-3 w-3"></i>
                        <span class="text-xs">All time</span>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Main Content Grid -->
<div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
    <!-- Left Column - Active Plans and Recent Transactions -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Market Pairs Carousel -->
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="flex items-center justify-between p-4 sm:p-5 dark:border-dark-100 border-light-200 border-b">
                <h3 class="text-base sm:text-lg font-bold dark:text-white text-dark">Market Overview</h3>
                <div class="flex gap-2">
                    <button class="rounded-full dark:bg-dark-100 bg-light-200 p-1 dark:text-gray-400 text-gray-600 hover:text-dark dark:hover:text-white" id="prev-pair">
                        <i data-lucide="chevron-left" class="h-4 w-4 sm:h-5 sm:w-5"></i>
                    </button>
                    <button class="rounded-full dark:bg-dark-100 bg-light-200 p-1 dark:text-gray-400 text-gray-600 hover:text-dark dark:hover:text-white" id="next-pair">
                        <i data-lucide="chevron-right" class="h-4 w-4 sm:h-5 sm:w-5"></i>
                    </button>
                </div>
            </div>
            
            <div class="p-4 sm:p-5 overflow-hidden">
                <!-- This container will be populated dynamically using JavaScript -->
                <div class="crypto-pairs-carousel w-full">
                    <div class="flex w-full gap-4 transition-transform duration-300" id="pairs-container">
                        <!-- Crypto cards will be injected here -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Active Investment Plans Section -->
        @if ($mod['investment'])
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="flex items-center justify-between p-4 sm:p-5 dark:border-dark-100 border-light-200 border-b">
                <h3 class="text-base sm:text-lg font-bold dark:text-white text-dark">Active Plans <span class="text-xs dark:text-gray-400 text-gray-600">({{ $plans ? count($plans) : '0' }})</span></h3>
                @if (count($plans) > 0)
                <a href="{{ route('myplans', 'yes') }}" class="text-primary text-sm flex items-center gap-1 hover:underline">
                    <span>View all</span>
                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                </a>
                @endif
            </div>
            
            <div class="p-4 sm:p-5">
                @forelse ($plans as $plan)
                <div class="group mb-4 last:mb-0 rounded-lg dark:border-dark-100 border-light-200 border p-3 sm:p-4 hover:bg-dark-100/50 dark:hover:bg-dark-100/50 hover:bg-light-200/50 transition-all">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div class="mb-3 md:mb-0">
                            <div class="flex items-center gap-2">
                                <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-lg bg-primary/10 flex items-center justify-center">
                                    <i data-lucide="trending-up" class="h-4 w-4 sm:h-5 sm:w-5 text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium dark:text-white text-dark text-sm sm:text-base">{{ $plan->dplan->name }}</h4>
                                    <p class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">{{ $settings->currency }}{{ number_format($plan->amount) }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="hidden md:flex items-center gap-4">
                            <div class="text-center">
                                <p class="text-xs dark:text-gray-400 text-gray-600">Start Date</p>
                                <p class="text-sm dark:text-white text-dark">{{ $plan->created_at->format('M d, Y') }}</p>
                            </div>
                            <i data-lucide="arrow-right" class="h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                            <div class="text-center">
                                <p class="text-xs dark:text-gray-400 text-gray-600">End Date</p>
                                <p class="text-sm dark:text-white text-dark">{{ \Carbon\Carbon::parse($plan->expire_date)->format('M d, Y') }}</p>
                            </div>
                        </div>
                        
                        <!-- Mobile date info -->
                        <div class="flex justify-between mb-3 md:hidden">
                            <div>
                                <p class="text-xs dark:text-gray-400 text-gray-600">Start</p>
                                <p class="text-xs dark:text-white text-dark">{{ $plan->created_at->format('M d, Y') }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs dark:text-gray-400 text-gray-600">End</p>
                                <p class="text-xs dark:text-white text-dark">{{ \Carbon\Carbon::parse($plan->expire_date)->format('M d, Y') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between md:justify-end gap-4">
                            <div class="flex md:block items-center gap-2">
                                <p class="text-xs dark:text-gray-400 text-gray-600 md:hidden mb-1">Status:</p>
                                @if ($plan->active == 'yes')
                                <span class="inline-block px-2 py-1 text-xs font-medium text-secondary bg-secondary/10 rounded-full">Active</span>
                                @elseif($plan->active == 'expired')
                                <span class="inline-block px-2 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">Expired</span>
                                @else
                                <span class="inline-block px-2 py-1 text-xs font-medium dark:text-gray-400 text-gray-600 bg-gray-400/10 rounded-full">Inactive</span>
                                @endif
                            </div>
                            
                            <a href="{{ route('plandetails', $plan->id) }}" class="dark:text-gray-400 text-gray-600 hover:text-dark dark:hover:text-white h-8 w-8 flex items-center justify-center rounded-full dark:bg-dark-100 bg-light-200 group-hover:bg-dark-50 dark:group-hover:bg-dark-50 group-hover:bg-light-100">
                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="flex flex-col items-center justify-center py-6 sm:py-8">
                    <div class="h-12 w-12 sm:h-16 sm:w-16 rounded-full dark:bg-dark-100 bg-light-200 flex items-center justify-center mb-4">
                        <i data-lucide="package" class="h-6 w-6 sm:h-8 sm:w-8 dark:text-gray-400 text-gray-600"></i>
                    </div>
                    <h4 class="dark:text-white text-dark font-medium mb-2 text-sm sm:text-base">No Active Plans</h4>
                    <p class="text-xs sm:text-sm dark:text-gray-400 text-gray-600 mb-4 text-center max-w-md">You don't have any active trading plans at the moment. Start growing your wealth today!</p>
                    <a href="{{ route('mplans') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
                        <i data-lucide="plus" class="h-4 w-4"></i>
                        <span>Buy a Plan</span>
                    </a>
                </div>
                @endforelse
            </div>
        </div>
        @endif
        
        <!-- Recent Transactions -->
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="flex items-center justify-between p-4 sm:p-5 dark:border-dark-100 border-light-200 border-b">
                <h3 class="text-base sm:text-lg font-bold dark:text-white text-dark">Recent Transactions</h3>
                <a href="{{ route('accounthistory') }}" class="text-primary text-sm flex items-center gap-1 hover:underline">
                    <span>View all</span>
                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                </a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="dark:border-dark-100 border-light-200 border-b">
                            <th class="text-left p-3 sm:p-4 text-xs font-medium dark:text-gray-400 text-gray-600">Date</th>
                            <th class="text-left p-3 sm:p-4 text-xs font-medium dark:text-gray-400 text-gray-600">Type</th>
                            <th class="text-right p-3 sm:p-4 text-xs font-medium dark:text-gray-400 text-gray-600">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($t_history as $item)
                        <tr class="dark:border-dark-100 border-light-200 border-b hover:bg-dark-100/50 dark:hover:bg-dark-100/50 hover:bg-light-200/50">
                            <td class="p-3 sm:p-4 text-xs sm:text-sm dark:text-gray-300 text-gray-700">
                                {{ $item->created_at->format('d M Y, h:i A') }}
                                <div class="text-xs dark:text-gray-500 text-gray-500 sm:hidden">{{ $item->created_at->format('H:i') }}</div>
                            </td>
                            <td class="p-3 sm:p-4">
                                <div class="flex items-center gap-2">
                                    @if(stripos($item->type, 'deposit') !== false)
                                        <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-secondary/10 flex items-center justify-center">
                                            <i data-lucide="arrow-down" class="h-3 w-3 sm:h-4 sm:w-4 text-secondary"></i>
                                        </div>
                                    @elseif(stripos($item->type, 'withdrawal') !== false)
                                        <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-primary/10 flex items-center justify-center">
                                            <i data-lucide="arrow-up" class="h-3 w-3 sm:h-4 sm:w-4 text-primary"></i>
                                        </div>
                                    @elseif(stripos($item->type, 'profit') !== false || stripos($item->type, 'bonus') !== false)
                                        <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-tertiary/10 flex items-center justify-center">
                                            <i data-lucide="plus" class="h-3 w-3 sm:h-4 sm:w-4 text-tertiary"></i>
                                        </div>
                                    @else
                                        <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-gray-500/10 flex items-center justify-center">
                                            <i data-lucide="credit-card" class="h-3 w-3 sm:h-4 sm:w-4 text-gray-500"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="text-xs sm:text-sm dark:text-white text-dark">{{ $item->type }}</p>
                                        <p class="text-xs dark:text-gray-400 text-gray-600 hidden sm:block">{{ $item->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3 sm:p-4 text-right whitespace-nowrap">
                                <span class="inline-block px-2 py-1 text-xs sm:text-sm font-medium 
                                    {{ stripos($item->type, 'deposit') !== false || stripos($item->type, 'profit') !== false || stripos($item->type, 'bonus') !== false ? 'text-secondary' : 'text-primary' }}">
                                    {{ stripos($item->type, 'deposit') !== false || stripos($item->type, 'profit') !== false || stripos($item->type, 'bonus') !== false ? '+' : '-' }}{{ $settings->currency }}{{ number_format($item->amount, 2, '.', ',') }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="p-6 sm:p-8 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="h-10 w-10 sm:h-12 sm:w-12 rounded-full dark:bg-dark-100 bg-light-200 flex items-center justify-center mb-3">
                                        <i data-lucide="history" class="h-5 w-5 sm:h-6 sm:w-6 dark:text-gray-400 text-gray-600"></i>
                                    </div>
                                    <p class="dark:text-gray-400 text-gray-600 mb-1 text-sm">No transactions found</p>
                                    <p class="text-xs dark:text-gray-500 text-gray-500">Your transaction history will appear here</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Right Column - Profile and Referral -->
    <div class="space-y-6">
        <!-- User Profile Card -->
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="bg-gradient-to-r from-primary/20 to-secondary/20 p-4 sm:p-5 text-center">
                <div class="relative inline-block">
                    <div class="h-16 w-16 sm:h-20 sm:w-20 rounded-full bg-primary text-white font-bold text-xl flex items-center justify-center mx-auto">
                        {{ substr(Auth::user()->name, 0, 2) }}
                    </div>
                    @if (Auth::user()->account_verify == 'Verified')
                    <div class="absolute -bottom-1 -right-1 bg-secondary h-5 w-5 sm:h-6 sm:w-6 rounded-full flex items-center justify-center">
                        <i data-lucide="check" class="h-3 w-3 sm:h-4 sm:w-4 text-white"></i>
                    </div>
                    @endif
                </div>
                <h4 class="mt-3 font-medium dark:text-white text-dark text-sm sm:text-base">{{ Auth::user()->name }}</h4>
                <p class="text-xs dark:text-gray-400 text-gray-600">Member since {{ Auth::user()->created_at->format('M Y') }}</p>
            </div>
            <div class="p-4 sm:p-5">
                <!-- Account Info -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Account Balance</span>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Bonus</span>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">{{ $settings->currency }}{{ number_format(Auth::user()->bonus, 2, '.', ',') }}</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Referral Bonus</span>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">{{ $settings->currency }}{{ number_format(Auth::user()->ref_bonus, 2, '.', ',') }}</span>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="mt-4 grid grid-cols-2 gap-2 sm:gap-3">
                    <a href="{{ route('deposits') }}" class="flex items-center justify-center gap-1 sm:gap-2 p-2 dark:bg-dark-100 bg-light-200 hover:bg-light-200/70 dark:hover:bg-dark-100/70 rounded-lg dark:text-white text-dark text-xs sm:text-sm font-medium transition-colors">
                        <i data-lucide="plus-circle" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                        <span>Deposit</span>
                    </a>
                    @if ($mod['investment'] || $mod['cryptoswap'])
                    <a href="{{ route('withdrawalsdeposits') }}" class="flex items-center justify-center gap-1 sm:gap-2 p-2 dark:bg-dark-100 bg-light-200 hover:bg-light-200/70 dark:hover:bg-dark-100/70 rounded-lg dark:text-white text-dark text-xs sm:text-sm font-medium transition-colors">
                        <i data-lucide="arrow-up-right" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                        <span>Withdraw</span>
                    </a>
                    @endif
                </div>
                
                <!-- Account Status -->
                <div class="mt-4 sm:mt-5 dark:border-dark-100 border-light-200 border-t pt-4 sm:pt-5">
                    <div class="flex items-center justify-between">
                        <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Account Status</span>
                        @if (Auth::user()->account_verify == 'Verified')
                        <span class="inline-flex items-center text-xs font-medium text-secondary bg-secondary/10 px-2 py-1 rounded-full">
                            <i data-lucide="check-circle" class="h-3 w-3 mr-1"></i> Verified
                        </span>
                        @else
                        <span class="inline-flex items-center text-xs font-medium text-primary bg-primary/10 px-2 py-1 rounded-full">
                            <i data-lucide="alert-circle" class="h-3 w-3 mr-1"></i> Unverified
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Referral Card -->
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="flex items-center justify-between p-4 sm:p-5 dark:border-dark-100 border-light-200 border-b">
                <h3 class="font-bold dark:text-white text-dark text-sm sm:text-base">Refer & Earn</h3>
                <a href="{{ route('referuser') }}" class="text-primary text-xs sm:text-sm flex items-center gap-1 hover:underline">
                    <span>Details</span>
                    <i data-lucide="chevron-right" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                </a>
            </div>
            <div class="p-4 sm:p-5">
                <div class="mb-4">
                    <div class="flex mb-3">
                        <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-full bg-accent/10 flex items-center justify-center mr-3">
                            <i data-lucide="users" class="h-4 w-4 sm:h-5 sm:w-5 text-accent"></i>
                        </div>
                        <div>
                            <h4 class="font-medium dark:text-white text-dark text-xs sm:text-sm">Earn Through Referrals</h4>
                            <p class="text-xs dark:text-gray-400 text-gray-600">Earn commission when someone signs up using your link</p>
                        </div>
                    </div>
                </div>
                
                <!-- Referral Link -->
                <div class="mb-4">
                    <label class="block text-xs sm:text-sm dark:text-gray-400 text-gray-600 mb-2">Your Referral Link</label>
                    <div class="flex dark:bg-dark-100 bg-light-200 rounded-lg overflow-hidden">
                        <input type="text" id="reflink" value="{{ Auth::user()->ref_link }}" readonly class="flex-1 dark:bg-transparent bg-transparent border-0 px-2 sm:px-3 py-2 text-xs sm:text-sm dark:text-gray-300 text-gray-700 focus:outline-none truncate" />
                        <button onclick="copyRefLink()" class="bg-primary text-white px-2 sm:px-3 py-2 text-xs sm:text-sm font-medium hover:bg-primary/90 transition-colors flex items-center gap-1">
                            <i data-lucide="copy" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                            <span>Copy</span>
                        </button>
                    </div>
                </div>
                
                <!-- Referral Stats -->
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <div class="dark:bg-dark-100 bg-light-200 rounded-lg p-2 sm:p-3">
                        <p class="text-xs dark:text-gray-400 text-gray-600 mb-1">Total Referrals</p>
                        <p class="text-lg sm:text-xl font-bold dark:text-white text-dark">{{ Auth::user()->ref_count ?? 0 }}</p>
                    </div>
                    <div class="dark:bg-dark-100 bg-light-200 rounded-lg p-2 sm:p-3">
                        <p class="text-xs dark:text-gray-400 text-gray-600 mb-1">Earnings</p>
                        <p class="text-lg sm:text-xl font-bold dark:text-white text-dark">{{ $settings->currency }}{{ number_format(Auth::user()->ref_bonus, 2, '.', ',') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Platform Stats Card -->
        <div class="dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-xl overflow-hidden w-full">
            <div class="p-4 sm:p-5 dark:border-dark-100 border-light-200 border-b">
                <h3 class="font-bold dark:text-white text-dark text-sm sm:text-base">Platform Stats</h3>
            </div>
            <div class="p-4 sm:p-5">
                <div class="space-y-4 sm:space-y-5">
                    <!-- Overall Platform Activity -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Platform Activity</span>
                            <span class="text-xs text-secondary bg-secondary/10 px-2 py-1 rounded-full">Active</span>
                        </div>
                        <div class="w-full dark:bg-dark-100 bg-light-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-secondary to-primary h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <!-- Total Users -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-tertiary/10 flex items-center justify-center">
                                <i data-lucide="users" class="h-3 w-3 sm:h-4 sm:w-4 text-tertiary"></i>
                            </div>
                            <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Total Users</span>
                        </div>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">12,458+</span>
                    </div>
                    
                    <!-- Total Investments -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-secondary/10 flex items-center justify-center">
                                <i data-lucide="briefcase" class="h-3 w-3 sm:h-4 sm:w-4 text-secondary"></i>
                            </div>
                            <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Total Trades</span>
                        </div>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">$9.5M+</span>
                    </div>
                    
                    <!-- Server Uptime -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-primary/10 flex items-center justify-center">
                                <i data-lucide="activity" class="h-3 w-3 sm:h-4 sm:w-4 text-primary"></i>
                            </div>
                            <span class="text-xs sm:text-sm dark:text-gray-400 text-gray-600">Server Uptime</span>
                        </div>
                        <span class="text-xs sm:text-sm font-medium dark:text-white text-dark">99.9%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function copyRefLink() {
    var copyText = document.getElementById("reflink");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    
    // Show a toast notification
    const toast = document.createElement('div');
    toast.className = 'fixed bottom-4 right-4 bg-secondary text-white py-2 px-4 rounded-md shadow-lg flex items-center animate-in slide-in-from-bottom z-50';
    toast.innerHTML = `
        <i data-lucide="check-circle" class="h-4 w-4 mr-2"></i>
        <span class="text-sm">Referral link copied!</span>
    `;
    document.body.appendChild(toast);
    lucide.createIcons();
    
    setTimeout(() => {
        toast.classList.add('opacity-0', 'transition-opacity', 'duration-300');
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}

// Fetch crypto data from CoinGecko and build carousel cards
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('pairs-container');
    const prevBtn = document.getElementById('prev-pair');
    const nextBtn = document.getElementById('next-pair');
    let position = 0;
    let itemWidth = 0;
    let maxPosition = 0;
    let touchStartX = 0;
    let touchEndX = 0;

    // Fetch data from CoinGecko API (top 4 coins)
    fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=4&page=1&sparkline=false')
        .then(response => response.json())
        .then(data => {
            let html = '';
            data.forEach(coin => {
                const isUp = coin.price_change_24h >= 0;
                html += `
                <div class="min-w-[100%] xs:min-w-[85%] sm:min-w-[240px] sm:w-auto rounded-xl dark:border-dark-100 border-light-200 border dark:bg-dark-100/50 bg-light-200/50 p-4 flex-shrink-0">
                    <div class="mb-3 flex items-center gap-2">
                        <img src="${coin.image}" alt="${coin.name} Logo" class="h-8 w-8 rounded-full" />
                        <div>
                            <div class="font-medium dark:text-white text-dark">${coin.name}</div>
                            <div class="text-xs dark:text-gray-400 text-gray-600">${coin.symbol.toUpperCase()}</div>
                        </div>
                        <span class="ml-auto ${isUp ? 'bg-secondary' : 'bg-primary'} text-white text-xs px-2 py-1 rounded-full flex items-center">
                            <i data-lucide="${isUp ? 'arrow-up' : 'arrow-down'}" class="h-3 w-3 mr-1"></i>
                            ${coin.price_change_percentage_24h.toFixed(2)}%
                        </span>
                    </div>
                    <div class="mb-2">
                        <div class="flex justify-between">
                            <span class="dark:text-gray-400 text-gray-600 text-xs">Price</span>
                            <span class="dark:text-gray-400 text-gray-600 text-xs">24h Change</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium dark:text-white text-dark">$${coin.current_price.toFixed(2)}</span>
                            <span class="${isUp ? 'text-secondary' : 'text-primary'}">
                                ${isUp ? '+' : '-'}$${Math.abs(coin.price_change_24h).toFixed(2)}
                            </span>
                        </div>
                    </div>
                    <div class="h-12 w-full">
                        <!-- Fallback sparkline SVG -->
                        <svg viewBox="0 0 100 30" preserveAspectRatio="none" class="w-full h-full">
                            <path d="M0,15 C20,5 40,25 60,15 S80,5 100,15" stroke="${isUp ? '#4A9D7F' : '#C88B65'}" stroke-width="1.5" fill="none"></path>
                        </svg>
                    </div>
                </div>`;
            });
            container.innerHTML = html;
            lucide.createIcons();
            calculateSizes(); // recalc sizes after content load
        })
        .catch(error => {
            console.error('Error fetching crypto data:', error);
        });

    // Carousel navigation functions
    function calculateSizes() {
        const containerWidth = container.parentElement.offsetWidth;
        const isMobile = window.innerWidth < 640;
        if (isMobile) {
            const firstItem = container.children[0];
            if (firstItem) {
                itemWidth = firstItem.offsetWidth + 16;
            }
        } else {
            itemWidth = 240 + 16;
        }
        const totalItems = container.children.length;
        const visibleItems = Math.max(1, Math.floor(containerWidth / itemWidth));
        maxPosition = Math.max(0, totalItems - visibleItems);
        if (position > maxPosition) {
            position = maxPosition;
            updatePosition();
        }
    }
    
    function updatePosition() {
        container.style.transform = `translateX(-${position * itemWidth}px)`;
    }
    
    prevBtn.addEventListener('click', function() {
        if (position > 0) {
            position--;
            updatePosition();
        }
    });
    
    nextBtn.addEventListener('click', function() {
        if (position < maxPosition) {
            position++;
            updatePosition();
        }
    });
    
    container.addEventListener('touchstart', function(e) {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });
    
    container.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].clientX;
        handleSwipe();
    }, { passive: true });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const swipeDistance = touchStartX - touchEndX;
        if (swipeDistance > swipeThreshold && position < maxPosition) {
            position++;
            updatePosition();
        } else if (swipeDistance < -swipeThreshold && position > 0) {
            position--;
            updatePosition();
        }
    }
    
    window.addEventListener('resize', function() {
        calculateSizes();
        updatePosition();
    });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Balance visibility toggle functionality
        const toggleBtn = document.getElementById('toggleBalanceVisibility');
        const balanceAmount = document.getElementById('balanceAmount');
        const hiddenBalance = document.getElementById('hiddenBalance');
        const visibilityIcon = document.getElementById('visibilityIcon');
        
        // Check if balance visibility preference exists in localStorage
        const balanceVisible = localStorage.getItem('balanceVisible') !== 'false';
        
        // Set initial state
        setBalanceVisibility(balanceVisible);
        
        toggleBtn.addEventListener('click', function() {
            // Toggle visibility
            const isCurrentlyVisible = balanceAmount.classList.contains('hidden') === false;
            setBalanceVisibility(!isCurrentlyVisible);
            
            // Save preference
            localStorage.setItem('balanceVisible', !isCurrentlyVisible);
        });
        
        function setBalanceVisibility(visible) {
            if (visible) {
                balanceAmount.classList.remove('hidden');
                hiddenBalance.classList.add('hidden');
                visibilityIcon.setAttribute('data-lucide', 'eye');
            } else {
                balanceAmount.classList.add('hidden');
                hiddenBalance.classList.remove('hidden');
                visibilityIcon.setAttribute('data-lucide', 'eye-off');
            }
            
            // Re-initialize the icon
            if (typeof lucide !== 'undefined') {
                lucide.createIcons({
                    elements: [visibilityIcon]
                });
            }
        }
    });
</script>

@endsection