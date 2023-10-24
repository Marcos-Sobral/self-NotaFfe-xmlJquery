<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
</head>

<body>
    <div id="nfe">

    </div>

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() { //semática de DOM pra não da erro
            $.get("nfe.xml", function(xml) {
                var emitente = $(xml).find('emit');
                var cnpjEmitente = emitente.find('CNPJ').text();
                var xNome = emitente.find('xNome').text();
                var xFant = emitente.find('xFant').text();
                var xLgr = emitente.find('enderEmit').find('xLgr').text();
                var nro = emitente.find('enderEmit').find('nro').text();
                var xCpl = emitente.find('enderEmit').find('xCpl').text();
                var xBairro = emitente.find('enderEmit').find('xBairro').text();
                var cMun = emitente.find('enderEmit').find('cMun').text();
                var xMun = emitente.find('enderEmit').find('xMun').text();
                var UF = emitente.find('enderEmit').find('UF').text();
                var CEP = emitente.find('enderEmit').find('CEP').text();
                var cPais = emitente.find('enderEmit').find('cPais').text();
                var xPais = emitente.find('enderEmit').find('xPais').text();
                var fone = emitente.find('enderEmit').find('fone').text();
                var IE = emitente.find('IE').text();

                var dest = $(xml).find('dest');
                var cnpjDest = dest.find('CNPJ').text();
                var xNomeDest = dest.find('xNome').text();
                var xLgrDest = dest.find('enderDest').find('xLgr').text();
                var nroDest = dest.find('enderDest').find('nro').text();
                var xCplDest = dest.find('enderDest').find('xCpl').text();
                var xBairroDest = dest.find('enderDest').find('xBairro').text();
                var cMunDest = dest.find('enderDest').find('cMun').text();
                var xMunDest = dest.find('enderDest').find('xMun').text();
                var UFDest = dest.find('enderDest').find('UF').text();
                var CEPDest = dest.find('enderDest').find('CEP').text();
                var cPaisDest = dest.find('enderDest').find('cPais').text();
                var xPaisDest = dest.find('enderDest').find('xPais').text();
                var foneDest = dest.find('enderDest').find('fone').text();
                var IEDest = dest.find('IE').text();

                var retirada = $(xml).find('retirada');
                var cnpjRetirada = retirada.find('CNPJ').text();
                var xLgrRetirada = retirada.find('xLgr').text();
                var nroRetirada = retirada.find('nro').text();
                var xCplRetirada = retirada.find('xCpl').text();
                var xBairroRetirada = retirada.find('xBairro').text();
                var cMunRetirada = retirada.find('cMun').text();
                var xMunRetirada = retirada.find('xMun').text();
                var UFRetirada = retirada.find('UF').text();

                var entrega = $(xml).find('entrega');
                var cnpjEntrega = entrega.find('CNPJ').text();
                var xLgrEntrega = entrega.find('xLgr').text();
                var nroEntrega = entrega.find('nro').text();
                var xCplEntrega = entrega.find('xCpl').text();
                var xBairroEntrega = entrega.find('xBairro').text();
                var cMunEntrega = entrega.find('cMun').text();
                var xMunEntrega = entrega.find('xMun').text();
                var UFEntrega = entrega.find('UF').text();

                var produtos = $(xml).find('det');
                var produtosHtml = '';

                produtos.each(function() {
                    var cProd = $(this).find('cProd').text();
                    var xProd = $(this).find('xProd').text();
                    var CFOP = $(this).find('CFOP').text();
                    var uCom = $(this).find('uCom').text();
                    var qCom = $(this).find('qCom').text();
                    var vUnCom = $(this).find('vUnCom').text();
                    var vProd = $(this).find('vProd').text();
                    var cEANTrib = $(this).find('cEANTrib').text();
                    var uTrib = $(this).find('uTrib').text();
                    var qTrib = $(this).find('qTrib').text();
                    var vUnTrib = $(this).find('vUnTrib').text();

                    produtosHtml += `
            <div class="produto">
                <p>Código do Produto: ${cProd}</p>
                <p>Descrição do Produto: ${xProd}</p>
                <p>CFOP: ${CFOP}</p>
                <p>Unidade de Compra: ${uCom}</p>
                <p>Quantidade Comprada: ${qCom}</p>
                <p>Valor Unitário de Compra: ${vUnCom}</p>
                <p>Valor Total do Produto: ${vProd}</p>
                <p>Código EAN: ${cEANTrib}</p>
                <p>Unidade Tributável: ${uTrib}</p>
                <p>Quantidade Tributável: ${qTrib}</p>
                <p>Valor Unitário Tributável: ${vUnTrib}</p>
            </div>
        `;
                });

                var total = $(xml).find('ICMSTot');
                var vBC = total.find('vBC').text();
                var vICMS = total.find('vICMS').text();
                var vBCST = total.find('vBCST').text();
                var vST = total.find('vST').text();
                var vFrete = total.find('vFrete').text();
                var vSeg = total.find('vSeg').text();
                var vDesc = total.find('vDesc').text();
                var vII = total.find('vII').text();
                var vIPI = total.find('vIPI').text();
                var vPIS = total.find('vPIS').text();
                var vCOFINS = total.find('vCOFINS').text();
                var vOutro = total.find('vOutro').text();
                var vNF = total.find('vNF').text();

                $("#nfe").html(
                    `<h2>Emitente:</h2>
        <p>CNPJ: ${cnpjEmitente}</p>
        <p>Razão Social: ${xNome}</p>
        <p>Nome Fantasia: ${xFant}</p>
        <p>Endereço: ${xLgr}, ${nro} - ${xCpl}</p>
        <p>Bairro: ${xBairro}</p>
        <p>Cidade: ${xMun}</p>
        <p>UF: ${UF}</p>
        <p>CEP: ${CEP}</p>
        <p>País: ${xPais}</p>
        <p>Telefone: ${fone}</p>
        <p>Inscrição Estadual: ${IE}</p>

        <h2>Destinatário:</h2>
        <p>CNPJ: ${cnpjDest}</p>
        <p>Razão Social: ${xNomeDest}</p>
        <p>Endereço: ${xLgrDest}, ${nroDest} - ${xCplDest}</p>
        <p>Bairro: ${xBairroDest}</p>
        <p>Cidade: ${xMunDest}</p>
        <p>UF: ${UFDest}</p>
        <p>CEP: ${CEPDest}</p>
        <p>País: ${xPaisDest}</p>
        <p>Telefone: ${foneDest}</p>
        <p>Inscrição Estadual: ${IEDest}</p>

        <h2>Retirada:</h2>
        <p>CNPJ: ${cnpjRetirada}</p>
        <p>Endereço: ${xLgrRetirada}, ${nroRetirada} - ${xCplRetirada}</p>
        <p>Bairro: ${xBairroRetirada}</p>
        <p>Cidade: ${xMunRetirada}</p>
        <p>UF: ${UFRetirada}</p>

        <h2>Entrega:</h2>
        <p>CNPJ: ${cnpjEntrega}</p>
        <p>Endereço: ${xLgrEntrega}, ${nroEntrega} - ${xCplEntrega}</p>
        <p>Bairro: ${xBairroEntrega}</p>
        <p>Cidade: ${xMunEntrega}</p>
        <p>UF: ${UFEntrega}</p>

        <h2>Produtos:</h2>
        ${produtosHtml}

        <h2>Total:</h2>
        <p>Base de Cálculo: ${vBC}</p>
        <p>Valor do ICMS: ${vICMS}</p>
        <p>Base de Cálculo do ICMS ST: ${vBCST}</p>
        <p>Valor do ICMS ST: ${vST}</p>
        <p>Valor do Frete: ${vFrete}</p>
        <p>Valor do Seguro: ${vSeg}</p>
        <p>Valor do Desconto: ${vDesc}</p>
        <p>Valor do II: ${vII}</p>
        <p>Valor do IPI: ${vIPI}</p>
        <p>Valor do PIS: ${vPIS}</p>
        <p>Valor da COFINS: ${vCOFINS}</p>
        <p>Outros Valores: ${vOutro}</p>
        <p>Valor Total da NF: ${vNF}</p>`
                );
            });

        });
    </script>
</body>

</html>