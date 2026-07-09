<section id="projetos" style="padding: 120px 0 120px 64px; position: relative; background: #0a0a12; border-top: 1px solid rgba(120,80,220,0.15); overflow: hidden;">

    {{-- header --}}
    <div style="margin-bottom: 56px; padding-right: 64px; display: flex; align-items: flex-end; justify-content: space-between;">
        <div>
            <span style="font-size: 10px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: rgba(168,85,247,0.6); display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                <span style="width: 24px; height: 1px; background: rgba(168,85,247,0.5); display: inline-block;"></span>
                Últimos Trabalhos
            </span>
            <h2 class="font-bebas" style="font-size: 3rem; color: #fff; letter-spacing: 1px; line-height: 1;">O que eu já construí</h2>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <button onclick="moveCarousel(-1)" style="width:56px;height:56px;border-radius:50%;background:rgba(14,14,24,0.95);border:1px solid rgba(120,80,220,0.35);color:rgba(168,85,247,0.8);font-size:20px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s ease;position:relative;overflow:hidden;"
                    onmouseover="this.style.borderColor='rgba(168,85,247,0.8)';this.style.color='#fff';this.style.background='rgba(124,63,255,0.25)';this.style.transform='scale(1.1)'"
                    onmouseout="this.style.borderColor='rgba(120,80,220,0.35)';this.style.color='rgba(168,85,247,0.8)';this.style.background='rgba(14,14,24,0.95)';this.style.transform='scale(1)'">←</button>

            <div id="carousel-counter" style="font-size:11px;font-weight:700;letter-spacing:2px;color:rgba(168,85,247,0.5);min-width:48px;text-align:center;">01 / 05</div>

            <button onclick="moveCarousel(1)" style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,#7c3fff,#5b21b6);border:1px solid rgba(180,130,255,0.3);color:#fff;font-size:20px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s ease;box-shadow:0 4px 20px rgba(124,63,255,0.3);"
                    onmouseover="this.style.transform='scale(1.1)';this.style.boxShadow='0 6px 28px rgba(124,63,255,0.5)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 20px rgba(124,63,255,0.3)'">→</button>
        </div>
    </div>

    {{-- viewport: altura fixa em ACTIVE_H (ver script) para a seção não esticar durante a troca de card --}}
    <div id="carousel-viewport" style="overflow: hidden; position: relative; height: 380px;">
        <div id="carousel-track" style="display: flex; gap: 20px; align-items: center; will-change: transform; transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);"></div>
    </div>

    @php
        $projetos = [
            ['titulo' => 'Nathan do Corte', 'cliente' => 'Barbearia', 'tags' => ['Laravel', 'Tailwind', 'Mercado Pago'], 'img' => 'imagens/padrao.jpg'],
            ['titulo' => 'Dra. Camila Andrade', 'cliente' => 'Clínica Odontológica', 'tags' => ['Laravel', 'Blade', 'Tailwind'], 'img' => 'imagens/padrao.jpg'],
            ['titulo' => 'Apple Reseller', 'cliente' => 'Demo Portfólio', 'tags' => ['Laravel', 'Tailwind', 'Alpine.js'], 'img' => 'imagens/padrao.jpg'],
            ['titulo' => 'ENADE+', 'cliente' => 'Plataforma Educacional', 'tags' => ['Laravel', 'Python', 'Railway'], 'img' => 'imagens/padrao.jpg'],
            ['titulo' => 'Matheusdepaulo.com', 'cliente' => 'Studio Digital', 'tags' => ['Laravel', 'Tailwind', 'Alpine.js'], 'img' => 'imagens/padrao.jpg'],
        ];
    @endphp

</section>

