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
                'icone' => 'imagens/lapis.png',
                // Controle do ícone de CIMA
                'icone_h' => '120px',
                'ilustracao' => 'imagens/tablet.png',
                'img_style' => 'width: 440px; right: -120px; bottom: -140px;',
                // Controle da imagem de BAIXO no hover
                'hover_w' => '220px',
            ],
            [
                'titulo' => 'Web & Product Design.',
                'sub' => 'UX/UI Design e Desenvolvimento Web.',
                'tags' => ['Software', 'Landing Pages', 'Ecommerce', 'Website', 'Responsive Web Design', 'UI/UX Development'],
                'icone' => 'imagens/aba.png',
                // Controle do ícone de CIMA
                'icone_h' => '120px',
                'ilustracao' => 'imagens/pc.png',
                'img_style' => 'width: 600px; right: -200px; bottom: -170px;',
                // Controle da imagem de BAIXO no hover
                'hover_w' => '260px',
            ],
            [
                'titulo' => 'Aplicativos Móveis.',
                'sub' => 'Design e Desenvolvimento de Aplicativos.',
                'tags' => ['Mobile App Design', 'Hybrid UI/UX Development'],
                'icone' => 'imagens/mobileanimado.png',
                // Controle do ícone de CIMA
                'icone_h' => '120px',
                'ilustracao' => 'imagens/mobile.png',
                'img_style' => 'width: 300px; right: -80px; bottom: -120px;',
                // Controle da imagem de BAIXO no hover
                'hover_w' => '160px',
            ],
        ];
    @endphp

    {{-- cards --}}
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;position:relative;z-index:1;">

        @foreach($servicos as $s)
            <div
                onmouseover="
                this.style.borderColor='rgba(255,255,255,0.3)';
                this.style.background='rgba(255,255,255,0.05)';
                this.style.transform='scale(1.02) translateY(-8px)';
                this.style.boxShadow='0 20px 50px rgba(255,255,255,0.08)';

                let img = this.querySelector('.img-hover-target');
                img.style.width = '{{ $s['hover_w'] }}';
                img.style.right = '50%';
                img.style.bottom = '40px';
                img.style.transform = 'translateX(50%)';
            "
                onmouseout="
                this.style.borderColor='rgba(255,255,255,0.06)';
                this.style.background='rgba(255,255,255,0.03)';
                this.style.transform='scale(1) translateY(0)';
                this.style.boxShadow='none';

                let img = this.querySelector('.img-hover-target');
                img.style.cssText = 'position: absolute; pointer-events: none; z-index: 1; max-width: none !important; transition: all 0.5s cubic-bezier(0.4,0,0.2,1); {{ $s['img_style'] }}';
            "
                style="
                background: rgba(255,255,255,0.03);
                border: 1px solid rgba(255,255,255,0.06);
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
                {{-- Conteúdo do Topo (Ícone, Títulos e Tags) --}}
                {{-- AQUI: Padding horizontal reduzido de 32px para 24px --}}
                <div style="padding: 32px 24px; position: relative; z-index: 2;">
                    {{-- ícone topo --}}
                    <div style="margin-bottom: 24px;">
                        <img src="{{ asset($s['icone']) }}" alt="" style="height:{{ $s['icone_h'] }};width:auto;object-fit:contain;">
                    </div>

                    {{-- texto --}}
                    <div>
                        <h3 style="font-size:1.3rem;font-weight:700;color:#fff;margin-bottom:8px;">{{ $s['titulo'] }}</h3>
                        <p style="font-size:12px;color:rgba(255,255,255,0.4);margin-bottom:20px;">{{ $s['sub'] }}</p>

                        {{-- AQUI: Gap reduzido para 4px --}}
                        <div style="display:flex;flex-wrap:wrap;gap:4px;">
                            @foreach($s['tags'] as $tag)
                                {{-- AQUI: Letter-spacing e padding interno reduzidos --}}
                                <span style="font-size:8px;font-weight:700;letter-spacing:0.3px;text-transform:uppercase;color:#0f0f1e;background:#fff;border-radius:100px;padding:4px 8px;">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- ilustração da base --}}
                <img class="img-hover-target" src="{{ asset($s['ilustracao']) }}" alt=""
                     style="position: absolute; {{ $s['img_style'] }} transition: all 0.5s cubic-bezier(0.4,0,0.2,1); object-fit: contain; pointer-events: none; z-index: 1; max-width: none !important;">

            </div>
        @endforeach
    </div>

</section>
