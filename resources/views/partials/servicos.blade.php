<section id="servicos" style="padding: 100px 64px; position: relative; z-index: 0; background: #0f0f1e; border-top: 1px solid rgba(120,80,220,0.15); overflow: hidden;">

    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(90,60,200,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(90,60,200,0.04) 1px,transparent 1px);background-size:52px 52px;pointer-events:none;"></div>

    {{-- SERVICES fundo --}}
    <img src="{{ asset('imagens/services.webp') }}" alt="" class="absolute pointer-events-none select-none" style="top:50%; left:50%; transform:translate(-50%,-50%); width:80%; opacity:0.06; filter:invert(1) sepia(1) saturate(2) hue-rotate(220deg); animation:sectionBgPulse 4s ease-in-out infinite; z-index:-1;">

    {{-- header --}}
    <div style="position:relative;z-index:1;margin-bottom:56px;">
        <span style="font-size:10px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:rgba(168,85,247,0.6);">Serviços</span>
        <h2 style="font-size:2.8rem;font-weight:700;color:#fff;line-height:1.15;margin-top:8px;max-width:480px;">
            Sou especializado em transformar ideias criativas em realidades digitais
        </h2>
        <p style="font-size:13px;color:rgba(255,255,255,0.4);line-height:1.7;margin-top:20px;max-width:380px;">
            Se você está em busca de um site elegante e moderno ou de uma aplicação web complexa, tenho as habilidades e a experiência necessárias para transformar sua visão em realidade.
        </p>
    </div>

    @php
        $servicos = [
            [
                'titulo' => 'Design Gráfico.',
                'sub' => 'Branding e ilustrações.',
                'tags' => ['Branding', 'Visual Identity', 'Digital Illustration'],
                'emoji' => '✏️',
                'device' => 'tablet',
                'destaque' => false,
            ],
            [
                'titulo' => 'Web & Product Design.',
                'sub' => 'UX/UI Design e Desenvolvimento Web.',
                'tags' => ['Software', 'Landing Pages', 'Ecommerce', 'Website', 'Responsive Web Design', 'UI/UX Development'],
                'emoji' => '🖥️',
                'device' => 'desktop',
                'destaque' => true,
            ],
            [
                'titulo' => 'Aplicativos Móveis.',
                'sub' => 'Design e Desenvolvimento de Aplicativos.',
                'tags' => ['Mobile App Design', 'Hybrid UI/UX Development'],
                'emoji' => '📱',
                'device' => 'mobile',
                'destaque' => false,
            ],
        ];
    @endphp

    {{-- cards --}}
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;position:relative;z-index:1;">

        @foreach($servicos as $s)
            <div
                onmouseover="
                this.style.borderColor='rgba(168,85,247,0.4)';
                this.style.transform='translateY(-6px)';
                this.style.boxShadow='0 24px 60px rgba(0,0,0,0.4)';
                this.querySelector('.device-wrap').style.transform='translateY(-16px) scale(0.9)';
                this.querySelector('.device-wrap').style.opacity='0.5';
            "
                onmouseout="
                this.style.transform='translateY(0)';
                this.style.boxShadow='none';
                this.querySelector('.device-wrap').style.transform='translateY(0) scale(1)';
                this.querySelector('.device-wrap').style.opacity='1';
            "
                style="
                background: {{ $s['destaque'] ? 'rgba(124,63,255,0.07)' : 'rgba(255,255,255,0.03)' }};
                border: 1px solid {{ $s['destaque'] ? 'rgba(168,85,247,0.2)' : 'rgba(255,255,255,0.06)' }};
                border-radius: 20px;
                overflow: hidden;
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
                height: 520px;
                display: flex;
                flex-direction: column;
                position: relative;
            "
            >
                {{-- topo com ícone --}}
                <div style="padding:32px 32px 0 32px;">
                    <div style="width:60px;height:60px;border-radius:14px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;font-size:26px;">
                        {{ $s['emoji'] }}
                    </div>
                </div>

                {{-- texto --}}
                <div style="padding:32px 32px 0 32px;flex:1;">
                    <h3 style="font-size:1.3rem;font-weight:700;color:#fff;margin-bottom:8px;">{{ $s['titulo'] }}</h3>
                    <p style="font-size:12px;color:rgba(255,255,255,0.4);margin-bottom:20px;">{{ $s['sub'] }}</p>
                    <div style="display:flex;flex-wrap:wrap;gap:6px;">
                        @foreach($s['tags'] as $tag)
                            <span style="font-size:8px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.55);border:1px solid rgba(255,255,255,0.12);border-radius:100px;padding:4px 10px;">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- device cortado na base --}}
                <div class="device-wrap" style="
                transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
                display:flex;
                justify-content:center;
                align-items:flex-end;
                overflow:hidden;
                height:180px;
                padding:0 20px;
            ">
                    @if($s['device'] === 'tablet')
                        <svg width="220" height="170" viewBox="0 0 220 170" fill="none" style="margin-bottom:-30px;">
                            <rect x="10" y="10" width="200" height="150" rx="14" fill="rgba(30,30,40,0.9)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                            <rect x="22" y="22" width="176" height="118" rx="5" fill="rgba(20,20,30,0.9)" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                            <circle cx="110" cy="166" r="6" fill="rgba(255,255,255,0.2)"/>
                            <rect x="36" y="36" width="80" height="7" rx="3" fill="rgba(255,255,255,0.12)"/>
                            <rect x="36" y="50" width="55" height="5" rx="2" fill="rgba(255,255,255,0.07)"/>
                            <rect x="36" y="68" width="148" height="60" rx="5" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                        </svg>

                    @elseif($s['device'] === 'desktop')
                        <div style="display:flex;gap:12px;align-items:flex-end;margin-bottom:-20px;">
                            <svg width="200" height="155" viewBox="0 0 200 155" fill="none">
                                <rect x="5" y="5" width="190" height="120" rx="10" fill="rgba(30,30,40,0.9)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                                <rect x="15" y="15" width="170" height="100" rx="5" fill="rgba(20,20,30,0.9)" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                                <rect x="75" y="127" width="50" height="8" rx="4" fill="rgba(255,255,255,0.15)"/>
                                <rect x="55" y="135" width="90" height="6" rx="3" fill="rgba(255,255,255,0.1)"/>
                                <rect x="25" y="25" width="90" height="7" rx="3" fill="rgba(255,255,255,0.12)"/>
                                <rect x="25" y="38" width="60" height="5" rx="2" fill="rgba(255,255,255,0.07)"/>
                                <rect x="25" y="54" width="150" height="52" rx="5" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            </svg>
                            <svg width="90" height="120" viewBox="0 0 90 120" fill="none" style="margin-bottom:20px;">
                                <rect x="5" y="5" width="80" height="110" rx="10" fill="rgba(30,30,40,0.9)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                                <rect x="13" y="16" width="64" height="88" rx="5" fill="rgba(20,20,30,0.9)" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                                <rect x="30" y="10" width="30" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
                                <circle cx="45" cy="110" r="5" fill="rgba(255,255,255,0.15)"/>
                            </svg>
                        </div>

                    @else
                        <div style="display:flex;gap:10px;align-items:flex-end;margin-bottom:-20px;">
                            <svg width="75" height="140" viewBox="0 0 75 140" fill="none">
                                <rect x="5" y="5" width="65" height="130" rx="12" fill="rgba(30,30,40,0.9)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                                <rect x="12" y="18" width="51" height="100" rx="5" fill="rgba(20,20,30,0.9)" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                                <circle cx="37" cy="128" r="5" fill="rgba(255,255,255,0.2)"/>
                                <rect x="27" y="10" width="21" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
                                <rect x="18" y="28" width="39" height="5" rx="2" fill="rgba(255,255,255,0.1)"/>
                                <rect x="18" y="40" width="28" height="4" rx="2" fill="rgba(255,255,255,0.06)"/>
                                <rect x="18" y="54" width="39" height="50" rx="4" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            </svg>
                            <svg width="58" height="110" viewBox="0 0 58 110" fill="none" style="margin-bottom:10px;">
                                <rect x="4" y="4" width="50" height="102" rx="10" fill="rgba(30,30,40,0.9)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
                                <rect x="10" y="15" width="38" height="78" rx="4" fill="rgba(20,20,30,0.9)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                                <circle cx="29" cy="98" r="4" fill="rgba(255,255,255,0.15)"/>
                            </svg>
                        </div>
                    @endif
                </div>

            </div>
        @endforeach
    </div>

</section>
