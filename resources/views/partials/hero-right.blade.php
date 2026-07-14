<div class="w-full h-screen bg-[#0f0f1e] relative overflow-hidden">

    <div class="particle" style="width:6px;height:6px;top:15%;left:20%;--dur:6s;--delay:0s;"></div>
    <div class="particle" style="width:4px;height:4px;top:40%;left:70%;--dur:8s;--delay:1s;"></div>
    <div class="particle" style="width:8px;height:8px;top:70%;left:35%;--dur:5s;--delay:2s;"></div>
    <div class="particle" style="width:3px;height:3px;top:25%;left:55%;--dur:7s;--delay:0.5s;"></div>
    <div class="particle" style="width:5px;height:5px;top:80%;left:75%;--dur:9s;--delay:1.5s;"></div>

    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(90,60,200,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(90,60,200,0.04) 1px, transparent 1px); background-size: 52px 52px;"></div>
    <div class="absolute" style="bottom:-80px;left:50%;transform:translateX(-50%);width:600px;height:400px;background:radial-gradient(ellipse,rgba(90,40,200,0.18) 0%,transparent 70%);pointer-events:none;"></div>

    {{-- TOGGLE PT/EN --}}
    <div class="absolute top-8 right-10 z-30 flex items-center gap-1 text-[11px] font-bold tracking-widest uppercase anim-toggle">
        <button id="btn-pt" onclick="setLang('pt')" class="px-3 py-1 rounded transition-all duration-200 text-white" style="background: linear-gradient(135deg, #7c3fff, #5b21b6); border: 1px solid rgba(180,130,255,0.3);">PT</button>
        <span class="text-purple-500/40">/</span>
        <button id="btn-en" onclick="setLang('en')" class="px-3 py-1 rounded transition-all duration-200 text-purple-400/50 hover:text-white">EN</button>
    </div>

    {{-- BADGE OPEN TO WORK --}}
    <div class="absolute z-20" style="top: 22%; left: 14%; animation: fadeIn 0.8s ease 1.5s forwards; opacity: 0;">
        <div style="position:relative; display:flex; align-items:center; gap:10px; padding:10px 18px; background:rgba(14,14,24,0.75); border:1px solid rgba(74,222,128,0.25); border-radius:100px; backdrop-filter:blur(12px); animation:badgePulse 3s ease-in-out infinite;">
            <span style="position:relative; display:inline-flex; align-items:center; justify-content:center;">
                <span style="position:absolute; width:18px; height:18px; border-radius:50%; background:rgba(74,222,128,0.25); animation:pingGreen 1.5s ease-in-out infinite;"></span>
                <span style="width:8px; height:8px; border-radius:50%; background:#4ade80; box-shadow:0 0 8px rgba(74,222,128,0.8); display:inline-block; position:relative;"></span>
            </span>
            <span style="font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,0.85);">Open to work</span>
        </div>
    </div>

    {{-- DEVELOPER fundo --}}
    <img src="{{ asset('imagens/developer-reto.webp') }}" alt="" class="absolute pointer-events-none select-none" style="top:48%; left:50%; transform:translate(-50%,-30%); width:80%; opacity:0.08; filter:invert(1) sepia(1) saturate(2) hue-rotate(220deg); animation:developerPulse 4s ease-in-out infinite;">

    {{-- glow de fundo radial --}}
    <div class="absolute z-0" style="bottom:0; left:50%; transform:translateX(-50%); width:100%; height:100%; background:radial-gradient(ellipse 60% 70% at 55% 60%, rgba(100,40,220,0.35) 0%, rgba(60,20,160,0.15) 40%, transparent 70%); pointer-events:none;"></div>

    {{-- LUZ vindo do badge --}}
    <div class="absolute z-0" style="top:18%; left:14%; width:420px; height:420px; background:radial-gradient(ellipse 80% 70% at 20% 10%, rgba(74,222,128,0.12) 0%, rgba(74,222,128,0.05) 35%, transparent 70%); pointer-events:none; transform:rotate(25deg); transform-origin:top left; filter:blur(8px); animation:lightPulse 3s ease-in-out infinite;"></div>
    <div class="absolute z-0" style="top:24%; left:16%; width:2px; height:280px; background:linear-gradient(to bottom, rgba(74,222,128,0.15), transparent); transform:rotate(35deg); transform-origin:top center; pointer-events:none; filter:blur(2px); animation:lightPulse 3s ease-in-out infinite;"></div>
    <div class="absolute z-0" style="top:24%; left:17%; width:2px; height:240px; background:linear-gradient(to bottom, rgba(74,222,128,0.1), transparent); transform:rotate(55deg); transform-origin:top center; pointer-events:none; filter:blur(3px); animation:lightPulse 3s ease-in-out 0.5s infinite;"></div>
    <div class="absolute z-0" style="top:24%; left:15%; width:2px; height:200px; background:linear-gradient(to bottom, rgba(74,222,128,0.08), transparent); transform:rotate(15deg); transform-origin:top center; pointer-events:none; filter:blur(2px); animation:lightPulse 3s ease-in-out 1s infinite;"></div>

    {{-- FOTO --}}
    <div class="absolute z-10 hero-photo-wrap" style="bottom:0; left:42%; transform:translateX(-50%);">
        <img src="{{ asset('imagens/matheus-de-paulo.webp') }}" alt="Matheus de Paulo" class="hero-photo block" style="height:100vh; max-height:880px; object-fit:contain; object-position:bottom; filter:brightness(0.8) contrast(1.05) drop-shadow(0 0 40px rgba(90,40,220,0.3)); mask-image:linear-gradient(to bottom, black 55%, transparent 100%); -webkit-mask-image:linear-gradient(to bottom, black 55%, transparent 100%);">
    </div>

    {{-- CARD STATS --}}
    <div class="absolute z-20" style="bottom:32px; left:38%; transform:translateX(-10%); background:rgba(10,10,20,0.88); border:1px solid rgba(120,80,220,0.3); backdrop-filter:blur(20px); border-radius:20px; display:flex; overflow:hidden; animation:fadeUp 0.6s ease 2.5s forwards; opacity:0; box-shadow:0 8px 40px rgba(90,40,200,0.2), inset 0 1px 0 rgba(255,255,255,0.05);">
        <div style="position:absolute; top:0; left:20%; right:20%; height:1px; background:linear-gradient(to right, transparent, rgba(168,85,247,0.6), transparent);"></div>
        <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; padding:28px 52px; border-right:1px solid rgba(120,80,220,0.2);">
            <span style="font-size:9px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:rgba(168,85,247,0.6); margin-bottom:10px;">Experiência</span>
            <span class="font-bebas" style="font-size:4rem; line-height:1; color:#a855f7; text-shadow:0 0 20px rgba(168,85,247,0.5);">+2</span>
            <span style="font-size:12px; font-weight:600; color:rgba(255,255,255,0.5); margin-top:8px; letter-spacing:1px; text-transform:uppercase;">Anos</span>
        </div>
        <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; padding:28px 52px;">
            <span style="font-size:9px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:rgba(255,255,255,0.35); margin-bottom:10px;">Projetos</span>
            <span class="font-bebas" style="font-size:4rem; line-height:1; color:#ffffff; text-shadow:0 0 20px rgba(255,255,255,0.15);">+30</span>
            <span style="font-size:12px; font-weight:600; color:rgba(255,255,255,0.5); margin-top:8px; letter-spacing:1px; text-transform:uppercase;">Entregues</span>
        </div>
        <div style="position:absolute; bottom:0; left:20%; right:20%; height:1px; background:linear-gradient(to right, transparent, rgba(120,80,220,0.4), transparent);"></div>
    </div>

    {{-- MOUSE SCROLL --}}
    <div class="absolute z-20" style="bottom:20px; left:20%; transform:translateX(-50%); animation:fadeIn 1s ease 3s forwards; opacity:0;">
        <div style="display:flex; flex-direction:column; align-items:center; gap:6px;">
            <div style="width:22px; height:34px; border:2px solid rgba(140,80,255,0.35); border-radius:12px; position:relative;">
                <div style="width:3px; height:6px; background:#a855f7; border-radius:2px; position:absolute; top:5px; left:50%; transform:translateX(-50%); animation:mouseScroll 1.5s ease-in-out infinite;"></div>
            </div>
            <span style="font-size:8px; letter-spacing:3px; text-transform:uppercase; color:rgba(168,85,247,0.3);">scroll</span>
        </div>
    </div>

</div>