<script>
    (function () {
        const baseData = @json($projetos);
        const projetos = [...baseData, ...baseData, ...baseData];
        const BASE_LEN = baseData.length;

        const ACTIVE_W = 520;
        const INACTIVE_W = 330;
        const ACTIVE_H = 380;
        const INACTIVE_H = 260;
        const GAP = 20;

        let activeIndex = BASE_LEN;
        let isAnimating = false;

        const track = document.getElementById('carousel-track');
        const viewport = document.getElementById('carousel-viewport');

        function buildCards() {
            track.innerHTML = '';
            projetos.forEach((p, i) => {
                const isActive = i === activeIndex;
                const div = document.createElement('div');
                div.className = 'projeto-card';
                div.dataset.index = i;
                div.style.cssText = `
                flex-shrink:0;
                width:${isActive ? ACTIVE_W : INACTIVE_W}px;
                border-radius:16px;
                overflow:hidden;
                cursor:pointer;
                position:relative;
                transition:all 0.45s cubic-bezier(0.4,0,0.2,1);
                z-index:${isActive ? 5 : 1};
                opacity:${isActive ? 1 : 0.4};
                filter:brightness(${isActive ? 1 : 0.4});
                transform:${isActive ? 'scale(1)' : 'scale(0.97)'};
            `;
                div.innerHTML = `
                <img src="/${p.img}" alt="${p.titulo}"
                    style="width:100%;height:${isActive ? ACTIVE_H : INACTIVE_H}px;object-fit:cover;display:block;transition:height 0.45s cubic-bezier(0.4,0,0.2,1);" class="card-img">
                <div class="card-overlay" style="
                    position:absolute;inset:0;
                    background:linear-gradient(to top,rgba(8,8,20,0.96) 0%,rgba(8,8,20,0.3) 50%,transparent 100%);
                    display:flex;flex-direction:column;justify-content:flex-end;
                    padding:24px 20px;
                    opacity:${isActive ? 1 : 0};
                    transition:opacity 0.35s ease;
                    pointer-events:none;
                ">
                    <h3 style="font-size:16px;font-weight:700;color:#fff;margin-bottom:5px;line-height:1.3;">${p.titulo}</h3>
                    <p style="font-size:9px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(168,85,247,0.9);margin-bottom:12px;">${p.cliente}</p>
                    <div style="display:flex;flex-wrap:wrap;gap:6px;">
                        ${p.tags.map(t => `<span style="font-size:8px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.8);border:1px solid rgba(168,85,247,0.4);border-radius:100px;padding:3px 10px;background:rgba(124,63,255,0.15);">${t}</span>`).join('')}
                    </div>
                </div>
                <div class="card-border" style="position:absolute;inset:0;border-radius:16px;pointer-events:none;transition:border-color 0.4s ease;border:1px solid ${isActive ? 'rgba(168,85,247,0.5)' : 'transparent'};"></div>
            `;
                div.addEventListener('mouseover', () => hoverCard(div, i));
                div.addEventListener('mouseout', () => unhoverCard(div, i));
                track.appendChild(div);
            });
        }

        function getTranslateX() {
            const viewportW = viewport.offsetWidth;
            let offsetToActive = 0;
            for (let i = 0; i < activeIndex; i++) {
                offsetToActive += INACTIVE_W + GAP;
            }
            const center = viewportW / 2 - ACTIVE_W / 2;
            return offsetToActive - center;
        }

        function setTranslate(animate) {
            track.style.transition = animate ? 'transform 0.5s cubic-bezier(0.4,0,0.2,1)' : 'none';
            track.style.transform = `translateX(-${getTranslateX()}px)`;
        }

        function updateCards() {
            document.querySelectorAll('.projeto-card').forEach((card, i) => {
                const img = card.querySelector('.card-img');
                const overlay = card.querySelector('.card-overlay');
                const border = card.querySelector('.card-border');
                const isActive = i === activeIndex;
                card.style.width = `${isActive ? ACTIVE_W : INACTIVE_W}px`;
                card.style.opacity = isActive ? '1' : '0.4';
                card.style.filter = `brightness(${isActive ? 1 : 0.4})`;
                card.style.transform = isActive ? 'scale(1)' : 'scale(0.97)';
                card.style.zIndex = isActive ? '5' : '1';
                img.style.height = `${isActive ? ACTIVE_H : INACTIVE_H}px`;
                overlay.style.opacity = isActive ? '1' : '0';
                border.style.borderColor = isActive ? 'rgba(168,85,247,0.5)' : 'transparent';
            });
        }

        function updateCounter() {
            const counter = document.getElementById('carousel-counter');
            if (!counter) return;
            const display = ((activeIndex % BASE_LEN) + 1).toString().padStart(2, '0');
            counter.textContent = `${display} / ${String(BASE_LEN).padStart(2, '0')}`;
        }

        function hoverCard(card, index) {
            if (index === activeIndex) return;
            card.style.opacity = '0.8';
            card.style.filter = 'brightness(0.8)';
            card.style.transform = 'scale(1.04)';
            card.style.zIndex = '10';
            card.querySelector('.card-overlay').style.opacity = '1';
            card.querySelector('.card-border').style.borderColor = 'rgba(168,85,247,0.25)';
        }

        function unhoverCard(card, index) {
            if (index === activeIndex) return;
            card.style.opacity = '0.4';
            card.style.filter = 'brightness(0.4)';
            card.style.transform = 'scale(0.97)';
            card.style.zIndex = '1';
            card.querySelector('.card-overlay').style.opacity = '0';
            card.querySelector('.card-border').style.borderColor = 'transparent';
        }

        window.moveCarousel = function (dir) {
            if (isAnimating) return;
            isAnimating = true;
            activeIndex += dir;
            updateCards();
            updateCounter();
            setTranslate(true);

            setTimeout(() => {
                // loop: se saiu dos limites do meio, reposiciona silenciosamente
                if (activeIndex >= BASE_LEN * 2) {
                    activeIndex = BASE_LEN + (activeIndex - BASE_LEN * 2);
                    track.style.transition = 'none';
                    track.style.transform = `translateX(-${getTranslateX()}px)`;
                } else if (activeIndex < BASE_LEN) {
                    activeIndex = BASE_LEN * 2 - (BASE_LEN - activeIndex);
                    track.style.transition = 'none';
                    track.style.transform = `translateX(-${getTranslateX()}px)`;
                }
                updateCards();
                updateCounter();
                isAnimating = false;
            }, 520);
        };

        buildCards();
        requestAnimationFrame(() => {
            setTranslate(false);
            updateCounter();
        });
    })();
</script>
