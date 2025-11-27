<!-- Enhanced Top Navigation Bar -->
<header class="flex h-16 items-center justify-between dark:border-dark-100 border-light-200 border-b px-4 sm:px-6 sticky top-0 z-[9999] bg-gradient-to-r dark:from-dark dark:to-dark-50 from-light to-light-100 backdrop-blur-sm shadow-md">
    <div class="flex items-center gap-4">
        <!-- Mobile Menu Toggle with Improved Design -->
        <button class="md:hidden dark:text-white text-dark p-1.5 rounded-lg dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/50" id="mobileMenuToggle">
            <i class="fas fa-bars h-5 w-5"></i>
        </button>
        
        <!-- Mobile Logo with Enhanced Appearance -->
        <div class="flex items-center gap-3 md:hidden">
            <div class="flex items-center gap-2 font-bold text-xl md:hidden">
            <img src="{{ asset('storage/app/public/' . $settings->logo) }}" alt="logo" class="h-8">
        </div>
        </div>
    </div>
    
    <!-- Right-side items with Better Layout -->
    <div class="flex items-center gap-1.5 sm:gap-3">
        <!-- Theme Toggle Button -->
       <button id="themeToggle" onclick="toggleTheme()" class="p-1.5 dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 rounded-lg transition-colors" title="Toggle Theme">
            <!-- Sun icon for light theme (shown in dark mode) -->
            <i data-lucide="sun" class="h-4 w-4"></i>
            <!-- Moon icon for dark theme (shown in light mode) -->
            <i data-lucide="moon" class="h-4 w-4"></i>
        </button>
        
        <!-- KYC Verification with Improved Design -->
        @if ($settings->enable_kyc == 'yes')
        <div class="relative" x-data="{ open: false }">
            @if (Auth::user()->account_verify == 'Verified')
            <div class="flex items-center text-secondary bg-secondary/10 px-2 py-1 rounded-lg text-xs border border-secondary/20">
                <i class="fas fa-shield-check h-3.5 w-3.5 mr-1"></i>
                <span class="hidden sm:inline-block">Verified</span>
            </div>
            @else
            <button @click="open = !open" class="flex items-center dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 px-2 py-1 rounded-lg text-xs dark:border-dark-100 border-light-200 border transition-colors">
                <i class="fas fa-shield-alt h-3.5 w-3.5 mr-1"></i>
                <span class="hidden sm:inline-block">KYC</span>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-56 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark">KYC Verification</h6>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5">Verify your identity to unlock all features</p>
                </div>
                <div class="p-4 text-center">
                    @if (Auth::user()->account_verify == 'Under review')
                        <div class="dark:bg-dark-100/40 bg-light-200/40 rounded-lg p-3 mb-2">
                            <i class="fas fa-clock h-8 w-8 text-primary mx-auto mb-2"></i>
                            <span class="text-xs dark:text-gray-300 text-gray-700 block">Your submission is under review</span>
                        </div>
                        <p class="text-xs dark:text-gray-400 text-gray-600 mt-2">We'll notify you once verification is complete</p>
                    @else
                        <div class="dark:bg-dark-100/40 bg-light-200/40 rounded-lg p-3 mb-3">
                            <i class="fas fa-shield-alt h-8 w-8 text-primary mx-auto mb-2"></i>
                            <span class="text-xs dark:text-gray-300 text-gray-700 block">Your account is not verified</span>
                        </div>
                        <a href="{{ route('account.verify') }}" class="inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-primary to-primary/80 text-white text-xs font-medium px-4 py-2 rounded-lg hover:from-primary/90 hover:to-primary/70 transition-all">
                            <i class="fas fa-shield-check h-3.5 w-3.5"></i>
                            <span>Verify Account</span>
                        </a>
                    @endif
                </div>
            </div>
            @endif
        </div>
        @endif
        
        <!-- Notifications with Enhanced Design -->
        <div class="relative" 
            x-data="{ 
                open: false, 
                notifications: [], 
                unreadCount: 0, 
                loading: true, 
                init() { 
                    this.fetchNotifications(); 
                    this.setupPolling(); 
                }, 
                fetchNotifications() { 
                    this.loading = true; 
                    fetch('{{ route('notifications.latest') }}') 
                        .then(response => response.json()) 
                        .then(data => { 
                            this.notifications = data.notifications; 
                            this.unreadCount = data.unread_count; 
                            this.loading = false; 
                        }) 
                        .catch(error => { 
                            console.error('Error fetching notifications:', error); 
                            this.loading = false; 
                        }); 
                }, 
                setupPolling() { 
                    setInterval(() => { 
                        this.fetchNotifications(); 
                    }, 30000); 
                } 
            }"
            x-init="init()"
        >
            <button @click="open = !open; if(open) fetchNotifications();" class="p-1.5 dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 rounded-lg transition-colors relative" title="Notifications">
                <i class="fas fa-bell h-4 w-4"></i>
                <span x-show="unreadCount > 0" x-text="unreadCount > 9 ? '9+' : unreadCount" class="absolute -right-1 -top-1 h-4 w-4 flex items-center justify-center bg-primary text-[10px] text-white rounded-full dark:border-dark border-light-100 border"></span>
            </button>
            
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-72 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 flex items-center justify-between dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark">Notifications</h6>
                    <span x-show="unreadCount > 0" x-text="unreadCount" class="text-xs bg-primary text-white px-1.5 py-0.5 rounded-full"></span>
                </div>
                
                <div class="max-h-[280px] overflow-y-auto">
                    <!-- Loading State -->
                    <template x-if="loading">
                        <div class="p-4 text-center">
                            <div class="inline-block h-6 w-6 animate-spin rounded-full border-2 border-solid border-primary border-r-transparent motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status">
                                <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                            </div>
                        </div>
                    </template>
                    
                    <!-- Empty State -->
                    <template x-if="!loading && notifications.length === 0">
                        <div class="p-4 text-center">
                            <div class="h-12 w-12 rounded-full bg-light-200/60 dark:bg-dark-100/60 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-bell-slash h-6 w-6 dark:text-gray-400 text-gray-600"></i>
                            </div>
                            <p class="text-xs dark:text-gray-400 text-gray-600">No notifications yet</p>
                        </div>
                    </template>
                    
                    <!-- Notifications List -->
                    <template x-if="!loading && notifications.length > 0">
                        <div>
                            <template x-for="notification in notifications" :key="notification.id">
                                <a :href="'{{ route('notifications.mark', '') }}/' + notification.id" class="block p-3 dark:border-dark-100/60 border-light-200/60 border-b hover:bg-dark-100/30 dark:hover:bg-dark-100/30 hover:bg-light-200/30 transition-colors" :class="{ 'dark:bg-dark-100/50 bg-light-200/50': !notification.is_read }">
                                    <div class="flex gap-3">
                                        <div :class="notification.icon_bg_color || 'bg-primary/10'" class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0">
                                            <i :class="'fas ' + (notification.icon || 'fa-bell')" class="h-4 w-4 text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs dark:text-white text-dark font-medium" x-text="notification.title || 'Notification'"></p>
                                            <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5" x-text="notification.message"></p>
                                            <p class="text-xs dark:text-gray-500 text-gray-500 mt-1" x-text="new Date(notification.created_at).toLocaleString()"></p>
                                        </div>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </template>
                </div>
                
                <div class="p-2 dark:border-dark-100 border-light-200 border-t flex justify-between">
                    <a x-show="unreadCount > 0" href="{{ route('notifications.markAll') }}" class="block text-xs text-primary hover:text-primary/80 py-1 px-2">
                        Mark all as read
                    </a>
                    <a href="{{ route('notifications') }}" class="block text-xs text-primary hover:text-primary/80 py-1 px-2 ml-auto">
                        View all
                    </a>
                </div>
            </div>
        </div>
        
        <!-- User Profile Dropdown with Enhanced Design -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-lg hover:bg-dark-100/40 dark:hover:bg-dark-100/40 hover:bg-light-200/40 transition-colors">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-full opacity-80"></div>
                    <div class="relative h-7 w-7 sm:h-8 sm:w-8 bg-primary rounded-full flex items-center justify-center text-sm font-medium dark:border-dark-50 border-light-300 border-2">
                        {{ substr(Auth::user()->name, 0, 2) }}
                    </div>
                </div>
                <span class="hidden md:block text-sm font-medium dark:text-white text-dark">{{ Auth::user()->username }}</span>
                <i class="fas fa-chevron-down h-4 w-4 dark:text-gray-400 text-gray-600 hidden md:block"></i>
            </button>
            
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-56 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark">{{ Auth::user()->name }}</h6>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5">{{ Auth::user()->email }}</p>
                </div>
                
                <div class="py-2">
                    <a href="{{ route('profile') }}" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-user h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="{{ route('accounthistory') }}" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-history h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Transaction History</span>
                    </a>
                    <a href="{{ route('support') }}" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-life-ring h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Support</span>
                    </a>
                </div>
                
                <div class="py-2 dark:border-dark-100 border-light-200 border-t">
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="flex items-center gap-2 px-4 py-2 text-sm text-danger dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-sign-out-alt h-4 w-4"></i>
                        <span>Logout</span>
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>