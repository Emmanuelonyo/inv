<!-- Modern Mobile Navigation -->
<div class="fixed bottom-0 left-0 right-0 z-[9990] md:hidden">
    <!-- Main Navigation Bar - Refined Design -->
    <div class="bg-gradient-to-b dark:from-dark-50 dark:to-dark from-light-100 to-light dark:border-dark-100/80 border-light-200/80 border-t pt-0.5">
        <!-- Interactive Track Bar -->
        <div class="mx-auto w-1/2 h-1 -mt-0.5 rounded-full bg-gradient-to-r from-primary/20 via-secondary/60 to-tertiary/20"></div>
        
        <!-- Navigation Items -->
        <div class="flex items-center justify-around h-16 relative px-2">
            <!-- Active Navigation Indicator (SVG-based) -->
            <svg class="absolute bottom-0 left-0 w-full h-12 z-0 pointer-events-none" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="activeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="rgb(200, 139, 101)" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="rgb(200, 139, 101)" stop-opacity="0.1" />
                        <stop offset="100%" stop-color="rgb(200, 139, 101)" stop-opacity="0.2" />
                    </linearGradient>
                </defs>
                <rect id="nav-indicator" x="10%" y="0" width="20%" height="100%" rx="16" fill="url(#activeGradient)" style="display:none;" />
            </svg>
            
            <!-- Home -->
            <a href="{{ route('dashboard') }}" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"
               data-index="0">
                <div class="nav-icon-wrapper {{ request()->routeIs('dashboard') ? 'text-primary' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">
                    <i data-lucide="home" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 {{ request()->routeIs('dashboard') ? 'text-primary font-medium' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">Home</span>
            </a>
            
            <!-- Deposit -->
            <a href="{{ route('deposits') }}" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item {{ request()->routeIs('deposits') ? 'active' : '' }}"
               data-index="1">
                <div class="nav-icon-wrapper {{ request()->routeIs('deposits') ? 'text-primary' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">
                    <i data-lucide="download" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 {{ request()->routeIs('deposits') ? 'text-primary font-medium' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">Deposit</span>
            </a>
            
            <!-- Quick Actions (FAB) -->
            <div class="flex flex-col items-center h-full relative px-2 -mt-8">
                <button id="fab-button" 
                        class="h-14 w-14 rounded-full shadow-lg flex items-center justify-center relative z-20 bg-primary transform hover:scale-105 transition-all duration-300">
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="48" fill="none" stroke-width="2" stroke="rgba(255,255,255,0.1)" />
                        <circle cx="50" cy="50" r="48" fill="none" stroke-width="2" stroke="rgb(200, 139, 101)" stroke-dasharray="302" stroke-dashoffset="302" class="animate-dash" />
                    </svg>
                    <i data-lucide="zap" class="h-6 w-6 text-white"></i>
                </button>
                <span class="text-xs dark:text-gray-400 text-gray-600 absolute -bottom-2">Actions</span>
            </div>
            
            <!-- History -->
            <a href="{{ route('accounthistory') }}" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item {{ request()->routeIs('accounthistory') ? 'active' : '' }}"
               data-index="3">
                <div class="nav-icon-wrapper {{ request()->routeIs('accounthistory') ? 'text-primary' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">
                    <i data-lucide="history" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 {{ request()->routeIs('accounthistory') ? 'text-primary font-medium' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">History</span>
            </a>
            
            <!-- Profile -->
            <a href="{{ route('profile') }}" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item {{ request()->routeIs('profile') ? 'active' : '' }}"
               data-index="4">
                <div class="nav-icon-wrapper {{ request()->routeIs('profile') ? 'text-primary' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">
                    <i data-lucide="user" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 {{ request()->routeIs('profile') ? 'text-primary font-medium' : 'dark:text-gray-400 text-gray-600' }} transition-all duration-300">Profile</span>
            </a>
        </div>
    </div>

    <!-- Floating Action Menu (hidden by default) -->
    <div id="fab-menu" class="hidden fixed inset-0 dark:bg-dark/70 bg-light/70 backdrop-blur-sm z-[9991] animate-in fade-in duration-300">
        <div class="absolute inset-x-0 bottom-24 flex flex-col items-center">
            <!-- Actions Grid -->
            <div class="flex flex-wrap justify-center gap-4 max-w-md mx-auto p-3">
                <!-- Invest -->
                @if ($mod['investment'])
                <a href="{{ route('mplans') }}" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-secondary/20 to-secondary/5 border border-secondary/20 hover:from-secondary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-secondary to-secondary/70 flex items-center justify-center mb-2">
                        <i data-lucide="trending-up" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Invest</span>
                </a>
                @endif
                
                <!-- Withdraw -->
                @if ($mod['investment'] || $mod['cryptoswap'])
                <a href="{{ route('withdrawalsdeposits') }}" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-primary/20 to-primary/5 border border-primary/20 hover:from-primary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-primary/70 flex items-center justify-center mb-2">
                        <i data-lucide="upload" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Withdraw</span>
                </a>
                @endif
                
                <!-- Swap -->
                @if ($mod['cryptoswap'])
                <a href="{{ route('assetbalance') }}" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-tertiary/20 to-tertiary/5 border border-tertiary/20 hover:from-tertiary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary to-tertiary/70 flex items-center justify-center mb-2">
                        <i data-lucide="shuffle" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Swap</span>
                </a>
                @endif
                
                <!-- Refer -->
                <a href="{{ route('referuser') }}" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-accent/20 to-accent/5 border border-accent/20 hover:from-accent/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-accent to-accent/70 flex items-center justify-center mb-2">
                        <i data-lucide="users" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Refer</span>
                </a>
                
                <!-- Support -->
                <a href="{{ route('support') }}" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-danger/20 to-danger/5 border border-danger/20 hover:from-danger/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-danger to-danger/70 flex items-center justify-center mb-2">
                        <i data-lucide="headphones" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Support</span>
                </a>
                
                <!-- News -->
                <a href="#" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-purple/20 to-purple/5 border border-purple/20 hover:from-purple/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple to-purple/70 flex items-center justify-center mb-2">
                        <i data-lucide="newspaper" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">News</span>
                </a>
            </div>
            
            <!-- Close Button -->
            <button id="fab-close" class="mt-8 w-12 h-12 rounded-full dark:bg-dark-100/80 bg-light-200/80 dark:border-dark-100 border-light-200 border flex items-center justify-center">
                <i data-lucide="x" class="h-6 w-6 dark:text-white text-dark"></i>
            </button>
        </div>
    </div>
</div>

<style>
/* SVG Animation */
@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}

.animate-dash {
  animation: dash 2s ease-in-out infinite alternate;
}

/* Navigation item active highlight effect */
.nav-item.active .nav-icon-wrapper::after {
    transform: scale(1);
    opacity: 1;
} 

.nav-icon-wrapper {
    position: relative;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-icon-wrapper::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: rgba(200, 139, 101, 0.1);
    transform: scale(0);
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.nav-item.active .nav-icon-wrapper::after {
    transform: scale(1);
    opacity: 1;
}

/* Animation for menu items */
.menu-item {
    animation: menu-appear 0.4s backwards;
}

@keyframes menu-appear {
    from {
        opacity: 0;
        transform: scale(0.8) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

/* Active indicator transition */
#nav-indicator {
    transition: x 0.3s ease;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const fabButton = document.getElementById('fab-button');
        const fabMenu = document.getElementById('fab-menu');
        const fabClose = document.getElementById('fab-close');
        const navItems = document.querySelectorAll('.nav-item');
        const navIndicator = document.getElementById('nav-indicator');
        
        // Add active class to current navigation item
        navItems.forEach(item => {
            if (window.location.href.includes(item.getAttribute('href'))) {
                item.classList.add('active');
                
                // Set indicator position for active item
                const index = item.dataset.index;
                if (navIndicator && index !== undefined) {
                    navIndicator.style.display = 'block';
                    updateIndicatorPosition(parseInt(index));
                }
            }
            
            // Add click handler to update indicator position
            item.addEventListener('click', function() {
                const index = this.dataset.index;
                if (navIndicator && index !== undefined) {
                    updateIndicatorPosition(parseInt(index));
                }
            });
        });
        
        // Update the indicator position - Fixed calculation
        function updateIndicatorPosition(index) {
            if (!navIndicator) return;
            
            // Calculate the x position based on index
            // Each item takes 20% width (5 items total)
            // We add 10% to center the indicator (20% item width - 10% offset)
            const translateX = (index * 20) + '%';
            navIndicator.setAttribute('x', translateX);
        }
        
        // FAB button functionality
        if (fabButton && fabMenu && fabClose) {
            // Open menu
            fabButton.addEventListener('click', function() {
                fabMenu.classList.remove('hidden');
                
                // Stagger animation for menu items
                const menuItems = document.querySelectorAll('.menu-item');
                menuItems.forEach((item, index) => {
                    item.style.animationDelay = `${index * 0.05}s`;
                });
                
                // Change FAB icon
                const fabIcon = fabButton.querySelector('i');
                if (fabIcon) {
                    fabIcon.setAttribute('data-lucide', 'x');
                    lucide.createIcons();
                }
            });
            
            // Close menu
            fabClose.addEventListener('click', function() {
                fabMenu.classList.add('hidden');
                
                // Change FAB icon back
                const fabIcon = fabButton.querySelector('i');
                if (fabIcon) {
                    fabIcon.setAttribute('data-lucide', 'zap');
                    lucide.createIcons();
                }
            });
            
            // Close menu when clicking outside (on the backdrop)
            fabMenu.addEventListener('click', function(e) {
                if (e.target === fabMenu) {
                    fabMenu.classList.add('hidden');
                    
                    // Change FAB icon back
                    const fabIcon = fabButton.querySelector('i');
                    if (fabIcon) {
                        fabIcon.setAttribute('data-lucide', 'zap');
                        lucide.createIcons();
                    }
                }
            });
        }
    });
</script>