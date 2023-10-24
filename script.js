$(document).ready(function() {
    $.get("nfe.xml", function(xml) {
            var emitente = $(xml).find('emit');

            var cnpjEmitente = emitente.find('CNPJ').text();
            var nomeEmitente = emitente.find('xNome').text();
            var xFantEmitente = emitente.find('xFant').text();
            var ruaEmitente = emitente.find('enderEmit xLgr').text();
            var numeroEmitente = emitente.find('enderEmit nro').text();
            var bairroEmitente = emitente.find('enderEmit xBairro').text();
            var cidadeEmitente = emitente.find('enderEmit xMun').text();
            var ufEmitente = emitente.find('enderEmit UF').text();
            var cepEmitente = emitente.find('enderEmit CEP').text();
            var ieEmitente = emitente.find('IE').text();

            var html = `
                    <p>CNPJ: ${cnpjEmitente}</p>
                    <p>Nome: ${nomeEmitente}</p>
                    <p>Fantasia: ${xFantEmitente}</p>
                    <p>Rua: ${ruaEmitente}</p>
                    <p>Número: ${numeroEmitente}</p>
                    <p>Bairro: ${bairroEmitente}</p>
                    <p>Cidade: ${cidadeEmitente}</p>
                    <p>UF: ${ufEmitente}</p>
                    <p>CEP: ${cepEmitente}</p>
                    <p>IE: ${ieEmitente}</p>
                `;

            $('#nfe').html(html);
        }, 'xml')
        .fail(function() {
            console.log('Erro ao carregar o arquivo XML.');
        });
});