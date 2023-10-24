<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
</head>

<body>
    <div id="nfe"></div>

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $.get("nfe.xml", function(dataXml) {

                var ide = $(dataXml).find("ide");

                var cUF_ide = ide.find("cUF").text();
                var natOp_ide = ide.find('natOp').text();
                var indPag_ide = ide.find('indPag').text();
                var mod_ide = ide.find('mod').text();
                var serie_ide = ide.find('serie').text();
                var nNF_ide = ide.find('nNF').text();
                var dEmi_ide = ide.find('dEmi').text();
                var dSaiEnt_ide = ide.find('dSaiEnt').text();
                var tpNF_ide = ide.find('tpNF').text();
                var cMunFG_ide = ide.find('cMunFG').text();
                var tpImp_ide = ide.find('tpImp').text();
                var tpEmis_ide = ide.find('tpEmis').text();
                var cDV_ide = ide.find('cDV').text();
                var tpAmb_ide = ide.find('tpAmb').text();
                var finNFe_ide = ide.find('finNFe').text();
                var procEmi_ide = ide.find('procEmi').text();
                var verProc_ide = ide.find('verProc').text();

                var emit = $(dataXml).find("emit"); //tabela emit
                var enderEmit = emit.find("enderEmit"); //sub tabela enderEmit

                var CNPJ_emit = emit.find('CNPJ').text();
                var xNome_emit = emit.find('xNome').text();
                var xFant_emit = emit.find('xFant').text();
                var xLgr_enderEmit = enderEmit.find('xLgr').text();
                var nro_enderEmit = enderEmit.find('nro').text();
                var xCpl_enderEmit = enderEmit.find('xCpl').text();
                var xBairro_enderEmit = enderEmit.find('xBairro').text();
                var cMun_enderEmit = enderEmit.find('cMun').text();
                var xMun_enderEmit = enderEmit.find('xMun').text();
                var UF_enderEmit = enderEmit.find('UF').text();
                var CEP_enderEmit = enderEmit.find('CEP').text();
                var cPais_enderEmit = enderEmit.find('cPais').text();
                var xPais_enderEmit = enderEmit.find('xPais').text();
                var fone_enderEmit = enderEmit.find('fone').text();
                var IE_emit = emit.find('IE').text();

                var dest = $(dataXml).find("dest"); //tabela dest
                var enderDest = dest.find("enderDest"); //subtabela dentro de dest chamada enderDest

                var CNPJ_dest = dest.find('CNPJ').text();
                var xNome_dest = dest.find('xNome').text();
                var xLgr_enderDest = enderDest.find('xLgr').text();
                var nro_enderDest = enderDest.find('nro').text();
                var xCpl_enderDest = enderDest.find('xCpl').text();
                var xBairro_enderDest = enderDest.find('xBairro').text();
                var cMun_enderDest = enderDest.find('cMun').text();
                var xMun_enderDest = enderDest.find('xMun').text();
                var UF_enderDest = enderDest.find('UF').text();
                var CEP_enderDest = enderDest.find('CEP').text();
                var cPais_enderDest = enderDest.find('cPais').text();
                var xPais_enderDest = enderDest.find('xPais').text();
                var fone_enderDest = enderDest.find('fone').text();
                var IE_dest = dest.find('IE').text();

                var retirada = $(dataXml).find("retirada"); //tabela retirada

                var CNPJ_retirada = retirada.find('CNPJ').text();
                var xLgr_retirada = retirada.find('xLgr').text();
                var nro_retirada = retirada.find('nro').text();
                var xCpl_retirada = retirada.find('xCpl').text();
                var xBairro_retirada = retirada.find('xBairro').text();
                var cMun_retirada = retirada.find('cMun').text();
                var xMun_retirada = retirada.find('xMun').text();
                var UF_retirada = retirada.find('UF').text();

                var entrega = $(dataXml).find("entrega"); //tabela de entrega

                var CNPJ_entrega = entrega.find('CNPJ').text();
                var xLgr_entrega = entrega.find('xLgr').text();
                var nro_entrega = entrega.find('nro').text();
                var xCpl_entrega = entrega.find('xCpl').text();
                var xBairro_entrega = entrega.find('xBairro').text();
                var cMun_entrega = entrega.find('cMun').text();
                var xMun_entrega = entrega.find('xMun').text();
                var UF_entrega = entrega.find('UF').text();

                var det2 = $(dataXml).find("det[nItem='2']"); //det 2 - prod
                var cProd_prod = det2.find('cProd').text();
                var xProd_prod = det2.find('xProd').text();
                var CFOP_prod = det2.find('CFOP').text();
                var uCom_prod = det2.find('uCom').text();
                var qCom_prod = det2.find('qCom').text();
                var vUnCom_prod = det2.find('vUnCom').text();
                var vProd_prod = det2.find('vProd').text();
                var cEANTrib_prod = det2.find('cEANTrib').text();
                var uTrib_prod = det2.find('uTrib').text();
                var qTrib_prod = det2.find('qTrib').text();
                var vUnTrib_prod = det2.find('vUnTrib').text();

                var ICMS = $(dataXml).find('ICMS00'); //det 2 -Imposto - ICMS
                var orig_ICMS = ICMS.find('orig').text();
                var CST_ICMS = ICMS.find('CST').text();
                var modBC_ICMS = ICMS.find('modBC').text();
                var vBC_ICMS = ICMS.find('vBC').text();
                var pICMS_ICMS = ICMS.find('pICMS').text();
                var vICMS_ICMS = ICMS.find('vICMS').text();

                var PISAliq = $(dataXml).find('PISAliq'); //det 2 -Imposto - PISA
                var CST_PIS = PISAliq.find('CST').text();
                var vBC_PIS = PISAliq.find('vBC').text();
                var pPIS_PIS = PISAliq.find('pPIS').text();
                var vPIS_PIS = PISAliq.find('vPIS').text();

                var COFINSAliq = $(dataXml).find('COFINSAliq'); //det 2 -Imposto - CONFISA
                var CST_COFINS = COFINSAliq.find('CST').text();
                var vBC_COFINS = COFINSAliq.find('vBC').text();
                var pCOFINS_COFINS = COFINSAliq.find('pCOFINS').text();
                var vCOFINS_COFINS = COFINSAliq.find('vCOFINS').text();

                var total = $(dataXml).find("ICMSTot"); // total

                var vBC_ICMSTot = total.find('vBC').text();
                var vICMSTot = total.find('vICMS').text();
                var vBCST_ICMSTot = total.find('vBCST').text();
                var vST_ICMSTot = total.find('vST').text();
                var vProd_ICMSTot = total.find('vProd').text();
                var vFrete_ICMSTot = total.find('vFrete').text();
                var vSeg_ICMSTot = total.find('vSeg').text();
                var vDesc_ICMSTot = total.find('vDesc').text();
                var vII_ICMSTot = total.find('vII').text();
                var vIPI_ICMSTot = total.find('vIPI').text();
                var vPIS_ICMSTot = total.find('vPIS').text();
                var vCOFINS_ICMSTot = total.find('vCOFINS').text();
                var vOutro_ICMSTot = total.find('vOutro').text();
                var vNF_ICMSTot = total.find('vNF').text();

                var transp = $(dataXml).find("transp"); // transporte
                var modFrete_transp = transp.find('modFrete').text();

                var transporta = transp.find("transporta"); // transpotadora
                var CNPJ_transporta = transporta.find('CNPJ').text();
                var xNome_transporta = transporta.find('xNome').text();
                var IE_transporta = transporta.find('IE').text();
                var xEnder_transporta = transporta.find('xEnder').text();
                var xMun_transporta = transporta.find('xMun').text();
                var UF_transporta = transporta.find('UF').text();

                var veicTransp = transp.find("veicTransp"); //veiculo
                var placa_veicTransp = veicTransp.find('placa').text();
                var UF_veicTransp = veicTransp.find('UF').text();
                var RNTC_veicTransp = veicTransp.find('RNTC').text();

                var reboque = transp.find("reboque"); //reboque
                var placa_reboque = reboque.find('placa').text();
                var UF_reboque = reboque.find('UF').text();
                var RNTC_reboque = reboque.find('RNTC').text();

                var vol = transp.find("vol"); //vol
                var qVol_vol = vol.find('qVol').text();
                var esp_vol = vol.find('esp').text();
                var marca_vol = vol.find('marca').text();
                var nVol_vol = vol.find('nVol').text();
                var pesoL_vol = vol.find('pesoL').text();
                var pesoB_vol = vol.find('pesoB').text();

                var lacres = vol.find("lacres");
                var nLacre_vol = lacres.find('nLacre').text();

                var infAdic = $(dataXml).find("infAdic");
                var infAdFisco_infAdic = infAdic.find('infAdFisco').text();

                var signature = $(dataXml).find("Signature");
                var SignatureValue = signature.find('SignatureValue').text();
                var X509Certificate = signature.find('X509Certificate').text();

                $("#nfe").html(
                    '<h1>Tabela - IDE</h1>' +
                    '<p>' + cUF_ide + '</p>' +
                    '<p>' + natOp_ide + '</p>' +
                    '<p>' + indPag_ide + '</p>' +
                    '<p>' + mod_ide + '</p>' +
                    '<p>' + serie_ide + '</p>' +
                    '<p>' + nNF_ide + '</p>' +
                    '<p>' + dEmi_ide + '</p>' +
                    '<p>' + dSaiEnt_ide + '</p>' +
                    '<p>' + tpNF_ide + '</p>' +
                    '<p>' + cMunFG_ide + '</p>' +
                    '<p>' + tpImp_ide + '</p>' +
                    '<p>' + tpEmis_ide + '</p>' +
                    '<p>' + cDV_ide + '</p>' +
                    '<p>' + tpAmb_ide + '</p>' +
                    '<p>' + finNFe_ide + '</p>' +
                    '<p>' + procEmi_ide + '</p>' +
                    '<p>' + verProc_ide + '</p>' +

                    '<h1> Tabela - Emit</h1>' +
                    '<p>' + CNPJ_emit + '</p>' +
                    '<p>' + xNome_emit + '</p>' +
                    '<p>' + xFant_emit + '</p>' +
                    '<p>' + xLgr_enderEmit + '</p>' +
                    '<p>' + nro_enderEmit + '</p>' +
                    '<p>' + xCpl_enderEmit + '</p>' +
                    '<p>' + xBairro_enderEmit + '</p>' +
                    '<p>' + cMun_enderEmit + '</p>' +
                    '<p>' + xMun_enderEmit + '</p>' +
                    '<p>' + UF_enderEmit + '</p>' +
                    '<p>' + CEP_enderEmit + '</p>' +
                    '<p>' + cPais_enderEmit + '</p>' +
                    '<p>' + xPais_enderEmit + '</p>' +
                    '<p>' + fone_enderEmit + '</p>' +
                    '<p>' + IE_emit + '</p>' +

                    '<h1> Tabela - Dest</h1>' +
                    '<p>' + CNPJ_dest + '</p>' +
                    '<p>' + xNome_dest + '</p>' +
                    '<p>' + xLgr_enderDest + '</p>' +
                    '<p>' + nro_enderDest + '</p>' +
                    '<p>' + xCpl_enderDest + '</p>' +
                    '<p>' + xBairro_enderDest + '</p>' +
                    '<p>' + cMun_enderDest + '</p>' +
                    '<p>' + xMun_enderDest + '</p>' +
                    '<p>' + UF_enderDest + '</p>' +
                    '<p>' + CEP_enderDest + '</p>' +
                    '<p>' + cPais_enderDest + '</p>' +
                    '<p>' + xPais_enderDest + '</p>' +
                    '<p>' + fone_enderDest + '</p>' +
                    '<p>' + IE_dest + '</p>' +

                    '<h1> Tabela - Retirada</h1>' +
                    '<p>' + CNPJ_retirada + '</p>' +
                    '<p>' + xLgr_retirada + '</p>' +
                    '<p>' + nro_retirada + '</p>' +
                    '<p>' + xCpl_retirada + '</p>' +
                    '<p>' + xBairro_retirada + '</p>' +
                    '<p>' + cMun_retirada + '</p>' +
                    '<p>' + xMun_retirada + '</p>' +
                    '<p>' + UF_retirada + '</p>' +

                    '<h1> Tabela - Entrega</h1>' +
                    '<p>' + CNPJ_entrega + '</p>' +
                    '<p>' + xLgr_entrega + '</p>' +
                    '<p>' + nro_entrega + '</p>' +
                    '<p>' + xCpl_entrega + '</p>' +
                    '<p>' + xBairro_entrega + '</p>' +
                    '<p>' + cMun_entrega + '</p>' +
                    '<p>' + xMun_entrega + '</p>' +
                    '<p>' + UF_entrega + '</p>' +

                    '<h1>Tabela - det2</h1>' +
                    '<p>' + cProd_prod + '</p>' +
                    '<p>' + xProd_prod + '</p>' +
                    '<p>' + CFOP_prod + '</p>' +
                    '<p>' + uCom_prod + '</p>' +
                    '<p>' + qCom_prod + '</p>' +
                    '<p>' + vUnCom_prod + '</p>' +
                    '<p>' + vProd_prod + '</p>' +
                    '<p>' + cEANTrib_prod + '</p>' +
                    '<p>' + uTrib_prod + '</p>' +
                    '<p>' + qTrib_prod + '</p>' +
                    '<p>' + vUnTrib_prod + '</p>' +

                    '<h1>Tabela - ICMS</h1>' +
                    '<p>' + orig_ICMS + '</p>' +
                    '<p>' + CST_ICMS + '</p>' +
                    '<p>' + modBC_ICMS + '</p>' +
                    '<p>' + vBC_ICMS + '</p>' +
                    '<p>' + pICMS_ICMS + '</p>' +
                    '<p>' + vICMS_ICMS + '</p>' +

                    '<h1>Tabela - PIS</h1>' +
                    '<p>' + CST_PIS + '</p>' +
                    '<p>' + vBC_PIS + '</p>' +
                    '<p>' + pPIS_PIS + '</p>' +
                    '<p>' + vPIS_PIS + '</p>' +

                    '<h1>Tabela - COFINS</h1>' +
                    '<p>' + CST_COFINS + '</p>' +
                    '<p>' + vBC_COFINS + '</p>' +
                    '<p>' + pCOFINS_COFINS + '</p>' +
                    '<p>' + vCOFINS_COFINS + '</p>' +

                    '<h1>Tabela - Total</h1>' +
                    '<p>' + vBC_ICMSTot + '</p>' +
                    '<p>' + vICMSTot + '</p>' +
                    '<p>' + vBCST_ICMSTot + '</p>' +
                    '<p>' + vST_ICMSTot + '</p>' +
                    '<p>' + vProd_ICMSTot + '</p>' +
                    '<p>' + vFrete_ICMSTot + '</p>' +
                    '<p>' + vSeg_ICMSTot + '</p>' +
                    '<p>' + vDesc_ICMSTot + '</p>' +
                    '<p>' + vII_ICMSTot + '</p>' +
                    '<p>' + vIPI_ICMSTot + '</p>' +
                    '<p>' + vPIS_ICMSTot + '</p>' +
                    '<p>' + vCOFINS_ICMSTot + '</p>' +
                    '<p>' + vOutro_ICMSTot + '</p>' +
                    '<p>' + vNF_ICMSTot + '</p>' +

                    '<h1>Tabela - Transp</h1>' +

                    '<p>' + modFrete_transp + '</p>' +
                    '<p>' + CNPJ_transporta + '</p>' +
                    '<p>' + xNome_transporta + '</p>' +
                    '<p>' + IE_transporta + '</p>' +
                    '<p>' + xEnder_transporta + '</p>' +
                    '<p>' + xMun_transporta + '</p>' +
                    '<p>' + UF_transporta + '</p>' +
                    '<p>' + placa_veicTransp + '</p>' +
                    '<p>' + UF_veicTransp + '</p>' +
                    '<p>' + RNTC_veicTransp + '</p>' +

                    '<h1>Tabela - Reboque</h1>' +
                    '<p>' + placa_reboque + '</p>' +
                    '<p>' + UF_reboque + '</p>' +
                    '<p>' + RNTC_reboque + '</p>' +

                    '<h1>Tabela - Vol</h1>' +
                    '<p>' + qVol_vol + '</p>' +
                    '<p>' + esp_vol + '</p>' +
                    '<p>' + marca_vol + '</p>' +
                    '<p>' + nVol_vol + '</p>' +
                    '<p>' + pesoL_vol + '</p>' +
                    '<p>' + pesoB_vol + '</p>' +
                    '<p>' + nLacre_vol + '</p>' +

                    '<h1>Tabela - InfAdic</h1>' +
                    '<p>' + infAdFisco_infAdic + '</p>' +

                    '<h1>Assinatura</h1>' +
                    '<p>' + SignatureValue + '</p>' +
                    '<p>' + X509Certificate + '</p>'

                );

            });
        });
    </script>
</body>

</html>