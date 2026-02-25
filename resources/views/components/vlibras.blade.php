<!-- VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const scriptElementVlibras = document.createElement('script');
        scriptElementVlibras.type = 'text/javascript';
        scriptElementVlibras.src = 'https://vlibras.gov.br/app/vlibras-plugin.js';
        scriptElementVlibras.addEventListener('load', async () => {
            await new window.VLibras.Widget('https://vlibras.gov.br/app');
        });

        await document.head.appendChild(scriptElementVlibras);
    });
</script>
<!-- /VLibras -->