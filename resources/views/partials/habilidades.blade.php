<section id="habilidades" style="padding: 100px 64px; position: relative; z-index: 0; background: #0a0a12; border-top: 1px solid rgba(120,80,220,0.15); overflow: hidden;">

    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(90,60,200,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(90,60,200,0.04) 1px,transparent 1px);background-size:52px 52px;pointer-events:none;"></div>

    {{-- SKILLS fundo --}}
    <img src="{{ asset('imagens/skills.webp') }}" alt="" class="absolute pointer-events-none select-none" style="top:76%; left:50%; transform:translate(-50%,-50%); width:80%; opacity:0.06; filter:invert(1) sepia(1) saturate(2) hue-rotate(220deg); animation:sectionBgPulse 4s ease-in-out infinite; z-index:-1;">

    {{-- header --}}
    <div style="text-align:center;margin-bottom:16px;position:relative;z-index:1;">
        <span style="font-size:10px;font-weight:700;letter-spacing:4px;text-transform:uppercase;color:rgba(168,85,247,0.6);">Proficiência nas seguintes ferramentas e linguagens...</span>
    </div>

    @php
        $stacks = [
            ['nome' => 'HTML',        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
            ['nome' => 'CSS',         'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'],
            ['nome' => 'JavaScript',  'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
            ['nome' => 'TypeScript',  'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg'],
            ['nome' => 'React',       'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg'],
            ['nome' => 'Vue',         'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg'],
            ['nome' => 'Next.js',     'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg'],
            ['nome' => 'jQuery',      'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg'],
            ['nome' => 'Tailwind',    'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg'],
            ['nome' => 'Sass',        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg'],
            ['nome' => 'PHP',         'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'],
            ['nome' => 'Laravel',     'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'],
            ['nome' => 'Python',      'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg'],
            ['nome' => 'MySQL',       'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg'],
            ['nome' => 'PostgreSQL',  'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg'],
            ['nome' => 'MongoDB',     'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg'],
            ['nome' => 'WordPress',   'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg'],
            ['nome' => 'Alpine.js',   'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/alpinejs/alpinejs-original.svg'],
            ['nome' => 'Flutter',     'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg'],
            ['nome' => 'Figma',       'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'],
            ['nome' => 'Photoshop',   'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-original.svg'],
            ['nome' => 'Illustrator', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg'],
            ['nome' => 'Git',         'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg'],
            ['nome' => 'GitHub',      'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg'],
            ['nome' => 'GitLab',      'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg'],
            ['nome' => 'Docker',      'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg'],
            ['nome' => 'PhpStorm',    'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/phpstorm/phpstorm-original.svg'],
        ];

        $linha1 = array_slice($stacks, 0, 10);
        $linha2 = array_slice($stacks, 10, 10);
        $linha3 = array_slice($stacks, 20);
    @endphp

    @php
        $cardStyle = "position:relative;width:88px;height:88px;border-radius:20px;background:rgba(255,255,255,0.02);border:1px solid rgba(120,80,220,0.15);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.3s cubic-bezier(0.34,1.56,0.64,1);";
        $nomeStyle = "position:absolute;top:-32px;left:50%;transform:translateX(-50%) translateY(4px);font-size:9px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#fff;white-space:nowrap;background:rgba(14,14,24,0.95);border:1px solid rgba(168,85,247,0.3);border-radius:4px;padding:4px 8px;opacity:0;transition:all 0.25s ease;pointer-events:none;z-index:10;";
        $over = "this.style.transform='scale(1.12)';this.style.borderColor='rgba(168,85,247,0.6)';this.style.boxShadow='0 0 20px rgba(124,63,255,0.3)';this.style.background='rgba(124,63,255,0.12)';this.querySelector('.stack-nome').style.opacity='1';this.querySelector('.stack-nome').style.transform='translateX(-50%) translateY(0)';";
        $out = "this.style.transform='scale(1)';this.style.borderColor='rgba(120,80,220,0.15)';this.style.boxShadow='none';this.style.background='rgba(255,255,255,0.02)';this.querySelector('.stack-nome').style.opacity='0';this.querySelector('.stack-nome').style.transform='translateX(-50%) translateY(4px)';";
    @endphp

    <div style="position:relative;z-index:1;display:flex;flex-direction:column;align-items:center;gap:16px;margin-top:40px;">

        {{-- linha 1 --}}
        <div style="display:flex;gap:16px;">
            @foreach($linha1 as $stack)
                <div onmouseover="{{ $over }}" onmouseout="{{ $out }}" style="{{ $cardStyle }}">
                    <div class="stack-nome" style="{{ $nomeStyle }}">{{ $stack['nome'] }}</div>
                    <img src="{{ $stack['icon'] }}" alt="{{ $stack['nome'] }}" style="width:44px;height:44px;object-fit:contain;">
                </div>
            @endforeach
        </div>

        {{-- linha 2 --}}
        <div style="display:flex;gap:16px;">
            @foreach($linha2 as $stack)
                <div onmouseover="{{ $over }}" onmouseout="{{ $out }}" style="{{ $cardStyle }}">
                    <div class="stack-nome" style="{{ $nomeStyle }}">{{ $stack['nome'] }}</div>
                    <img src="{{ $stack['icon'] }}" alt="{{ $stack['nome'] }}" style="width:44px;height:44px;object-fit:contain;">
                </div>
            @endforeach
        </div>

        {{-- linha 3 — centralizada --}}
        <div style="display:flex;gap:16px;justify-content:center;">
            @foreach($linha3 as $stack)
                <div onmouseover="{{ $over }}" onmouseout="{{ $out }}" style="{{ $cardStyle }}">
                    <div class="stack-nome" style="{{ $nomeStyle }}">{{ $stack['nome'] }}</div>
                    <img src="{{ $stack['icon'] }}" alt="{{ $stack['nome'] }}" style="width:44px;height:44px;object-fit:contain;">
                </div>
            @endforeach
        </div>

    </div>

    {{-- botões contato e linkedin --}}
    <div style="display:flex;justify-content:center;gap:16px;margin-top:64px;position:relative;z-index:1;">

        <a href="#contato" style="
        display:inline-flex;align-items:center;justify-content:center;
        padding:14px 32px;
        font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;
        color:#fff;text-decoration:none;
        border-radius:12px;
        border:1.5px solid rgba(255,255,255,0.8);
        background:#0a0a12;
        transition:all 0.15s ease;
        box-shadow:0 5px 0 rgba(255,255,255,0.5);
    "
           onmouseover="this.style.transform='translateY(5px)';this.style.boxShadow='0 0px 0 rgba(255,255,255,0.5)';this.style.background='#fff';this.style.color='#08080f'"
           onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 5px 0 rgba(255,255,255,0.5)';this.style.background='#0a0a12';this.style.color='#fff'">
            Contato
        </a>

        <a href="https://linkedin.com/in/matheusdepaulo" target="_blank" style="
        display:inline-flex;align-items:center;justify-content:center;gap:8px;
        padding:14px 32px;
        font-size:11px;font-weight:800;letter-spacing:1px;text-transform:uppercase;
        color:#fff;text-decoration:none;
        border-radius:12px;
        border:1.5px solid rgba(255,255,255,0.2);
        background:rgba(255,255,255,0.04);
        transition:all 0.15s ease;
        box-shadow:0 5px 0 rgba(255,255,255,0.15);
    "
           onmouseover="this.style.transform='translateY(5px)';this.style.boxShadow='0 0px 0 rgba(255,255,255,0.15)';this.style.background='#fff';this.style.color='#08080f';this.style.borderColor='#fff'"
           onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 5px 0 rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.04)';this.style.color='#fff';this.style.borderColor='rgba(255,255,255,0.2)'">
            LinkedIn <span>↗</span>
        </a>

    </div>
</section>
