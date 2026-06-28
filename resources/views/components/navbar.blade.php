<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 py-6 px-6 md:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo Branding -->
        <a href="#" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logo_alveris.png') }}" alt="Alveris Monogram Logo" class="h-10 w-auto transition-transform duration-500 group-hover:scale-105">
            <div class="flex flex-col">
                <span class="font-serif text-xl md:text-2xl tracking-[0.25em] text-[#FAF8F5] font-semibold uppercase group-hover:text-[#C5A059] transition-colors duration-300">Alveris</span>
                <span class="text-[9px] tracking-[0.4em] text-[#C5A059] uppercase font-light -mt-1">Haute Parfumerie</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center space-x-10 text-xs tracking-[0.2em] font-medium uppercase text-[#FAF8F5]/80">
            <a href="#heritage" class="hover:text-[#C5A059] transition-colors duration-300 py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#C5A059] hover:after:w-full after:transition-all after:duration-300">The Maison</a>
            <a href="#chef-doeuvres" class="hover:text-[#C5A059] transition-colors duration-300 py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#C5A059] hover:after:w-full after:transition-all after:duration-300">Les Masterpieces</a>
            <a href="#discovery" class="hover:text-[#C5A059] transition-colors duration-300 py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#C5A059] hover:after:w-full after:transition-all after:duration-300">Scent Finder</a>
            <a href="#atelier" class="hover:text-[#C5A059] transition-colors duration-300 py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#C5A059] hover:after:w-full after:transition-all after:duration-300">Craftsmanship</a>
            <a href="#boutiques" class="hover:text-[#C5A059] transition-colors duration-300 py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-[#C5A059] hover:after:w-full after:transition-all after:duration-300">Boutiques</a>
        </nav>

        <!-- CTA Button & Mobile Menu Toggle -->
        <div class="flex items-center gap-4">
            <a href="#bespoke" class="hidden sm:inline-block border border-white/20 hover:border-white text-white hover:bg-white hover:text-black text-xs font-medium tracking-[0.2em] uppercase px-5 py-2.5 transition-all duration-500 backdrop-blur-md">
                Bespoke Atelier
            </a>

            <button id="mobile-menu-btn" class="lg:hidden text-[#FAF8F5] hover:text-[#C5A059] focus:outline-none p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden glass-dark border-b border-white/10 px-6 py-6 mt-4 transition-all duration-300">
        <nav class="flex flex-col space-y-4 text-xs tracking-[0.2em] font-medium uppercase text-[#FAF8F5]/90">
            <a href="#heritage" class="hover:text-[#C5A059] transition-colors py-2 border-b border-white/5">The Maison</a>
            <a href="#chef-doeuvres" class="hover:text-[#C5A059] transition-colors py-2 border-b border-white/5">Les Masterpieces</a>
            <a href="#discovery" class="hover:text-[#C5A059] transition-colors py-2 border-b border-white/5">Scent Finder</a>
            <a href="#atelier" class="hover:text-[#C5A059] transition-colors py-2 border-b border-white/5">Craftsmanship</a>
            <a href="#boutiques" class="hover:text-[#C5A059] transition-colors py-2 border-b border-white/5">Boutiques</a>
            <a href="#bespoke" class="text-center border border-white/20 text-white text-xs font-medium tracking-[0.2em] uppercase py-3 mt-2">
                Bespoke Atelier
            </a>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('glass-dark', 'py-4', 'border-b', 'border-white/10', 'shadow-2xl');
                header.classList.remove('py-6');
            } else {
                header.classList.remove('glass-dark', 'py-4', 'border-b', 'border-white/10', 'shadow-2xl');
                header.classList.add('py-6');
            }
        });

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
