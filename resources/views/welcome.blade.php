@extends('layouts.app')

@section('title', 'Alveris | Haute Parfumerie & Artisanal Perfumery')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex items-center justify-center pt-32 pb-20 px-6 overflow-hidden bg-[#08080A]">
        <div class="max-w-5xl mx-auto text-center relative z-10 space-y-10">
            
            <!-- Subtitle Badge -->
            <div class="flex items-center justify-center gap-3">
                <span class="h-[1px] w-8 bg-[#C5A059]/30"></span>
                <span class="text-[10px] md:text-xs uppercase tracking-[0.4em] text-[#C5A059] font-medium">HAUTE PARFUMERIE • BESPOKE ATELIER</span>
                <span class="h-[1px] w-8 bg-[#C5A059]/30"></span>
            </div>

            <!-- Main Title -->
            <h1 class="font-serif text-4xl sm:text-6xl lg:text-7.5xl tracking-wide text-[#FAF8F5] leading-[1.15] font-normal max-w-4xl mx-auto">
                Crafting Timeless <span class="text-[#C5A059] italic font-serif">Olfactory</span> Masterpieces
            </h1>

            <!-- Editorial Subtext -->
            <p class="text-sm md:text-base text-[#A3A19B] font-light max-w-2xl mx-auto leading-relaxed tracking-wide">
                Born from rare natural extraits and aged artisanal maceration. Alveris elevates perfumery into an untouchable high art form, designed for connoisseurs of true luxury.
            </p>

            <!-- CTA Actions -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5">
                <a href="#chef-doeuvres" class="w-full sm:w-auto bg-[#C5A059] hover:bg-[#F4E0A5] text-[#08080A] text-xs font-semibold uppercase tracking-[0.25em] px-9 py-4 transition-all duration-300">
                    Explore Les Masterpieces
                </a>
                <a href="#heritage" class="w-full sm:w-auto border border-[#C5A059]/30 hover:border-[#C5A059] bg-white/5 hover:bg-white/10 text-[#FAF8F5] text-xs font-medium uppercase tracking-[0.25em] px-9 py-4 transition-all duration-300 backdrop-blur-md">
                    The Maison Heritage
                </a>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-60 hover:opacity-100 transition-opacity">
            <span class="text-[9px] uppercase tracking-[0.3em] text-[#C5A059]">Scroll</span>
            <div class="w-[1px] h-8 bg-[#C5A059]/30"></div>
        </div>
    </section>


    <div class="border-t border-[#C5A059]/10 max-w-7xl mx-auto"></div>


    <!-- SECTION 2: THE MAISON HERITAGE -->
    <section id="heritage" class="py-28 px-6 md:px-12 bg-[#08080A] relative">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <!-- Left Editorial Story -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="text-[10px] uppercase tracking-[0.35em] text-[#C5A059] font-medium">
                        Our Philosophy & Alchemy
                    </div>
                    
                    <h2 class="font-serif text-3xl md:text-5xl tracking-wide text-[#FAF8F5] leading-tight">
                        Crafted in Silence, <br>Defined by <span class="italic font-serif text-[#C5A059]">Sillage</span>.
                    </h2>
                    
                    <p class="text-xs md:text-sm text-[#A3A19B] font-light leading-relaxed">
                        In an era of mass-manufactured scents, Alveris stands as an Indonesian sanctuary for authentic olfactory alchemy. Inspired by the legendary perfume houses of Grasse and time-honored French maceration techniques, every flacon is meticulously crafted using the purest botanical extraits.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4 border-t border-[#C5A059]/15">
                        <div>
                            <h4 class="font-serif text-xl text-[#FAF8F5] mb-1">100% Pure</h4>
                            <p class="text-xs text-[#A3A19B] font-light">Rare natural raw extraits without synthetic fillers.</p>
                        </div>
                        <div>
                            <h4 class="font-serif text-xl text-[#FAF8F5] mb-1">6 Months</h4>
                            <p class="text-xs text-[#A3A19B] font-light">Slow oak barrel maceration for unmatched depth.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Atelier Showcase Image -->
                <div class="lg:col-span-6">
                    <div class="overflow-hidden bg-[#121216]">
                        <img src="{{ asset('images/atelier_craftsmanship.png') }}" alt="Alveris Atelier Craftsmanship" class="w-full h-auto object-cover grayscale contrast-125 hover:grayscale-0 hover:scale-105 transition-all duration-700 border border-white/5">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="border-t border-[#C5A059]/10 max-w-7xl mx-auto"></div>


    <!-- SECTION 3: LES CHEF-D'ŒUVRES (PRODUCTS SHOWCASE) -->
    <section id="chef-doeuvres" class="py-28 px-6 md:px-12 bg-[#0C0C0F] relative">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059] font-medium block">Private Collection</span>
                <h2 class="font-serif text-3xl md:text-5xl tracking-wide text-[#FAF8F5]">Les Chef-d'Œuvres</h2>
                <p class="text-xs md:text-sm text-[#A3A19B] font-light leading-relaxed">
                    Explore our master collection of Extraits de Parfum, each housed in bespoke crystal flacons hand-stamped with the Alveris monogram seal.
                </p>
            </div>

            <!-- Product Grid (6 Variants) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Product Card 1: Nuit Étoilée -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_nuit_etoilee.png') }}" alt="Nuit Étoilée Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Woody Amber / Nocturnal</span>
                                <span>Unisex</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Nuit Étoilée</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                An intoxicating nocturnal symphony of rare Cambodian Oud, smoked incense, and Damask rose petals soaked in French cognac.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Bergamot, Smoked Cognac</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Damask Rose, Wild Iris</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> Aged Cambodian Oud, Ambergris</div>
                        </div>

                        <button onclick="openNoteModal('Nuit Étoilée', 'Woody Amber (Unisex)', 'Rare Cambodian Oud, Smoked Cognac, Damask Rose', 'Uncompromisingly bold, nocturnal, and sensual with an extraordinary 18-hour sillage presence.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

                <!-- Product Card 2: Santal Impérial -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_santal_imperial.png') }}" alt="Santal Impérial Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Regal Woody / Velvet</span>
                                <span>Pour Homme</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Santal Impérial</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                A majestic composition anchored by rare Mysore Sandalwood, cardamom spice, and warm Madagascar vanilla pod.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Cardamom Pod, Violet Leaves</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Australian Cypress, Papyrus</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> Mysore Sandalwood, Bourbon Vanilla</div>
                        </div>

                        <button onclick="openNoteModal('Santal Impérial', 'Regal Woody (Pour Homme)', 'Mysore Sandalwood, Cardamom, Bourbon Vanilla', 'Velvety, sophisticated, and soothingly aristocratic. Ideal for quiet authority and evening receptions.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

                <!-- Product Card 3: Velours d'Or -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_velours_dor.png') }}" alt="Velours d'Or Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Floral Oriental / Luminous</span>
                                <span>Pour Femme</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Velours d'Or</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                A radiant golden veil crafted from handpicked Jasmine Sambac, golden saffron threads, and white cedarwood.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Saffron Threads, Bitter Almond</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Jasmine Sambac, Cedarwood</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> Golden Amber, Musk Accord</div>
                        </div>

                        <button onclick="openNoteModal('Velours d\'Or', 'Floral Oriental (Pour Femme)', 'Jasmine Sambac, Saffron Threads, Golden Amber', 'Radiant, shimmering, and opulently warm. Leaves an intoxicating trail of pure golden luxury.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

                <!-- Product Card 4: Virea -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_virea.png') }}" alt="Virea Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Fresh Botanical / Verdant</span>
                                <span>Pour Femme</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Virea</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                An enchanting botanical elixir featuring wild lily of the valley, green tea extraits, and crisp Mediterranean fig leaf.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Green Tea Extract, Bergamot Zest</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Wild Lily of the Valley, Fig Leaf</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> White Cedar, Dewy Moss Accord</div>
                        </div>

                        <button onclick="openNoteModal('Virea', 'Fresh Botanical (Pour Femme)', 'Lily of the Valley, Green Tea, Fig Leaf', 'Crisp, refreshing, and elegantly serene like a morning walk in a private royal botanical garden.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

                <!-- Product Card 5: Vareon -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_vareon.png') }}" alt="Vareon Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Leather Spice / Obsidian</span>
                                <span>Pour Homme</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Vareon</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                A commanding dark leather extrait infused with cracked black pepper, smoked vetiver, and rich Atlas cedar.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Pink Pepper, Cardamom Zest</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Tuscan Leather, Smoked Vetiver</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> Atlas Cedarwood, Roasted Tonka Bean</div>
                        </div>

                        <button onclick="openNoteModal('Vareon', 'Leather Spice (Pour Homme)', 'Black Leather, Smoked Vetiver, Atlas Cedar', 'Powerfully masculine, intense, and dark. Designed for confidence, charisma, and undeniable presence.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

                <!-- Product Card 6: Lumen -->
                <div class="group flex flex-col justify-between transition-all duration-500">
                    <div class="relative overflow-hidden bg-[#121216]/40 aspect-[4/5] flex items-center justify-center p-8 border border-white/5">
                        <img src="{{ asset('images/perfume_lumen.png') }}" alt="Lumen Extrait" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <div class="pt-6 space-y-4 flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-[9px] uppercase tracking-[0.2em] text-[#C5A059]">
                                <span>Radiant Citrus / Solar Amber</span>
                                <span>Unisex</span>
                            </div>
                            <h3 class="font-serif text-2xl text-[#FAF8F5] group-hover:text-[#C5A059] transition-colors mt-2">Lumen</h3>
                            <div class="text-[9px] text-[#A3A19B] tracking-wider uppercase mt-1">Extrait de Parfum</div>
                            <p class="text-xs text-[#A3A19B] font-light mt-3 leading-relaxed">
                                A brilliant solar nectar bursting with Calabrian bergamot, golden amber crystals, and sun-bathed white musk.
                            </p>
                        </div>

                        <!-- Olfactory Notes Breakdown -->
                        <div class="border-t border-white/5 pt-4 space-y-2 text-[11px] text-[#A3A19B]">
                            <div><strong class="text-[#FAF8F5] font-normal">Top:</strong> Calabrian Bergamot, Neroli Blossom</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Heart:</strong> Solar Jasmine, Pink Salt Accord</div>
                            <div><strong class="text-[#FAF8F5] font-normal">Base:</strong> White Amber Crystals, Cashmere Wood</div>
                        </div>

                        <button onclick="openNoteModal('Lumen', 'Radiant Citrus (Unisex)', 'Calabrian Bergamot, Solar Jasmine, White Amber', 'Bright, uplifting, and magnificently radiant. Encapsulates pure sunlight and luxurious warmth.')" class="w-full text-left border-b border-white/10 hover:border-[#C5A059] text-[#FAF8F5] hover:text-[#C5A059] text-[10px] font-semibold uppercase tracking-[0.2em] pb-2 transition-all duration-300">
                            Olfactory Profile &rarr;
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="border-t border-[#C5A059]/10 max-w-7xl mx-auto"></div>


    <!-- SECTION 4: INTERACTIVE SCENT FINDER CONSULTATION -->
    <section id="discovery" class="py-28 px-6 md:px-12 bg-[#08080A] relative">
        <div class="max-w-5xl mx-auto bg-[#121216]/40 border border-white/5 p-8 md:p-12 relative overflow-hidden">

            <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
                <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059]">Atelier Consultation</span>
                <h2 class="font-serif text-3xl md:text-4xl text-[#FAF8F5]">Discover Your Signature Sillage</h2>
                <p class="text-xs text-[#A3A19B] font-light">Select your desired aura to reveal your perfectly matched Alveris creation.</p>
            </div>

            <!-- Interactive Accord Selector Buttons (6 Variants) -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4 mb-10">
                <button onclick="selectAccord('nocturnal')" id="btn-nocturnal" class="accord-btn active border border-[#FAF8F5] bg-white/5 text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Nocturnal (Unisex)
                </button>
                <button onclick="selectAccord('regal')" id="btn-regal" class="accord-btn border border-white/10 text-[#A3A19B] hover:text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Regal Wood (Men)
                </button>
                <button onclick="selectAccord('luminous')" id="btn-luminous" class="accord-btn border border-white/10 text-[#A3A19B] hover:text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Golden Floral (Women)
                </button>
                <button onclick="selectAccord('botanical')" id="btn-botanical" class="accord-btn border border-white/10 text-[#A3A19B] hover:text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Fresh Botanical (Women)
                </button>
                <button onclick="selectAccord('leather')" id="btn-leather" class="accord-btn border border-white/10 text-[#A3A19B] hover:text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Dark Leather (Men)
                </button>
                <button onclick="selectAccord('solar')" id="btn-solar" class="accord-btn border border-white/10 text-[#A3A19B] hover:text-[#FAF8F5] text-[11px] uppercase tracking-[0.15em] py-3.5 px-4 transition-all duration-300">
                    Solar Citrus (Unisex)
                </button>
            </div>

            <!-- Result Box -->
            <div id="accord-result" class="bg-black/30 border border-white/5 p-8 flex flex-col md:flex-row items-center gap-8 transition-all duration-500">
                <img id="result-img" src="{{ asset('images/perfume_nuit_etoilee.png') }}" alt="Match Result" class="w-36 h-36 object-cover border border-white/5">
                <div class="space-y-3 text-center md:text-left flex-grow">
                    <span id="result-tag" class="text-[10px] uppercase tracking-[0.2em] text-[#C5A059]">Your Perfect Olfactory Match</span>
                    <h4 id="result-title" class="font-serif text-2xl text-[#FAF8F5]">Nuit Étoilée Extrait</h4>
                    <p id="result-desc" class="text-xs text-[#A3A19B] font-light leading-relaxed">
                        For those who command the night. Rich Cambodian Oud blended with smoked cognac creates an unforgettable, hypnotic aura.
                    </p>
                    <a href="#chef-doeuvres" class="inline-block border-b border-[#C5A059] text-[#C5A059] text-xs uppercase tracking-[0.2em] pb-1 hover:text-[#F4E0A5] transition-colors">
                        View Creation Details &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>


    <div class="border-t border-[#C5A059]/10 max-w-7xl mx-auto"></div>


    <!-- SECTION 5: CRAFTSMANSHIP & ATELIER PROCESS -->
    <section id="atelier" class="py-28 px-6 md:px-12 bg-[#0C0C0F]">
        <div class="max-w-7xl mx-auto space-y-16">
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059]">Artisanal Heritage</span>
                <h2 class="font-serif text-3xl md:text-5xl text-[#FAF8F5]">The Alchemy of Creation</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="border-t border-[#C5A059]/20 pt-6 space-y-3">
                    <span class="font-serif text-3xl text-[#C5A059]">I</span>
                    <h4 class="font-serif text-lg text-[#FAF8F5]">Rare Extraits</h4>
                    <p class="text-xs text-[#A3A19B] font-light leading-relaxed">Botanical extraits carefully sourced, inspired by dusk harvests in Grasse to preserve peak essential oils.</p>
                </div>
                <!-- Step 2 -->
                <div class="border-t border-[#C5A059]/20 pt-6 space-y-3">
                    <span class="font-serif text-3xl text-[#C5A059]">II</span>
                    <h4 class="font-serif text-lg text-[#FAF8F5]">Oak Maceration</h4>
                    <p class="text-xs text-[#A3A19B] font-light leading-relaxed">Inspired by French oak barrel aging, resting for 180 days to develop unmatched olfactory depth and clarity.</p>
                </div>
                <!-- Step 3 -->
                <div class="border-t border-[#C5A059]/20 pt-6 space-y-3">
                    <span class="font-serif text-3xl text-[#C5A059]">III</span>
                    <h4 class="font-serif text-lg text-[#FAF8F5]">Hand-Blown Flacons</h4>
                    <p class="text-xs text-[#A3A19B] font-light leading-relaxed">Individually inspected heavy crystal glass flacons crafted to protect the precious extraits from light.</p>
                </div>
                <!-- Step 4 -->
                <div class="border-t border-[#C5A059]/20 pt-6 space-y-3">
                    <span class="font-serif text-3xl text-[#C5A059]">IV</span>
                    <h4 class="font-serif text-lg text-[#FAF8F5]">Wax Stamped Seal</h4>
                    <p class="text-xs text-[#A3A19B] font-light leading-relaxed">Hand-sealed with gold wax carrying the signature Alveris monogram seal before departure.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION 6: BESPOKE ATELIER & BOUTIQUES -->
    <section id="bespoke" class="py-28 px-6 md:px-12 bg-[#08080A] relative">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <!-- Private Commission Form -->
            <div class="lg:col-span-7 bg-[#121216]/40 border border-white/5 p-8 md:p-12 space-y-8">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059]">Private Commission</span>
                    <h3 class="font-serif text-3xl text-[#FAF8F5] mt-1">Bespoke Olfactory Consultation</h3>
                    <p class="text-xs text-[#A3A19B] font-light mt-2">Commission your unique personal signature perfume formulated by our Master Perfumer.</p>
                </div>

                @if(session('success'))
                    <div class="bg-[#C5A059]/15 border border-[#C5A059] p-4 text-xs text-[#FAF8F5] font-light leading-relaxed flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#C5A059] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>{{ session('success') }}</div>
                    </div>
                @endif

                <form action="{{ route('bespoke.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] uppercase tracking-widest text-[#C5A059] mb-2">Full Name</label>
                            <input type="text" name="name" placeholder="Lord / Lady / Mr / Ms..." required class="w-full bg-[#08080A] border border-white/10 text-xs px-4 py-3 text-[#FAF8F5] focus:outline-none focus:border-[#C5A059] transition-colors">
                        </div>
                        <div>
                            <label class="block text-[10px] uppercase tracking-widest text-[#C5A059] mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="client@domain.com" required class="w-full bg-[#08080A] border border-white/10 text-xs px-4 py-3 text-[#FAF8F5] focus:outline-none focus:border-[#C5A059] transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-[#C5A059] mb-2">Preferred Consult Location</label>
                        <select name="location" class="w-full bg-[#08080A] border border-white/10 text-xs px-4 py-3 text-[#FAF8F5] focus:outline-none focus:border-[#C5A059] transition-colors">
                            <option value="Surabaya Atelier">Surabaya Atelier, Indonesia</option>
                            <option value="Virtual Private Lounge">Virtual Private Lounge (Worldwide)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-[#C5A059] mb-2">Desire & Olfactory Vision</label>
                        <textarea name="vision" rows="4" placeholder="Describe your preferred notes, occasions, or personal story..." class="w-full bg-[#08080A] border border-white/10 text-xs px-4 py-3 text-[#FAF8F5] focus:outline-none focus:border-[#C5A059] transition-colors"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#C5A059] hover:bg-[#F4E0A5] text-[#08080A] text-xs font-semibold uppercase tracking-[0.25em] py-4 transition-all duration-300">
                        Request Private Appointment
                    </button>
                </form>
            </div>

            <!-- Global Boutiques Showcase -->
            <div id="boutiques" class="lg:col-span-5 space-y-8 flex flex-col justify-between">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-[#C5A059]">Private Salons</span>
                    <h3 class="font-serif text-3xl text-[#FAF8F5] mt-1">Our Flagship Destinations</h3>
                    <p class="text-xs text-[#A3A19B] font-light mt-2 leading-relaxed">
                        Experience the world of Alveris. Book private scent rituals and personalized flacon consultations at our atelier or virtual masterclass.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="border-l-2 border-[#C5A059] pl-6 py-2 bg-[#121216]/50">
                        <h4 class="font-serif text-lg text-[#FAF8F5]">Surabaya</h4>
                        <p class="text-xs text-[#A3A19B] font-light">Indonesia</p>
                    </div>
                    <div class="border-l-2 border-[#C5A059]/30 pl-6 py-2 bg-[#121216]/50">
                        <h4 class="font-serif text-lg text-[#FAF8F5]">Virtual Private Lounge</h4>
                        <p class="text-xs text-[#A3A19B] font-light">Worldwide Online Bespoke Consultations</p>
                    </div>
                    <div class="border-l-2 border-[#C5A059]/30 pl-6 py-2 bg-[#121216]/50">
                        <h4 class="font-serif text-lg text-[#FAF8F5]">Future Expansion</h4>
                        <p class="text-xs text-[#A3A19B] font-light">Paris &bull; London &bull; Tokyo (Coming Soon)</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- OLFACTORY NOTE MODAL -->
    <div id="note-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-6">
        <div class="bg-[#121216] border border-white/10 max-w-lg w-full p-8 space-y-6 relative animate-fadeIn">
            <button onclick="closeNoteModal()" class="absolute top-4 right-4 text-[#A3A19B] hover:text-[#FAF8F5] text-xl font-light">&times;</button>
            
            <div class="border-b border-[#C5A059]/20 pb-4">
                <span id="modal-accord" class="text-[10px] uppercase tracking-[0.2em] text-[#C5A059]">Extrait de Parfum</span>
                <h3 id="modal-title" class="font-serif text-3xl text-[#FAF8F5] mt-1">Perfume Title</h3>
            </div>

            <div class="space-y-4 text-xs text-[#A3A19B] font-light leading-relaxed">
                <div>
                    <strong class="text-[#FAF8F5] font-normal block text-[11px] uppercase tracking-widest text-[#C5A059] mb-1">Dominant Ingredients</strong>
                    <p id="modal-ingredients">Ingredients list</p>
                </div>
                <div>
                    <strong class="text-[#FAF8F5] font-normal block text-[11px] uppercase tracking-widest text-[#C5A059] mb-1">Sillage & Character</strong>
                    <p id="modal-character">Character description</p>
                </div>
            </div>

            <button onclick="closeNoteModal()" class="w-full bg-[#C5A059] hover:bg-[#F4E0A5] text-[#08080A] text-xs font-semibold uppercase tracking-[0.2em] py-3 transition-colors">
                Close Profile
            </button>
        </div>
    </div>

    <!-- Interactive Scripts -->
    <script>
        function selectAccord(type) {
            const btns = document.querySelectorAll('.accord-btn');
            btns.forEach(b => {
                b.classList.remove('active', 'border-white/10', 'bg-white/5', 'text-[#FAF8F5]');
                b.classList.add('border-white/10', 'text-[#A3A19B]');
            });

            const activeBtn = document.getElementById('btn-' + type);
            activeBtn.classList.add('active', 'border-white/10', 'bg-white/5', 'text-[#FAF8F5]');
            activeBtn.classList.remove('border-white/10', 'text-[#A3A19B]');

            const resultImg = document.getElementById('result-img');
            const resultTitle = document.getElementById('result-title');
            const resultDesc = document.getElementById('result-desc');

            if (type === 'nocturnal') {
                resultImg.src = "{{ asset('images/perfume_nuit_etoilee.png') }}";
                resultTitle.innerText = "Nuit Étoilée Extrait (Unisex)";
                resultDesc.innerText = "For those who command the night. Rich Cambodian Oud blended with smoked cognac creates an unforgettable, hypnotic aura.";
            } else if (type === 'regal') {
                resultImg.src = "{{ asset('images/perfume_santal_imperial.png') }}";
                resultTitle.innerText = "Santal Impérial Extrait (Pour Homme)";
                resultDesc.innerText = "Velvety Mysore Sandalwood infused with Madagascar vanilla and cardamom. Designed for quiet authority and evening elegance.";
            } else if (type === 'luminous') {
                resultImg.src = "{{ asset('images/perfume_velours_dor.png') }}";
                resultTitle.innerText = "Velours d'Or Extrait (Pour Femme)";
                resultDesc.innerText = "A radiant golden aura of Jasmine Sambac and precious saffron threads. Leaves an intoxicating trail of pure warmth.";
            } else if (type === 'botanical') {
                resultImg.src = "{{ asset('images/perfume_virea.png') }}";
                resultTitle.innerText = "Virea Extrait (Pour Femme)";
                resultDesc.innerText = "Enchanting botanical elixir featuring wild lily of the valley, green tea extraits, and crisp Mediterranean fig leaf.";
            } else if (type === 'leather') {
                resultImg.src = "{{ asset('images/perfume_vareon.png') }}";
                resultTitle.innerText = "Vareon Extrait (Pour Homme)";
                resultDesc.innerText = "Commanding dark leather infused with cracked black pepper, smoked vetiver, and rich Atlas cedar.";
            } else if (type === 'solar') {
                resultImg.src = "{{ asset('images/perfume_lumen.png') }}";
                resultTitle.innerText = "Lumen Extrait (Unisex)";
                resultDesc.innerText = "Brilliant solar nectar bursting with Calabrian bergamot, golden amber crystals, and sun-bathed white musk.";
            }
        }

        function openNoteModal(title, accord, ingredients, character) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-accord').innerText = accord + " • Extrait de Parfum";
            document.getElementById('modal-ingredients').innerText = ingredients;
            document.getElementById('modal-character').innerText = character;
            const modal = document.getElementById('note-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeNoteModal() {
            const modal = document.getElementById('note-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>

@endsection
