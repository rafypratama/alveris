<footer class="bg-[#050507] border-t border-white/10 pt-20 pb-12 text-[#FAF8F5]/80 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        <!-- VIP Newsletter Section -->
        <div class="border-b border-white/5 pb-16 mb-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-6">
                <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059] font-medium block mb-2">Exclusive Circle</span>
                <h3 class="font-serif text-2xl md:text-3xl tracking-wide text-[#FAF8F5]">Le Club Alveris</h3>
                <p class="text-xs text-[#A3A19B] mt-2 max-w-md font-light leading-relaxed">
                    Subscribe to receive private invitations to limited-edition extraits, private atelier tastings, and private olfactory reveals.
                </p>
            </div>
            <div class="lg:col-span-6">
                <form onsubmit="event.preventDefault(); alert('Bienvenue au Club Alveris. You have been added to our private guestlist.');" class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Enter your private email address" required class="bg-[#121216] border border-white/10 text-xs px-5 py-3.5 text-[#FAF8F5] focus:outline-none focus:border-[#C5A059] flex-grow transition-colors">
                    <button type="submit" class="bg-[#C5A059] hover:bg-[#F4E0A5] text-[#08080A] text-xs font-semibold uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 whitespace-nowrap">
                        Join Circle
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Footer Links Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo_alveris.png') }}" alt="Alveris Monogram Logo" class="h-10 w-auto">
                    <div class="flex flex-col">
                        <span class="font-serif text-2xl tracking-[0.25em] text-[#FAF8F5] font-semibold uppercase">Alveris</span>
                        <span class="text-[9px] tracking-[0.4em] text-[#C5A059] uppercase font-light -mt-1">Haute Parfumerie</span>
                    </div>
                </div>
                <p class="text-xs text-[#A3A19B] font-light leading-relaxed max-w-sm pt-2">
                    An independent Indonesian haute perfumery house dedicated to crafting timeless olfactory masterpieces, inspired by French artisanal maceration and Grasse heritage.
                </p>
                <div class="pt-2 text-xs text-[#C5A059] tracking-widest uppercase">
                    Indonesia / Inspired by Grasse & Paris
                </div>
            </div>

            <!-- Boutiques Column -->
            <div>
                <h4 class="font-serif text-sm tracking-widest text-[#FAF8F5] uppercase mb-4 text-[#C5A059]">Ateliers</h4>
                <ul class="space-y-2.5 text-xs text-[#A3A19B] font-light">
                    <li><strong class="text-[#FAF8F5] font-normal">Surabaya:</strong> Indonesia</li>
                    <li><strong class="text-[#FAF8F5] font-normal">Online:</strong> Virtual Private Lounge</li>
                    <li><strong class="text-[#FAF8F5] font-normal">Global:</strong> Expansion Coming Soon</li>
                </ul>
            </div>

            <!-- Collections Column -->
            <div>
                <h4 class="font-serif text-sm tracking-widest text-[#FAF8F5] uppercase mb-4 text-[#C5A059]">Creations</h4>
                <ul class="space-y-2 text-xs text-[#A3A19B] font-light">
                    <li><a href="#chef-doeuvres" class="hover:text-[#C5A059] transition-colors">Nuit Étoilée Extrait</a></li>
                    <li><a href="#chef-doeuvres" class="hover:text-[#C5A059] transition-colors">Santal Impérial</a></li>
                    <li><a href="#chef-doeuvres" class="hover:text-[#C5A059] transition-colors">Velours d'Or</a></li>
                    <li><a href="#bespoke" class="hover:text-[#C5A059] transition-colors">Bespoke Private Elixirs</a></li>
                </ul>
            </div>

            <!-- House Column -->
            <div>
                <h4 class="font-serif text-sm tracking-widest text-[#FAF8F5] uppercase mb-4 text-[#C5A059]">The House</h4>
                <ul class="space-y-2 text-xs text-[#A3A19B] font-light">
                    <li><a href="#heritage" class="hover:text-[#C5A059] transition-colors">The Maison Heritage</a></li>
                    <li><a href="#atelier" class="hover:text-[#C5A059] transition-colors">Artisanal Craftsmanship</a></li>
                    <li><a href="#discovery" class="hover:text-[#C5A059] transition-colors">Scent Profile Finder</a></li>
                    <li><a href="#bespoke" class="hover:text-[#C5A059] transition-colors">Private Consultations</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright & Bottom Links -->
        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-[11px] text-[#A3A19B] font-light">
            <p>&copy; {{ date('Y') }} Alveris Haute Parfumerie S.A. All rights reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-[#C5A059] transition-colors">Privacy Policy</a>
                <span>&bull;</span>
                <a href="#" class="hover:text-[#C5A059] transition-colors">Terms of Atelier</a>
                <span>&bull;</span>
                <a href="#" class="hover:text-[#C5A059] transition-colors">Client Care</a>
            </div>
        </div>
    </div>
</footer>
