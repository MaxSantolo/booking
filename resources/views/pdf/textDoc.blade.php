<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Modulo prenotazione PickCenter</title>
    <meta name="description" content="Modulo prenotazione PickCenter">
    <meta name="author" content="PickCenter">

    <style>
        body {
            font-family: ff2;
        }
    </style>

</head>

<body>

<p style="text-align: center; background-image: url('/pdf/immagine.jpg'); background-repeat: no-repeat">
    <span style="display: inline !important; float: none; background-color: transparent; color: #ff6600; font-family: ff2; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 72.2px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-shadow: none; text-transform: none; visibility: visible; -webkit-text-stroke-color: transparent; -webkit-text-stroke-width: 0.72px; white-space: pre; word-spacing: 0px;">
      Modulo di prenotazione per day office o sala riunioni
    </span></p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati della societa' o ditta individuale</h3>
<table style="width: 100%;" border="1,8" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="width: 40.7259%; height: 13.2px;">denominazione*</td>
        <td style="width: 54.2741%; height: 13.2px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">sede legale in (citta' e prov) *</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">via civico e cap*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">telefono*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">fax*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">email*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">codice fiscale*</td>
        <td style="width: 54.2741%; height: 13px;">{{$user->ragione_sociale}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">partita iva*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">Codice Destinatario Univoco ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">PEC - Posta elettronica certificata ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">attivitta' esercitata**</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<h3>&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati del richiedente</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="height: 13.2px; width: 40.1749%;">nome e cognome*</td>
        <td style="height: 13.2px; width: 53.8251%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.1749%;">in qualita' di *</td>
        <td style="height: 13px; width: 53.8251%;">&nbsp;</td>
    </tr>
    </tbody>
</table>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati dell'utilizzatore del servizio</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">nome e cognome**</td>
        <td style="height: 13px; width: 53.2825%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">cittadinanza**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">residente in (citta' e prov)**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">via civico e cap**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">telefono**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">email**</td>
        <td style="height: 13px; width: 53.2825%;">{{$user->email}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">documento di identita'</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">numero **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato il **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato da**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<p style="font-size: 9px; font-style: oblique;">* Campo obbligatorio</p>
<p style="font-size: 9px; font-style: oblique;">** Campi da compilare prima dell'effettivo utilizzo unitamente alla consegna di una fotocopia del documento di identit&agrave; dell'utilizzatore</p>
<p style="font-size: 9px; font-style: oblique;">*** Fatturazione Elettronica obbligatoria dal 01/01/2019</p>
<p>&nbsp;</p>
<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">CON LA PRESENTE RICHIEDE LA SOMMINISTRAZIONE DEL SEGUENTE SERVIZIO</h4>
<table style="background-color: #d4efff; width: 100%;" border="0,5"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 12.3125px;">
        <td style="width: 21.6471%; height: 12.3125px;">Sede</td>
        <td style="width: 74.3529%; height: 12.3125px;">{{$booking->location}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">Risorsa</td>
        <td style="width: 74.3529%; height: 13px;">{{$room->name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data inizio</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->start_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data fine</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->end_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">numero persone</td>
        <td style="width: 74.3529%; height: 13px;">{{$room->pax}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">optional</td>
        <td style="width: 74.3529%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">ALLESTIMENTI PATICOLARI RICHIESTI</h4>
<table style="width: 100%; height: 80px;" border="0.5"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td>
            <p>&nbsp;</p>
            <p style="padding-left: 240px; text-align: right; font-size: 8px;"><em>la mancata compilazione del campo "Allestimenti particolari richiesti" da parte del Cliente<br /> esonera Pick Center Roma srl Unipersonale da qualsiassi responsabilit&agrave; per allestimenti non cofnormi alle esigenze del Cliente stesso.</em></p>
        </td>
    </tr>
    </tbody>
</table>
<p style="padding-left: 180px; text-align: right;">&nbsp;</p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0" style="padding-left: 340px;">IMPORTO TOTALE &euro;&nbsp;{{$booking->total_price}} + IVA</h3>
<p style="font-size: 8px;">Per n.2 o pi&ugrave; utilizzi anche non consecutivi viene richiesto, alla prenotazione, il pagamento del primo utilizzo (IVA inclusa). Il saldo degli ultilizzi restanti dovr&agrave; essere effettuato precedentemente alla data del primo utilizzo. In caso di disdetta, la giornata di utilizzo, pagata alla prenotazione, potr&agrave; essere recuperata entro i successivi 12 mesi.<br /> Il pagamento sar&agrave; effettato in anticipo mediante</p>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Contanti</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Carta di credito VISA MASTERCARD / BANCOMAT</td>
    </tr>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Bonifico bancario (IBAN: IT64C0306905069100000007642)</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">&nbsp;</td>
    </tr>
    </tbody>
</table>

<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">A TAL RIGUARDO SI RICHIEDE</h4>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Inoltro fattura via email</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Inoltro fattura via posta</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Consegna fattura a mano</td>
    </tr>
    </tbody>
</table>
<p><strong>NOTA BENE</strong></p>
<p style="font-size: 10px;">La richiesta avr&agrave; validit&agrave; solo previa conferma scritta da parte di Pick Center Roma srl Unipersonale e sar&agrave; ritenuta vincolante salvo disdetta da comunicarsi a Pick Center Roma srl Unipersonale al massimo 24 ore prima dell&rsquo;utilizzo.Una volta trascorso detto termine, la prenotazione non &egrave; cancellabile e Pick Center Roma srl Unipersonale addebiter&agrave; il costo relativo, indipendentemente dall&rsquo;uso.&nbsp;</p>
<p><strong>VUOI PUBBLICIZZARE IL TUO MEETING / EVENTO IN PICK CENTER</strong></p>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 1.5%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">&nbsp;</td>
        <td style="width: 30%; font-size: 8px;">Autorizzo Pick Center a pubblicizzare l'evento da me organizzato sui Social Network, sui monitor ubicati nelle reception e su tutti i supporti digitali che Pick Center vorra' mettere a disposizione</td>
    </tr>
    </tbody>
</table>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 21.8px;">
        <td style="width: 3%; background-color: grey; height: 21.8px;">&nbsp;</td>
        <td style="font-size: 8px; height: 21.8px;">Il Cliente dichiara di aver preso attenta visione e di aver compreso tutto il contenuto del presente modulo e delle condizioni generali.</td>
    </tr>
    <tr style="height: 39px;">
        <td style="width: 3%; height: 39px;">&nbsp;
            <table style="width: 24px; border: 1px solid; background-color: grey; height: 26px;">
                <tbody>
                <tr style="height: 10px; text-align: center;">
                    <td style="width: 14px;">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
        <td style="font-size: 8px; height: 39px;">Ai sensi degli artt. 1341 e 1342 c.c. il Cliente dichiara di aver preso attenta visione e di approvare specificatamente le seguenti clausole: Art. 1 (Efficacia del contratto), Art. 3 (Fatturazione), Art. 4 (Soggetti legittimati all&rsquo;utilizzo dei Servizi), Art. 6 (Responsabilit&agrave; del Cliente e di Pick Center Roma srl Unipersonale), Art. 8 (Privacy-titolarit&agrave;, responsabilit&agrave;, informativa e procedure), Art. 10 (Legge applicabile &ndash; Giurisdizione - Foro competente). Il sottoscritto cliente prende atto e d&agrave; consenso a che i dati personali, raccolti nella presente, siano trattati, nel rispetto delle disposizioni del D.L. 30 giugno 2003, n.196, solo per i fini essenziali per dar corso all&rsquo;eventuale esecuzione della richiesta di servizi.</td>
    </tr>
    </tbody>
</table>
<p style="text-align: center;">Firma del richiedente (da apporre solo in caso di prenotazione in presenza)</p>
<p>&nbsp;</p>
<p style="text-align: center;">_________________________________________________</p>
<div style="font-size: 8px;">
    <p><strong>CONDIZIONI GENERALI </strong></p>
    <p>&nbsp;</p>
    <p>Art. 1 - <strong>EFFICACIA del CONTRATTO</strong></p>
    <p>- La somministrazione dei servizi commissionati a Pick Center Roma srl Unipersonale &egrave; sospensivamente condizionata all&rsquo;accettazione da parte di Pick Center Roma srl Unipersonale della prenotazione, unitamente al pagamento anticipato del compenso per la somministrazione dei Servizi Day Office/Sala Riunioni, in conformit&agrave; all&rsquo;importo ed alle modalit&agrave; di pagamento sopra indicate.</p>
    <p>&nbsp;</p>
    <p>Art. 2 - <strong>OBBLIGHI del CLIENTE</strong></p>
    <p>- Il Cliente dichiara di essere in regola con ogni normativa disciplinante il corretto esercizio dell&rsquo;attivit&agrave; professionale svolta e, in ogni caso, si obbliga a svolgere la propria attivit&agrave; nel pieno e scrupoloso rispetto delle leggi e dei regolamenti che disciplinano tale attivit&agrave;, nonch&eacute; dei principi di buon costume ed analogo impegno assume per i propri dipendenti e/o collaboratori.</p>
    <p>&nbsp;</p>
    <p>Art. 3 - <strong>FATTURAZIONE</strong></p>
    <p>- La fattura relativa al servizio prenotato sar&agrave; trasmessa da Pick Center Roma srl Unipersonale, con comunicazione telematica, in formato PDF non modificabile, via posta ordinaria ovvero a mani, secondo quanto sopra indicato.</p>
    <p>&nbsp;</p>
    <p>Art. 4 - <strong>SOGGETTI LEGITTIMATI ALL&rsquo;UTILIZZO dei SERVIZI</strong></p>
    <p>- Il Cliente, con la sottoscrizione del Modulo di Prenotazione Day Office/Sala Riunioni, autorizza i soggetti indicati quali Clienti Utilizzatori del Servizio ad utilizzare per suo conto il Servizio Day Office/Sala Riunioni erogato in suo favore da Pick Center Roma srl Unipersonale.</p>
    <p>- Il Cliente ed i soggetti indicati quali Clienti Utilizzatori del Servizio prenderanno atto della rispondenza alle specifiche esigenze della Societ&agrave;/Ditta Cliente, ed al perfetto stato d&rsquo;uso, delle strutture e delle apparecchiature messe a disposizione da Pick Center Roma srl Unipersonale, impegnandosi anche in proprio al rimborso di eventuali danni causati alle stesse.</p>
    <p>- Il Cliente autorizza altres&igrave; i Clienti Utilizzatori del servizio a richiedere, in corso di utilizzazione del Servizio richiesto, eventuali Servizi Accessori Aggiuntivi, elencati nell&rsquo;apposito tariffario, del quale dichiara di aver preso attenta visione, e che accetta espressamente, impegnandosi al rimborso di eventuali danni causati alle apparecchiature noleggiate.</p>
    <p>- La modifica, da parte del Cliente, dei Clienti Utilizzatori del Servizio dovr&agrave; essere preventivamente ed idoneamente comunicata a Pick Center Roma srl Unipersonale.</p>
    <p>&nbsp;</p>
    <p>Art. 5 - <strong>CONDIZIONI di UTILIZZAZIONE del SERVIZIO</strong></p>
    <p>- I locali, le suppellettili, gli arredi e gli impianti ricevuti in uso devono essere trattati con la cura necessaria per l'uso cui sono destinati e non devono essere n&eacute; asportati n&eacute; danneggiati; le eventuali spese di ripristino degli stessi sono a carico del Cliente.</p>
    <p>- Qualora il Cliente utilizzi la connessione "high speed internet" erogata da Pick Center Roma srl Unipersonale, lo stesso dichiara espressamente che tutte le apparecchiature (personal computers, server, etc) che andr&agrave; a collegare alla rete di Pick Center Roma srl Unipersonale saranno dotate di software antivirus con aggiornamento automatico.</p>
    <p>- E&rsquo; consentita al Cliente un&rsquo;occupazione di banda High Speed Internet standard non superiore&nbsp; a circa 640Kbps.In caso di occupazione di banda superiore al 10% della quota consentita, il Cliente prende atto ed accetta che Pick Center Roma srl Unipersonale ha la facolt&agrave; di disconnettere immediatamente e senza alcun preavviso il/i collegamento/i High Speed Internet.</p>
    <p>- Il Cliente d&agrave; atto ed accetta, inoltre, che le utenze telefoniche, idriche ed elettriche sono in comune con altri Clienti di Pick Center Roma srl Unipersonale e che i relativi servizi, cos&igrave; come in generale i servizi resi da Pick Center Roma srl Unipersonale si intendono forniti compatibilmente con le caratteri&not;stiche tecniche dei relativi impianti nonch&eacute; con le disponibilit&agrave; anche temporali del personale alle dipendenze di Pick Center Roma srl Unipersonale.</p>
    <p>&nbsp;</p>
    <p>Art. 6 - <strong>RESPONSABILITA' del CLIENTE e di Pick Center Roma srl Unipersonale</strong></p>
    <p>- Il Cliente assume ogni responsabilit&agrave; per l'attivit&agrave; dallo stesso e/o suoi Ausiliari svolta nei locali di Pick Center Roma srl Unipersonale e si obbliga a tenere indenne e manlevare Pick Center Roma srl Unipersonale da qualsiasi responsabilit&agrave; dovesse derivarle da detta attivit&agrave; e/o da attivit&agrave; a questa connesse o collegate, salvo i casi di colpa grava o dolo di Pick Center Roma srl Unipersonale</p>
    <p>- Il Cliente &egrave;, inoltre, responsabile per ogni e qualunque danno che possa essere causato a Pick Center Roma srl Unipersonale - ai locali, agli arredi e agli impianti, o a suoi dipendenti, o a terzi - da parte sua o di suoi clienti, ospiti, visitatori e comunque da persone che accedano su sua richiesta o istruzione nel locali inerenti il Servizio richiesto.</p>
    <p>- Il Cliente si obbliga, inoltre, a non lasciare incustoditi presso la sede di Pick Center Roma srl Unipersonale beni di valore e/o documenti. Salvo comunque detto obbligo, il Cliente esonera Pick Center Roma srl Unipersonale da qualsiasi responsabilit&agrave; per eventuale sottrazione, distruzione&nbsp; danneggiamento o smarrimento, degli stessi e di ogni altro bene o documento lasciato dal cliente presso Pick Center Roma srl Unipersonale, derivanti da qualsivoglia causa o fatto non imputabile a dolo o colpa grave di Pick Center Roma srl Unipersonale.</p>
    <p>- Il Cliente, nel prendere atto della natura dei servizi resi da Pick Center Roma srl Unipersonale, nonch&eacute; della circostanza di fatto che detti servizi sono resi nei medesimi locali anche ad altri soggetti terzi rispetto al rapporto di cui al presente accordo, si obbliga a far si che i propri comportamenti e quelli dei propri dipendenti e di ogni altra persona che acceda ai locali inerenti il Servizio richiesto siano improntati alle migliori norme di correttezza, buona fede e buona educazione e di astenersi dal porre in essere qualunque condotta e/o dall&rsquo;assumere comportamenti e atteggiamenti che possano recare nocumento agli altri clienti di Pick Center Roma srl Unipersonale nel godimento dei servizi dalla stessa prestati.</p>
    <p>- Pick Center Roma srl Unipersonale &egrave; esonerata da qualsiasi responsabilit&agrave;, salvo i casi di dolo o colpa grave di Pick Center Roma srl Unipersonale stessa, ed il Cliente rinuncia espressamente a qualsiasi pretesa per disservizi o mancata fornitura dei servizi che dovessero verificarsi, ivi inclusi i casi di inconvenienti tecnici agli impianti e/o alle attrezzature o limitazioni d'uso imposte da Pubbliche Autorit&agrave; o modificazioni nella fornitura dei servizi relativi ad utenze esterne (quali ad es.: modificazioni delle numerazioni delle linee telefoniche, etc.).</p>
    <p>- Conformemente a quanto disposto dall&rsquo;art. 1229 c.c., il Cliente esonera sin d&rsquo;ora Pick Center da qualsiasi responsabilit&agrave; relativa alla sopravvenuta impossibilit&agrave; di usufruire del Servizio prenotato. In siffatta ipotesi, al Cliente sar&agrave; riconosciuto esclusivamente un diritto limitato alla refusione del corrispettivo del prezzo versato per il Servizio non utilizzato.</p>
    <p>&nbsp;</p>
    <p>Art. 7 - <strong>OBBLIGO di RISERVATEZZA</strong></p>
    <p>- Pick Center Roma srl Unipersonale si obbliga alla massima riservatezza su tutte le informazioni, dati e/o comunicazioni di cui &egrave; venuta a conoscenza in relazione ai servizi prestati, salva la facolt&agrave; di dare le necessarie informazioni a suoi incaricati e/o dipendenti, per ragioni inerenti il rapporto corrente, alle competenti Autorit&agrave; e salva, ovviamente, la facolt&agrave; di consentire accessi e ispezioni da parte di Pubbliche Autorit&agrave; che ne facciano richiesta nei modi di legge.</p>
    <p>- In particolare, il Cliente, attesi gli obblighi di identificazione e di registrazione imposti dal Decreto Legge 27 luglio 2005 n. 144, convertito con Legge 31 luglio 2005 n. 155, espressamente autorizza sin d&rsquo;ora Pick Center Roma srl Unipersonale a porre in essere tutti gli adempimenti all&rsquo;uopo necessari, obbligandosi nel contempo a fornire tutti i dati e le informazioni necessarie per adempiere gli stessi.</p>
    <p>- Il Cliente si obbliga a non acquisire informazioni sull'attivit&agrave; di altri clienti e, ove venutone comunque in possesso, si obbliga a non diffonderle in alcuna forma.</p>
    <p>- Dal presente obbligo di riservatezza, restano espressamente escluse le informazioni che: a) siano di pubblico dominio non a seguito di violazione del presente obbligo; b) siano in possesso di chi le riceve gi&agrave; prima che tale divulgazione abbia avuto luogo; c) siano state ottenute da terzi senza vincoli di riservatezza.</p>
    <p>&nbsp;</p>
    <p>Art. 8 - <strong>PRIVACY &ndash; TITOLARITA&rsquo;, RESPONSABILITA&rsquo;, INFORMATIVA E PROCEDURE</strong></p>
    <p>8.1 Le parti si danno reciprocamente atto che i dati siano trattati, nel rispetto delle disposizioni del D.Lg. 30 giugno 2003 n. 196, solo per le finalit&agrave; essenziali e per i tempi necessari per dar corso all&rsquo;esecuzione dei servizi richiesti e degli obblighi contenuti nel presente accordo. In particolare, Pick Center Srl Unipersonale &egrave; titolare dei trattamenti legati alle finalit&agrave; amministrativo-contabili nei confronti del cliente.</p>
    <p>Il cliente risulta essere titolare di tutti i trattamenti effettuati utilizzando gli spazi, il sistema informativo ed ogni strumento/servizio acquistato in ragione del presente accordo (ivi comprese le eventuali successive richieste e i servizi aggiuntivi a canone) in quanto le finalit&agrave; del trattamento, le modalit&agrave;, ed ogni elemento legato a quei trattamenti viene definito dal cliente stesso. A tal proposito il presente contratto contiene la relativa nomina a responsabile del trattamento dati.</p>
    <p>8.2 Per quanto precedentemente indicato, nel caso in cui i trattamenti siano svolti per ragioni di servizio da parte di Pick Center S.r.l. Unipersonale per conto del Cliente (a mero titolo esemplificativo, per servizi di risposta alle telefonate, invio fax, attivit&agrave; di segreteria, fornitura di dati richiesti dal cliente, custodia di corrispondenza o atti, ed ogni servizio acquistato dal cliente in ragione del presente contratto ivi compresi i servizi a cionsumo.) il Cliente &egrave; consapevole di dover ottemperare a quanto imposto al Titolare del trattamento dati dalla vigente normativa. A titolo esemplificativo si indicano gli obblighi di informativa ex art 13 D.lgs 196/03 in relazione a tutti i soggetti interessati (es. al personale e/o collaboratori, partner, clienti&hellip; ) obbligo di nomina degli incaricati, ricezione del consenso al trattamento dati ove necessario (e qualsivoglia obbligo che ricade in capo al Titolare del trattamento). In considerazione della titolarit&agrave; dei trattamenti in capo al cliente, quest&rsquo;ultimo in caso di necessit&agrave; fornir&agrave; a Pick Center Srl Unipersonale un apposito documento nel quale indicher&agrave; le istruzioni per la corretta gestione delle informazioni trattate per suo conto. Il Cliente garantisce di non affidare al trattamento da parte di Pick Center Srl Unipersonale. dati sensibili (ai sensi dell'art. 4 del D.Lg. 30 giugno 2003 n. 196) relativi a terzi o a s&eacute; medesimo. Nel caso in cui fosse volont&agrave; del Cliente affidare un siffatto tipo di trattamento di dati sensibili, per suo conto, a Pick Center Srl Unipersonale, il Cliente si obbliga a richiedere autorizzazione a Pick Center Srl Unipersonale e ad espletare ogni adempimento legale che sia richiesto al titolare del trattamento ai sensi del D.Lgs. 30 giugno 2003 n. 196 ed eventuali provvedimenti dell&rsquo;Autorit&agrave; Garante.</p>
    <p>&nbsp;</p>
    <p>Art. 9 - <strong>REGOLAMENTO FISCALE</strong></p>
    <p>Il Cliente prende atto ed accetta che i corrispettivi si intendono da maggiorarsi dell'aliquota IVA nella misura di legge.</p>
    <p>&nbsp;</p>
    <p>Art. 10 - <strong>LEGGE APPLICABILE &ndash; GIURISDIZIONE &ndash; FORO COMPETENTE</strong></p>
    <p>Il presente accordo &egrave; disciplinato dalla legge italiana. Le parti riconoscono, altres&igrave;, la giurisdizione esclusiva del giudice italiano per la risoluzione di ogni controversia che possa tra esse insorgere circa l&rsquo;interpretazione o l&rsquo;esecuzione dello stesso, con competenza, anch&rsquo;essa esclusiva, del Foro di Roma.</p>
    <p>&nbsp;</p>
</div>

<p><strong>SEZIONE PER IL CLIENTE UTILIZZATORE DEL SERVIZIO</strong></p>
<p>&nbsp;</p>
<p>Per presa visione e accettazione integrale del presente modulo. Il sottoscritto prende atto, altres&igrave;, della rispondenza alle specifiche esigenze della Societ&agrave;/Ditta Cliente, ed al perfetto stato d&rsquo;uso, delle strutture e delle apparecchiature messe a disposizione da Pick Center Roma srl Unipersonale, impegnandosi anche in proprio al rimborso di eventuali danni causati alle stesse.</p>
<p>&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">IL CLIENTE UTILIZZATORE DEL SERVIZIO</p>
<p style="text-align: center; padding-left: 240px;">&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">in qualit&agrave; di &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; della &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>
<p style="text-align: center; padding-left: 240px;">&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">Firma:</p>
<p style="text-align: center; padding-left: 240px;">__________________________________</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>CONSENSO al trattamento dei dati dell'utilizzatore del servizio<br /></strong></p>
<p>&nbsp;</p>
<p>Il sottoscritto utilizzatore prende atto e d&agrave; consenso che i dati forniti verranno utilizzati da Pick Center Roma Srl ai sensi dell'art. 13 del D.Lgs 196/03 (normativa sulla privacy), anche tramite soggetti esterni, al fine di permettere l'espletamento degli adempimenti informativi, amministrativi, commerciali e contabili connessi al rapporto contrattuale. Copia integrale dell'informativa potr&agrave; essere visionata al seguente indirizzo web: www.pickcenter.it.</p>
<p style="padding-left: 270px;">&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">IL CLIENTE UTILIZZATORE DEL SERVIZIO</p>
<p style="text-align: center; padding-left: 270px;">&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">in qualit&agrave; di &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; della &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">Firma:</p>
<p style="text-align: center; padding-left: 270px;">__________________________________</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>




<p style="text-align: center; background-image: url('/pdf/immagine.jpg'); background-repeat: no-repeat">
    <span style="display: inline !important; float: none; background-color: transparent; color: #ff6600; font-family: ff2; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 72.2px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-shadow: none; text-transform: none; visibility: visible; -webkit-text-stroke-color: transparent; -webkit-text-stroke-width: 0.72px; white-space: pre; word-spacing: 0px;">
      Modulo di prenotazione per day office o sala riunioni
    </span></p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati della societa' o ditta individuale</h3>
<table style="width: 100%;" border="1,8" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="width: 40.7259%; height: 13.2px;">denominazione*</td>
        <td style="width: 54.2741%; height: 13.2px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">sede legale in (citta' e prov) *</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">via civico e cap*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">telefono*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">fax*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">email*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">codice fiscale*</td>
        <td style="width: 54.2741%; height: 13px;">{{$user->ragione_sociale}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">partita iva*</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">Codice Destinatario Univoco ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">PEC - Posta elettronica certificata ***</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 40.7259%; height: 13px;">attivitta' esercitata**</td>
        <td style="width: 54.2741%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<h3>&nbsp;</h3>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati del richiedente</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13.2px;">
        <td style="height: 13.2px; width: 40.1749%;">nome e cognome*</td>
        <td style="height: 13.2px; width: 53.8251%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.1749%;">in qualita' di *</td>
        <td style="height: 13px; width: 53.8251%;">&nbsp;</td>
    </tr>
    </tbody>
</table>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">Dati dell'utilizzatore del servizio</h3>
<table style="width: 100%;" border="1" cellpadding="4"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">nome e cognome**</td>
        <td style="height: 13px; width: 53.2825%;">{{$booking->booked_name}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">cittadinanza**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">residente in (citta' e prov)**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">via civico e cap**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">telefono**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">email**</td>
        <td style="height: 13px; width: 53.2825%;">{{$user->email}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">documento di identita'</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">numero **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato il **</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
        <td style="height: 13px; width: 40.7175%;">rilasciato da**</td>
        <td style="height: 13px; width: 53.2825%;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<p style="font-size: 9px; font-style: oblique;">* Campo obbligatorio</p>
<p style="font-size: 9px; font-style: oblique;">** Campi da compilare prima dell'effettivo utilizzo unitamente alla consegna di una fotocopia del documento di identit&agrave; dell'utilizzatore</p>
<p style="font-size: 9px; font-style: oblique;">*** Fatturazione Elettronica obbligatoria dal 01/01/2019</p>
<p>&nbsp;</p>
<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">CON LA PRESENTE RICHIEDE LA SOMMINISTRAZIONE DEL SEGUENTE SERVIZIO</h4>
<table style="background-color: #d4efff; width: 100%;" border="0,5"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 12.3125px;">
        <td style="width: 21.6471%; height: 12.3125px;">location</td>
        <td style="width: 74.3529%; height: 12.3125px;">{{$booking->location}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data inizio</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->start_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">data fine</td>
        <td style="width: 74.3529%; height: 13px;">{{$booking->end_date}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">numero persone</td>
        <td style="width: 74.3529%; height: 13px;">{{$room->pax}}</td>
    </tr>
    <tr style="height: 13px;">
        <td style="width: 21.6471%; height: 13px;">optional</td>
        <td style="width: 74.3529%; height: 13px;">&nbsp;</td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">ALLESTIMENTI PATICOLARI RICHIESTI</h4>
<table style="width: 100%; height: 80px;" border="0.5"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td>
            <p>&nbsp;</p>
            <p style="padding-left: 240px; text-align: right; font-size: 8px;"><em>la mancata compilazione del campo "Allestimenti particolari richiesti" da parte del Cliente<br /> esonera Pick Center Roma srl Unipersonale da qualsiassi responsabilit&agrave; per allestimenti non cofnormi alle esigenze del Cliente stesso.</em></p>
        </td>
    </tr>
    </tbody>
</table>
<p style="padding-left: 180px; text-align: right;">&nbsp;</p>
<h3 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0" style="padding-left: 340px;">IMPORTO TOTALE &euro;&nbsp;{{$booking->total_price}} + IVA</h3>
<p style="font-size: 8px;">Per n.2 o pi&ugrave; utilizzi anche non consecutivi viene richiesto, alla prenotazione, il pagamento del primo utilizzo (IVA inclusa). Il saldo degli ultilizzi restanti dovr&agrave; essere effettuato precedentemente alla data del primo utilizzo. In caso di disdetta, la giornata di utilizzo, pagata alla prenotazione, potr&agrave; essere recuperata entro i successivi 12 mesi.<br /> Il pagamento sar&agrave; effettato in anticipo mediante</p>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Contanti</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Carta di credito VISA MASTERCARD / BANCOMAT</td>
    </tr>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">Bonifico bancario (IBAN: IT64C0306905069100000007642)</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 50%; font-size: 12px;">&nbsp;</td>
    </tr>
    </tbody>
</table>

<h4 class="t m0 x9 ha yc ff2 fs4 fc1 sc0 ls0 ws0">A TAL RIGUARDO SI RICHIEDE</h4>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Inoltro fattura via email</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Inoltro fattura via posta</td>
        <td style="width: 3%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">Consegna fattura a mano</td>
    </tr>
    </tbody>
</table>
<p><strong>NOTA BENE</strong></p>
<p style="font-size: 10px;">La richiesta avr&agrave; validit&agrave; solo previa conferma scritta da parte di Pick Center Roma srl Unipersonale e sar&agrave; ritenuta vincolante salvo disdetta da comunicarsi a Pick Center Roma srl Unipersonale al massimo 24 ore prima dell&rsquo;utilizzo.Una volta trascorso detto termine, la prenotazione non &egrave; cancellabile e Pick Center Roma srl Unipersonale addebiter&agrave; il costo relativo, indipendentemente dall&rsquo;uso.&nbsp;</p>
<p><strong>VUOI PUBBLICIZZARE IL TUO MEETING / EVENTO IN PICK CENTER</strong></p>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr>
        <td style="width: 1.5%; background-color: grey;">&nbsp;</td>
        <td style="width: 30%; font-size: 12px;">&nbsp;</td>
        <td style="width: 30%; font-size: 8px;">Autorizzo Pick Center a pubblicizzare l'evento da me organizzato sui Social Network, sui monitor ubicati nelle reception e su tutti i supporti digitali che Pick Center vorra' mettere a disposizione</td>
    </tr>
    </tbody>
</table>
<table style="width: 100%;" border="1"><caption>&nbsp;</caption>
    <tbody>
    <tr style="height: 21.8px;">
        <td style="width: 3%; background-color: grey; height: 21.8px;">&nbsp;</td>
        <td style="font-size: 8px; height: 21.8px;">Il Cliente dichiara di aver preso attenta visione e di aver compreso tutto il contenuto del presente modulo e delle condizioni generali.</td>
    </tr>
    <tr style="height: 39px;">
        <td style="width: 3%; height: 39px;">&nbsp;
            <table style="width: 24px; border: 1px solid; background-color: grey; height: 26px;">
                <tbody>
                <tr style="height: 10px; text-align: center;">
                    <td style="width: 14px;">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
        <td style="font-size: 8px; height: 39px;">Ai sensi degli artt. 1341 e 1342 c.c. il Cliente dichiara di aver preso attenta visione e di approvare specificatamente le seguenti clausole: Art. 1 (Efficacia del contratto), Art. 3 (Fatturazione), Art. 4 (Soggetti legittimati all&rsquo;utilizzo dei Servizi), Art. 6 (Responsabilit&agrave; del Cliente e di Pick Center Roma srl Unipersonale), Art. 8 (Privacy-titolarit&agrave;, responsabilit&agrave;, informativa e procedure), Art. 10 (Legge applicabile &ndash; Giurisdizione - Foro competente). Il sottoscritto cliente prende atto e d&agrave; consenso a che i dati personali, raccolti nella presente, siano trattati, nel rispetto delle disposizioni del D.L. 30 giugno 2003, n.196, solo per i fini essenziali per dar corso all&rsquo;eventuale esecuzione della richiesta di servizi.</td>
    </tr>
    </tbody>
</table>
<p style="text-align: center;">Firma del richiedente (da apporre solo in caso di prenotazione in presenza)</p>
<p>&nbsp;</p>
<p style="text-align: center;">_________________________________________________</p>
<div style="font-size: 8px;">
    <p><strong>CONDIZIONI GENERALI </strong></p>
    <p>&nbsp;</p>
    <p>Art. 1 - <strong>EFFICACIA del CONTRATTO</strong></p>
    <p>- La somministrazione dei servizi commissionati a Pick Center Roma srl Unipersonale &egrave; sospensivamente condizionata all&rsquo;accettazione da parte di Pick Center Roma srl Unipersonale della prenotazione, unitamente al pagamento anticipato del compenso per la somministrazione dei Servizi Day Office/Sala Riunioni, in conformit&agrave; all&rsquo;importo ed alle modalit&agrave; di pagamento sopra indicate.</p>
    <p>&nbsp;</p>
    <p>Art. 2 - <strong>OBBLIGHI del CLIENTE</strong></p>
    <p>- Il Cliente dichiara di essere in regola con ogni normativa disciplinante il corretto esercizio dell&rsquo;attivit&agrave; professionale svolta e, in ogni caso, si obbliga a svolgere la propria attivit&agrave; nel pieno e scrupoloso rispetto delle leggi e dei regolamenti che disciplinano tale attivit&agrave;, nonch&eacute; dei principi di buon costume ed analogo impegno assume per i propri dipendenti e/o collaboratori.</p>
    <p>&nbsp;</p>
    <p>Art. 3 - <strong>FATTURAZIONE</strong></p>
    <p>- La fattura relativa al servizio prenotato sar&agrave; trasmessa da Pick Center Roma srl Unipersonale, con comunicazione telematica, in formato PDF non modificabile, via posta ordinaria ovvero a mani, secondo quanto sopra indicato.</p>
    <p>&nbsp;</p>
    <p>Art. 4 - <strong>SOGGETTI LEGITTIMATI ALL&rsquo;UTILIZZO dei SERVIZI</strong></p>
    <p>- Il Cliente, con la sottoscrizione del Modulo di Prenotazione Day Office/Sala Riunioni, autorizza i soggetti indicati quali Clienti Utilizzatori del Servizio ad utilizzare per suo conto il Servizio Day Office/Sala Riunioni erogato in suo favore da Pick Center Roma srl Unipersonale.</p>
    <p>- Il Cliente ed i soggetti indicati quali Clienti Utilizzatori del Servizio prenderanno atto della rispondenza alle specifiche esigenze della Societ&agrave;/Ditta Cliente, ed al perfetto stato d&rsquo;uso, delle strutture e delle apparecchiature messe a disposizione da Pick Center Roma srl Unipersonale, impegnandosi anche in proprio al rimborso di eventuali danni causati alle stesse.</p>
    <p>- Il Cliente autorizza altres&igrave; i Clienti Utilizzatori del servizio a richiedere, in corso di utilizzazione del Servizio richiesto, eventuali Servizi Accessori Aggiuntivi, elencati nell&rsquo;apposito tariffario, del quale dichiara di aver preso attenta visione, e che accetta espressamente, impegnandosi al rimborso di eventuali danni causati alle apparecchiature noleggiate.</p>
    <p>- La modifica, da parte del Cliente, dei Clienti Utilizzatori del Servizio dovr&agrave; essere preventivamente ed idoneamente comunicata a Pick Center Roma srl Unipersonale.</p>
    <p>&nbsp;</p>
    <p>Art. 5 - <strong>CONDIZIONI di UTILIZZAZIONE del SERVIZIO</strong></p>
    <p>- I locali, le suppellettili, gli arredi e gli impianti ricevuti in uso devono essere trattati con la cura necessaria per l'uso cui sono destinati e non devono essere n&eacute; asportati n&eacute; danneggiati; le eventuali spese di ripristino degli stessi sono a carico del Cliente.</p>
    <p>- Qualora il Cliente utilizzi la connessione "high speed internet" erogata da Pick Center Roma srl Unipersonale, lo stesso dichiara espressamente che tutte le apparecchiature (personal computers, server, etc) che andr&agrave; a collegare alla rete di Pick Center Roma srl Unipersonale saranno dotate di software antivirus con aggiornamento automatico.</p>
    <p>- E&rsquo; consentita al Cliente un&rsquo;occupazione di banda High Speed Internet standard non superiore&nbsp; a circa 640Kbps.In caso di occupazione di banda superiore al 10% della quota consentita, il Cliente prende atto ed accetta che Pick Center Roma srl Unipersonale ha la facolt&agrave; di disconnettere immediatamente e senza alcun preavviso il/i collegamento/i High Speed Internet.</p>
    <p>- Il Cliente d&agrave; atto ed accetta, inoltre, che le utenze telefoniche, idriche ed elettriche sono in comune con altri Clienti di Pick Center Roma srl Unipersonale e che i relativi servizi, cos&igrave; come in generale i servizi resi da Pick Center Roma srl Unipersonale si intendono forniti compatibilmente con le caratteri&not;stiche tecniche dei relativi impianti nonch&eacute; con le disponibilit&agrave; anche temporali del personale alle dipendenze di Pick Center Roma srl Unipersonale.</p>
    <p>&nbsp;</p>
    <p>Art. 6 - <strong>RESPONSABILITA' del CLIENTE e di Pick Center Roma srl Unipersonale</strong></p>
    <p>- Il Cliente assume ogni responsabilit&agrave; per l'attivit&agrave; dallo stesso e/o suoi Ausiliari svolta nei locali di Pick Center Roma srl Unipersonale e si obbliga a tenere indenne e manlevare Pick Center Roma srl Unipersonale da qualsiasi responsabilit&agrave; dovesse derivarle da detta attivit&agrave; e/o da attivit&agrave; a questa connesse o collegate, salvo i casi di colpa grava o dolo di Pick Center Roma srl Unipersonale</p>
    <p>- Il Cliente &egrave;, inoltre, responsabile per ogni e qualunque danno che possa essere causato a Pick Center Roma srl Unipersonale - ai locali, agli arredi e agli impianti, o a suoi dipendenti, o a terzi - da parte sua o di suoi clienti, ospiti, visitatori e comunque da persone che accedano su sua richiesta o istruzione nel locali inerenti il Servizio richiesto.</p>
    <p>- Il Cliente si obbliga, inoltre, a non lasciare incustoditi presso la sede di Pick Center Roma srl Unipersonale beni di valore e/o documenti. Salvo comunque detto obbligo, il Cliente esonera Pick Center Roma srl Unipersonale da qualsiasi responsabilit&agrave; per eventuale sottrazione, distruzione&nbsp; danneggiamento o smarrimento, degli stessi e di ogni altro bene o documento lasciato dal cliente presso Pick Center Roma srl Unipersonale, derivanti da qualsivoglia causa o fatto non imputabile a dolo o colpa grave di Pick Center Roma srl Unipersonale.</p>
    <p>- Il Cliente, nel prendere atto della natura dei servizi resi da Pick Center Roma srl Unipersonale, nonch&eacute; della circostanza di fatto che detti servizi sono resi nei medesimi locali anche ad altri soggetti terzi rispetto al rapporto di cui al presente accordo, si obbliga a far si che i propri comportamenti e quelli dei propri dipendenti e di ogni altra persona che acceda ai locali inerenti il Servizio richiesto siano improntati alle migliori norme di correttezza, buona fede e buona educazione e di astenersi dal porre in essere qualunque condotta e/o dall&rsquo;assumere comportamenti e atteggiamenti che possano recare nocumento agli altri clienti di Pick Center Roma srl Unipersonale nel godimento dei servizi dalla stessa prestati.</p>
    <p>- Pick Center Roma srl Unipersonale &egrave; esonerata da qualsiasi responsabilit&agrave;, salvo i casi di dolo o colpa grave di Pick Center Roma srl Unipersonale stessa, ed il Cliente rinuncia espressamente a qualsiasi pretesa per disservizi o mancata fornitura dei servizi che dovessero verificarsi, ivi inclusi i casi di inconvenienti tecnici agli impianti e/o alle attrezzature o limitazioni d'uso imposte da Pubbliche Autorit&agrave; o modificazioni nella fornitura dei servizi relativi ad utenze esterne (quali ad es.: modificazioni delle numerazioni delle linee telefoniche, etc.).</p>
    <p>- Conformemente a quanto disposto dall&rsquo;art. 1229 c.c., il Cliente esonera sin d&rsquo;ora Pick Center da qualsiasi responsabilit&agrave; relativa alla sopravvenuta impossibilit&agrave; di usufruire del Servizio prenotato. In siffatta ipotesi, al Cliente sar&agrave; riconosciuto esclusivamente un diritto limitato alla refusione del corrispettivo del prezzo versato per il Servizio non utilizzato.</p>
    <p>&nbsp;</p>
    <p>Art. 7 - <strong>OBBLIGO di RISERVATEZZA</strong></p>
    <p>- Pick Center Roma srl Unipersonale si obbliga alla massima riservatezza su tutte le informazioni, dati e/o comunicazioni di cui &egrave; venuta a conoscenza in relazione ai servizi prestati, salva la facolt&agrave; di dare le necessarie informazioni a suoi incaricati e/o dipendenti, per ragioni inerenti il rapporto corrente, alle competenti Autorit&agrave; e salva, ovviamente, la facolt&agrave; di consentire accessi e ispezioni da parte di Pubbliche Autorit&agrave; che ne facciano richiesta nei modi di legge.</p>
    <p>- In particolare, il Cliente, attesi gli obblighi di identificazione e di registrazione imposti dal Decreto Legge 27 luglio 2005 n. 144, convertito con Legge 31 luglio 2005 n. 155, espressamente autorizza sin d&rsquo;ora Pick Center Roma srl Unipersonale a porre in essere tutti gli adempimenti all&rsquo;uopo necessari, obbligandosi nel contempo a fornire tutti i dati e le informazioni necessarie per adempiere gli stessi.</p>
    <p>- Il Cliente si obbliga a non acquisire informazioni sull'attivit&agrave; di altri clienti e, ove venutone comunque in possesso, si obbliga a non diffonderle in alcuna forma.</p>
    <p>- Dal presente obbligo di riservatezza, restano espressamente escluse le informazioni che: a) siano di pubblico dominio non a seguito di violazione del presente obbligo; b) siano in possesso di chi le riceve gi&agrave; prima che tale divulgazione abbia avuto luogo; c) siano state ottenute da terzi senza vincoli di riservatezza.</p>
    <p>&nbsp;</p>
    <p>Art. 8 - <strong>PRIVACY &ndash; TITOLARITA&rsquo;, RESPONSABILITA&rsquo;, INFORMATIVA E PROCEDURE</strong></p>
    <p>8.1 Le parti si danno reciprocamente atto che i dati siano trattati, nel rispetto delle disposizioni del D.Lg. 30 giugno 2003 n. 196, solo per le finalit&agrave; essenziali e per i tempi necessari per dar corso all&rsquo;esecuzione dei servizi richiesti e degli obblighi contenuti nel presente accordo. In particolare, Pick Center Srl Unipersonale &egrave; titolare dei trattamenti legati alle finalit&agrave; amministrativo-contabili nei confronti del cliente.</p>
    <p>Il cliente risulta essere titolare di tutti i trattamenti effettuati utilizzando gli spazi, il sistema informativo ed ogni strumento/servizio acquistato in ragione del presente accordo (ivi comprese le eventuali successive richieste e i servizi aggiuntivi a canone) in quanto le finalit&agrave; del trattamento, le modalit&agrave;, ed ogni elemento legato a quei trattamenti viene definito dal cliente stesso. A tal proposito il presente contratto contiene la relativa nomina a responsabile del trattamento dati.</p>
    <p>8.2 Per quanto precedentemente indicato, nel caso in cui i trattamenti siano svolti per ragioni di servizio da parte di Pick Center S.r.l. Unipersonale per conto del Cliente (a mero titolo esemplificativo, per servizi di risposta alle telefonate, invio fax, attivit&agrave; di segreteria, fornitura di dati richiesti dal cliente, custodia di corrispondenza o atti, ed ogni servizio acquistato dal cliente in ragione del presente contratto ivi compresi i servizi a cionsumo.) il Cliente &egrave; consapevole di dover ottemperare a quanto imposto al Titolare del trattamento dati dalla vigente normativa. A titolo esemplificativo si indicano gli obblighi di informativa ex art 13 D.lgs 196/03 in relazione a tutti i soggetti interessati (es. al personale e/o collaboratori, partner, clienti&hellip; ) obbligo di nomina degli incaricati, ricezione del consenso al trattamento dati ove necessario (e qualsivoglia obbligo che ricade in capo al Titolare del trattamento). In considerazione della titolarit&agrave; dei trattamenti in capo al cliente, quest&rsquo;ultimo in caso di necessit&agrave; fornir&agrave; a Pick Center Srl Unipersonale un apposito documento nel quale indicher&agrave; le istruzioni per la corretta gestione delle informazioni trattate per suo conto. Il Cliente garantisce di non affidare al trattamento da parte di Pick Center Srl Unipersonale. dati sensibili (ai sensi dell'art. 4 del D.Lg. 30 giugno 2003 n. 196) relativi a terzi o a s&eacute; medesimo. Nel caso in cui fosse volont&agrave; del Cliente affidare un siffatto tipo di trattamento di dati sensibili, per suo conto, a Pick Center Srl Unipersonale, il Cliente si obbliga a richiedere autorizzazione a Pick Center Srl Unipersonale e ad espletare ogni adempimento legale che sia richiesto al titolare del trattamento ai sensi del D.Lgs. 30 giugno 2003 n. 196 ed eventuali provvedimenti dell&rsquo;Autorit&agrave; Garante.</p>
    <p>&nbsp;</p>
    <p>Art. 9 - <strong>REGOLAMENTO FISCALE</strong></p>
    <p>Il Cliente prende atto ed accetta che i corrispettivi si intendono da maggiorarsi dell'aliquota IVA nella misura di legge.</p>
    <p>&nbsp;</p>
    <p>Art. 10 - <strong>LEGGE APPLICABILE &ndash; GIURISDIZIONE &ndash; FORO COMPETENTE</strong></p>
    <p>Il presente accordo &egrave; disciplinato dalla legge italiana. Le parti riconoscono, altres&igrave;, la giurisdizione esclusiva del giudice italiano per la risoluzione di ogni controversia che possa tra esse insorgere circa l&rsquo;interpretazione o l&rsquo;esecuzione dello stesso, con competenza, anch&rsquo;essa esclusiva, del Foro di Roma.</p>
    <p>&nbsp;</p>
</div>

<p><strong>SEZIONE PER IL CLIENTE UTILIZZATORE DEL SERVIZIO</strong></p>
<p>&nbsp;</p>
<p>Per presa visione e accettazione integrale del presente modulo. Il sottoscritto prende atto, altres&igrave;, della rispondenza alle specifiche esigenze della Societ&agrave;/Ditta Cliente, ed al perfetto stato d&rsquo;uso, delle strutture e delle apparecchiature messe a disposizione da Pick Center Roma srl Unipersonale, impegnandosi anche in proprio al rimborso di eventuali danni causati alle stesse.</p>
<p>&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">IL CLIENTE UTILIZZATORE DEL SERVIZIO</p>
<p style="text-align: center; padding-left: 240px;">&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">in qualit&agrave; di &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; della &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>
<p style="text-align: center; padding-left: 240px;">&nbsp;</p>
<p style="text-align: center; padding-left: 240px;">Firma:</p>
<p style="text-align: center; padding-left: 240px;">__________________________________</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>CONSENSO al trattamento dei dati dell'utilizzatore del servizio<br /></strong></p>
<p>&nbsp;</p>
<p>Il sottoscritto utilizzatore prende atto e d&agrave; consenso che i dati forniti verranno utilizzati da Pick Center Roma Srl ai sensi dell'art. 13 del D.Lgs 196/03 (normativa sulla privacy), anche tramite soggetti esterni, al fine di permettere l'espletamento degli adempimenti informativi, amministrativi, commerciali e contabili connessi al rapporto contrattuale. Copia integrale dell'informativa potr&agrave; essere visionata al seguente indirizzo web: www.pickcenter.it.</p>
<p style="padding-left: 270px;">&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">IL CLIENTE UTILIZZATORE DEL SERVIZIO</p>
<p style="text-align: center; padding-left: 270px;">&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">in qualit&agrave; di &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; della &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&nbsp;</p>
<p style="text-align: center; padding-left: 270px;">Firma:</p>
<p style="text-align: center; padding-left: 270px;">__________________________________</p>
<p>&nbsp;</p>
<p>&nbsp;</p>