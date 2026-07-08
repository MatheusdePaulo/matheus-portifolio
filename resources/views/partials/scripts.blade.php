<script>
    function setLang(lang) {
        const btnPt = document.getElementById('btn-pt');
        const btnEn = document.getElementById('btn-en');
        if (lang === 'pt') {
            btnPt.style.background = 'linear-gradient(135deg, #7c3fff, #5b21b6)';
            btnPt.style.border = '1px solid rgba(180,130,255,0.3)';
            btnPt.classList.remove('text-purple-400/50'); btnPt.classList.add('text-white');
            btnEn.style.background = 'transparent'; btnEn.style.border = 'none';
            btnEn.classList.remove('text-white'); btnEn.classList.add('text-purple-400/50');
        } else {
            btnEn.style.background = 'linear-gradient(135deg, #7c3fff, #5b21b6)';
            btnEn.style.border = '1px solid rgba(180,130,255,0.3)';
            btnEn.classList.remove('text-purple-400/50'); btnEn.classList.add('text-white');
            btnPt.style.background = 'transparent'; btnPt.style.border = 'none';
            btnPt.classList.remove('text-white'); btnPt.classList.add('text-purple-400/50');
        }
    }
</script>
