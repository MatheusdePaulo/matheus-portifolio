<section id="sobre" style="padding: 120px 32px 120px 48px; position: relative; z-index: 0; background: #0f0f1e; border-top: 1px solid rgba(120,80,220,0.15); overflow: hidden;">

    {{-- fundo --}}
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 50%, rgba(108,55,255,0.08) 0%, transparent 70%);pointer-events:none;"></div>
    <div style="position:absolute;inset:0;" class="sobre-grid"></div>

    {{-- ABOUT fundo --}}
    <img src="{{ asset('imagens/abount.webp') }}" alt="" class="absolute pointer-events-none select-none" style="top:50%; left:50%; transform:translate(-50%,-50%); width:80%; opacity:0.06; filter:invert(1) sepia(1) saturate(2) hue-rotate(220deg); animation:sectionBgPulse 4s ease-in-out infinite; z-index:-1;">

    {{-- header centralizado --}}
    <div style="text-align:center;margin-bottom:72px;position:relative;z-index:1;">
        <span style="font-size:10px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:rgba(168,85,247,0.6);">Sobre</span>
        <h2 class="font-bebas" style="font-size:3.5rem;color:#fff;letter-spacing:1px;line-height:1;margin-top:8px;">Paixão, Criatividade e Código</h2>
    </div>

    {{-- conteúdo --}}
    <div style="display:grid;grid-template-columns:340px 1fr;gap:40px;align-items:center;position:relative;z-index:1;max-width:900px;margin:0 auto;">

        {{-- ESQUERDA — foto + personagens --}}
        <div style="position:relative; width:320px; z-index:2; margin-top:60px; margin-bottom:60px;">

            {{-- label CRIATIVIDADE — acima da moldura --}}
            <div style="position:absolute; top:-28px; right:0; z-index:6;">
                <span style="font-size:11px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:rgba(255,255,255,0.7);">Criatividade</span>
            </div>

            {{-- label LÓGICA — abaixo da moldura --}}
            <div style="position:absolute; bottom:-25px; left:27px; z-index:6;">
                <span style="font-size:11px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:rgba(255,255,255,0.7);">Lógica</span>
            </div>

            {{-- personagem CRIATIVIDADE — sobrepondo borda superior direita --}}
            <div style="position:absolute;top:-15px;right:-20px;z-index:6;animation:floatY 3s ease-in-out infinite;">
                <img src="{{ asset('imagens/personagem-caneta.webp') }}" alt="Criatividade"
                     style="width:110px;filter:drop-shadow(0 4px 12px rgba(0,0,0,0.5));">
            </div>

            {{-- personagem LÓGICA — sobrepondo borda inferior esquerda --}}
            <div style="position:absolute;bottom:-84px;left:-65px;z-index:6;">
                <img src="{{ asset('imagens/personagem-pc.webp') }}" alt="Lógica"
                     style="width:110px;filter:drop-shadow(0 4px 12px rgba(0,0,0,0.8));animation:walkSway 6.6s ease-in-out infinite;transform-origin:bottom center;">
            </div>

            {{-- foto com moldura --}}
            <div style="position:relative;border-radius:20px;overflow:hidden;border:1px solid rgba(124,63,255,0.3);box-shadow:0 0 24px rgba(124,63,255,0.15);">
                <div style="border-radius:18px;overflow:hidden;position:relative;">

                    {{-- fundo escuro roxo --}}
                    <div style="position:absolute;inset:0;background:linear-gradient(135deg,#1a0538,#0d0220,#2a0f4a);z-index:0;"></div>

                    {{-- raios cartoon — atrás do pescoço/ombro direito --}}
                    <div style="position:absolute;z-index:1;top:35%;right:30%;">
                        <svg width="60" height="80" viewBox="0 0 60 80" fill="none">
                            <path d="M35 2 L15 38 L28 38 L10 78 L45 32 L30 32 Z" fill="white" stroke="black" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div style="position:absolute;z-index:1;top:42%;right:20%;">
                        <svg width="40" height="54" viewBox="0 0 40 54" fill="none">
                            <path d="M24 2 L10 26 L19 26 L7 52 L30 22 L20 22 Z" fill="white" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div style="position:absolute;z-index:1;top:30%;right:18%;">
                        <svg width="28" height="38" viewBox="0 0 28 38" fill="none">
                            <path d="M17 2 L7 18 L13 18 L5 36 L21 16 L14 16 Z" fill="white" stroke="black" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    {{-- foto com fade na base --}}
                    <img src="{{ asset('imagens/perfil-gordinho.webp') }}" alt="Matheus de Paulo"
                         style="width:100%;height:420px;object-fit:cover;object-position:center 15%;display:block;position:relative;z-index:2;mask-image:linear-gradient(to bottom, black 55%, transparent 100%);-webkit-mask-image:linear-gradient(to bottom, black 55%, transparent 100%);">

                </div>
            </div>
        </div>

        {{-- DIREITA — texto --}}
        <div style="display:flex;flex-direction:column;gap:20px;max-width:560px;">

            <p style="font-size:16px;line-height:1.9;color:rgba(220,210,255,0.75);font-weight:300;">
                Olá, eu sou o <span style="color:#fff;font-weight:600;">Matheus</span>,
                <span style="color:#a855f7;font-weight:600;">Desenvolvedor Full Stack com mais de 2 anos de experiência</span>
                em aplicações web escaláveis utilizando PHP/Laravel, React e Tailwind CSS.
            </p>

            <p style="font-size:16px;line-height:1.9;color:rgba(220,210,255,0.6);font-weight:300;">
                Tenho experiência no desenvolvimento de <span style="color:#fff;font-weight:500;">APIs REST, sistemas administrativos, automações</span> e aplicações orientadas a dados, atuando em projetos reais com foco em performance, organização de código e <span style="color:#fff;font-weight:500;">resolução de problemas de negócio.</span>
            </p>

            <p style="font-size:16px;line-height:1.9;color:rgba(220,210,255,0.6);font-weight:300;">
                Além do backend, atuo também como <span style="color:#fff;font-weight:500;">Designer UI/UX</span>. Entrego produtos que unem código limpo e interfaces que cativam. Do conceito ao deploy, sem depender de terceiros.
            </p>

            <div style="width:100%;height:1px;background:linear-gradient(to right,rgba(168,85,247,0.3),transparent);margin:4px 0;"></div>

            {{-- infos --}}
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                @foreach([
                    ['Localização', 'Ceará, Brasil'],
                    ['Disponibilidade', 'Remoto ou presencial'],
                    ['Foco atual', 'Laravel · React · UI/UX'],
                    ['Idiomas', 'Português · Inglês'],
                ] as $info)
                    <div style="padding:12px 16px;background:rgba(255,255,255,0.02);border:1px solid rgba(168,85,247,0.1);border-radius:10px;">
                        <div style="font-size:9px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(168,85,247,0.5);margin-bottom:4px;">{{ $info[0] }}</div>
                        <div style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.65);">{{ $info[1] }}</div>
                    </div>
                @endforeach
            </div>

            {{-- CTA download CV --}}
            <div style="margin-top:8px;">
                <div style="position:relative;width:fit-content;padding:1px;border-radius:2px;background-size:300% 300%;background-image:linear-gradient(135deg,#3b1fa8,#7c3fff,#a855f7,#7c3fff,#3b1fa8);animation:borderBreath 4s ease infinite;">
                    <a href="#" style="
            display:inline-flex;align-items:center;gap:12px;
            font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;
            color:#fff;text-decoration:none;border-radius:2px;
            padding:14px 28px;background:#0f0f1e;
            transition:background 0.3s ease, letter-spacing 0.3s ease;
        "
                       onmouseover="this.style.background='linear-gradient(135deg,#3b1fa8,#7c3fff,#a855f7)';this.style.letterSpacing='4px'"
                       onmouseout="this.style.background='#0f0f1e';this.style.letterSpacing='3px'">
                        <span style="width:4px;height:4px;border-radius:50%;background:rgba(200,160,255,0.7);display:inline-block;"></span>
                        Baixar Currículo
                        <span style="width:4px;height:4px;border-radius:50%;background:rgba(200,160,255,0.7);display:inline-block;"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .sobre-grid {
        background-image: linear-gradient(rgba(90,60,200,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(90,60,200,0.04) 1px, transparent 1px);
        background-size: 52px 52px;
    }
</style>
