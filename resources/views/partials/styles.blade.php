<style>
    * { font-family: 'Syne', sans-serif; }
    .font-bebas { font-family: 'Bebas Neue', sans-serif; }
    .font-times { font-family: 'Times New Roman', Times, serif; }

    @keyframes fadeSlideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes revealRight {
        from { clip-path: inset(0 100% 0 0); }
        to   { clip-path: inset(0 0% 0 0); }
    }
    @keyframes lineBreath {
        0%, 100% { transform: scaleX(0.4); opacity: 0.5; }
        50%       { transform: scaleX(1); opacity: 1; }
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    @keyframes pulseDot {
        0%, 100% { box-shadow: 0 0 6px rgba(74,222,128,0.7); }
        50%       { box-shadow: 0 0 14px rgba(74,222,128,1); }
    }
    @keyframes glowPulse {
        0%, 100% { opacity: 0.18; }
        50%       { opacity: 0.32; }
    }
    @keyframes floatY {
        0%, 100% { transform: translateY(0px); }
        50%       { transform: translateY(-8px); }
    }
    @keyframes mouseScroll {
        0%   { opacity: 1; transform: translateX(-50%) translateY(0); }
        100% { opacity: 0; transform: translateX(-50%) translateY(10px); }
    }
    @keyframes growLine {
        from { width: 0; }
        to   { width: 48%; }
    }
    @keyframes typewriter {
        from { width: 0; }
        to   { width: 100%; }
    }
    @keyframes borderBreath {
        0%   { background-position: 0% 50%; }
        50%  { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .anim-tag    { opacity: 0; animation: fadeSlideDown 0.6s ease 0.2s forwards; }
    .anim-ola    { opacity: 0; animation: fadeUp 0.5s ease 0.5s forwards; }
    .anim-name   { overflow: hidden; white-space: nowrap; border-right: 2px solid transparent; width: 0; animation: typewriter 4s steps(17) 2.8s forwards; }
    .anim-line   { height: 2px; width: 0; transform-origin: left; background: linear-gradient(to right, #7c3fff, #a855f7, transparent); animation: growLine 2.9s steps(17) 2.4s forwards, lineBreath 2.5s ease-in-out 5.1s infinite; }
    .anim-cargo span { opacity: 0; }
    .anim-cargo span:nth-child(1) { animation: fadeUp 0.5s ease 0.8s forwards; }
    .anim-cargo span:nth-child(2) { animation: fadeUp 0.5s ease 1.0s forwards; }
    .anim-cargo span:nth-child(3) { animation: fadeUp 0.5s ease 1.2s forwards; }
    .anim-cargo span:nth-child(4) { animation: fadeUp 0.5s ease 1.4s forwards; }
    .anim-divider { opacity: 0; clip-path: inset(0 100% 0 0); animation: revealRight 0.6s ease 1.7s forwards; }
    .anim-frase  { opacity: 0; animation: fadeUp 0.7s ease 1.9s forwards; }
    .anim-cta    { opacity: 0; animation: fadeUp 0.6s ease 2.2s forwards; }
    .anim-footer { opacity: 0; animation: fadeIn 0.6s ease 2.5s forwards; }
    .anim-toggle { opacity: 0; animation: fadeIn 0.6s ease 0.5s forwards; }

    .blob-anim { animation: glowPulse 4s ease-in-out infinite; }
    .dot-pulse  { animation: pulseDot 2s ease-in-out infinite; }

    .particle {
        position: absolute; border-radius: 50%;
        background: rgba(124,63,255,0.35);
        animation: floatY var(--dur,5s) ease-in-out infinite;
        animation-delay: var(--delay,0s);
    }

    .cta-wrap {
        position: relative; width: fit-content; padding: 1px; border-radius: 2px;
        background-size: 300% 300%;
        background-image: linear-gradient(135deg, #3b1fa8, #7c3fff, #a855f7, #7c3fff, #3b1fa8);
        animation: borderBreath 4s ease infinite;
    }
    .cta-btn {
        position: relative; display: inline-flex; align-items: center;
        justify-content: center; gap: 10px; padding: 14px 40px;
        font-family: 'Syne', sans-serif; font-size: 11px; font-weight: 700;
        letter-spacing: 3px; text-transform: uppercase; color: #fff;
        border-radius: 2px; text-decoration: none; border: none;
        background: #0b0b18; transition: background 0.3s ease, letter-spacing 0.3s ease;
    }
    .cta-btn:hover { background: linear-gradient(135deg, #3b1fa8, #7c3fff, #a855f7); letter-spacing: 4px; }
    .cta-btn .dot { width: 4px; height: 4px; border-radius: 50%; background: rgba(200,160,255,0.7); }

    .hero-photo-wrap { transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1); }
    .hero-photo-wrap:hover { transform: translateX(-50%) scale(1.06) !important; }

    @keyframes developerPulse {
        0%, 100% { opacity: 0.06; transform: translate(-50%, -30%) scale(1); }
        50%       { opacity: 0.12; transform: translate(-50%, -30%) scale(1.02); }
    }

    @keyframes lightPulse {
        0%, 100% { opacity: 0.6; }
        50%       { opacity: 1; }
    }

    @keyframes walkSway {
        0%, 100% { transform: rotate(-3deg) translateX(0px); }
        50%       { transform: rotate(3deg) translateX(4px); }
    }
</style>
