<?php
/**
 * MyBB Finnish languagepack
 * Suomentanut Joona 
**/ Help Document 1
$l['d1_name'] = "Tunnuksen luonti";
$l['d1_desc'] = "Tunnuksen luonnin edut.";
$l['d1_document'] = "Jotkin tämän keskustelualueen toiminnoista vaativat sisäänkirjautumisen. Tunnuksen luominen käy nopeasti eikä maksa mitään.
<br /><br />On suositeltavaa rekisteröityä, sillä se mahdollistaa viestien lähettelyn, omat asetukset ja tunnuksen hallinnan.
<br /><br />Ominaisuudet jotka yleisesti vaativat rekisteröitymisen ovat keskustelujen tilaaminen, ulkoasun vaihtaminen, oman henkilökohtaisen muistion käyttö ja sähköpostin lähettäminen keskustelualueen käyttäjille.";

// Help Document 2
$l['d2_name'] = "Tunnuksen päivittäminen";
$l['d2_desc'] = "Käyttäjätietojesi päivittäminen vastaamaan tilannetta.";
$l['d2_document'] = "Jossain vaiheessa sinun on melko varmasti päivitettävä tietojasi, kuten käyttämäsi pikaviestin, salasanan tai sähköpostiosoitteen. Voit muuttaa näistä mitä tahansa tunnuksen hallinnan kautta. Päästäksesi tunnuksen hallintaan, napsauta linkkiä sivun ylälaidassa, jossa lukee \"oma tunnus\". Siellä voit valita kohdan \"muokkaa profiilia\" josta voit muuttaa haluamasi tietoja. Lopuksi voit kuitata tekemäsi muutokset napsauttamalla painiketta sivun lopussa, jolloin ne astuvat voimaan.";

// Help Document 3
$l['d3_name'] = "Evästeiden käyttö MyBB:ssä";
$l['d3_desc'] = "MyBB käyttää 'evästeitä' (<i>cookies</i>) tallentaakseen tiettyjä tietoja tunnuksestasi.";
$l['d3_document'] = "MyBB käyttää evästeitä tallentaakseen kirjautumistietosi mikäli olet rekisteröitynyt, tai edellisen vierailusi ajankohdan mikäli et ole.
<br /><br />Evästeet ovat pieniä tietokoneellesi säilöttyjä tekstitiedostoja. Nämä evästeet ovat vain tämän keskustelualueen sivuston käytettävissä eivätkä ne ole riski turvallisuudellesi.
<br /><br />Evästeet auttavat myös pitämään kirjaa ketjuista, joita luet.
<br /><br />Jos haluat poistaa kaikki keskustelualueen asettamat evästeet, <a href=\"misc.php?action=clearcookies&amp;key={1}\">klikkaa tästä</a>.";

// Help Document 4
$l['d4_name'] = "Kirjautuminen";
$l['d4_desc'] = "Kirjautuminen sisään tai ulos.";
$l['d4_document'] = "Kirjautuessasi sisään koneellasi sijaitseva eväste päivitetään siten, että voit selata keskustelualuetta ilman, että sinun täytyy syöttää käyttäjätunnustasi ja salasanaasi jokaisella klikkauksella. Uloskirjautuminen poistaa evästeen siten, etteivät toiset voi käyttää tunnustasi.
<br /><br />Kirjautuaksesi käytä linkkiä keskustelualueen ylälaidassa. Uloskirjautuminen tapahtuu samalla tavalla. Jos uloskirjautuminen ei onnistu, voit myös puhdistaa koneesi evästeistämme. Tällöin tieto kirjautumisesta katoaa ja sinut kirjataan ulos.";

// Help Document 5
$l['d5_name'] = "Uuden ketjun aloittaminen";
$l['d5_desc'] = "Näin luot uuden ketjun keskustelualueelle.";
$l['d5_document'] = "Kun menet sinua kiinnostavalle alueelle ja halutessasi avata uuden keskusteluketjun löydät huoneen ylä- ja alalaidoista painikkeen, jossa lukee \"aloita ketju\". Huomaathan ettet välttämättä voi aloittaa uutta ketjua kaikilla alueilla, sillä se voi olla rajoitettu ylläpidon toimesta esimerkiksi keskustelualueen vastuuhenkilöille tai alue saattaa olla arkistoitu.";

// Help Document 6
$l['d6_name'] = "Vastauksen kirjoittaminen";
$l['d6_desc'] = "Vastaaminen ketjuun.";
$l['d6_document'] = "Vierailusi aikana saatat löytää ketjun, johon haluaisit vastata. Tehdäksesi näin voit painaa painiketta, jossa lukee \"vastaa\" – tämä kyseinen painike sijaitsee sekä ketjun alussa että lopussa. Huomaa, ettet välttämättä kykene vastaamaan kaikilla alueillamme, jos ne on rajoitettu vain tietyille henkilöille.
<br /><br />Valvoja on myös saattanut - syystä tai toisesta - lukita ketjun, jolloin tavalliset käyttäjät eivät voi kirjoittaa uusia vastauksia. Keskustelun voi avata uudelleen vain ylläpitäjä tai valvoja.";

// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "Opettele käyttämään MyCodea viestiesi muotoilemiseen.";
$l['d7_document'] = "Voit käyttää MyCodea, HTML-koodia joka on tehty yksinkertaisemmaksi, muotoillaksesi viestejäsi eri tavoin.
<p><br />[b]Tämä teksti on lihavoitu[/b]<br />&nbsp;&nbsp;&nbsp;<b>Tämä teksti on lihavoitu</b>
<p>[i]Tämä teksti on kursivoitu[/i]<br />&nbsp;&nbsp;&nbsp;<i>Tämä teksti on kursivoitu</i>
<p>[u]Tämä teksti on alleviivattu[/u]<br />&nbsp;&nbsp;&nbsp;<u>Tämä teksti on alleviivattu</u>
<p>[s]Tämä teksti on yliviivattu[/s]<br />&nbsp;&nbsp;&nbsp;<strike>Tämä teksti on yliviivattu</strike>
<p><br />[url]http://www.esimerkki.com/[/url]<br />&nbsp;&nbsp;&nbsp;<a href="http://www.esimerkki.com">http://www.esimerkki.com/</a>
<p>[url=http://www.esimerkki.com/]Sivun otsikko[/url]<br />&nbsp;&nbsp;&nbsp;<a href="http://www.esimerkki.com">Sivun otsikko</a>
<p>[email]esimerkki@esimerkki.com[/email]<br />&nbsp;&nbsp;&nbsp;<a href="mailto:esimerkki@esimerkki.com">esimerkki@esimerkki.com</a>
<p>[email=esimerkki@esimerkki.com]Kirjoita sähköposti[/email]<br />&nbsp;&nbsp;&nbsp;<a href="mailto:esimerkki@esimerkki.com">Kirjoita sähköposti</a>
<p>[email=esimerkki@esimerkki.com?subject=spam]Sähköposti jossa on valmiiksi otsikko[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:esimerkki@esimerkki.com?subject=spam\">Sähköposti jossa on valmiiksi otsikko</a>
<p><br />[quote]Lainaus[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>Lainaus</quote>
<p>[code]koodi[/code]<br />&nbsp;&nbsp;&nbsp;<code>koodi</code>
<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src="http://www.php.net/images/php.gif">
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src="http://www.php.net/images/php.gif" width="50" height="50">
<p><br />[color=red]Punaiseksi värjätty teksti[/color]<br />&nbsp;&nbsp;&nbsp;<font color="red">Punaiseksi värjätty teksti</font>
<p>[size=3]Tekstiä kokoa 3[/size]<br />&nbsp;&nbsp;&nbsp;<font size="3">Tekstiä kokoa 3</font>
<p>[font=Tahoma]Tämän fontin nimi on Tahoma[/font]<br />&nbsp;&nbsp;&nbsp;<font face="Tahoma">Tämän fontin nimi on Tahoma</font>
<p><br />[align=center]Keskitetty teksti[/align]<div align="center">Keskitetty teksti</div>
<p>[align=right]Oikealle tasattua tekstiä[/align]<div align=\"right\">Oikealle tasattua tekstiä</div>
<p><br />[list]<br />[*]Luettelon 1. kohta<br />[*]Luettelon 2. kohta<br />[*]Luettelon 3. kohta<br />[/list]<br /><ul><li></li><li>Luettelon 2. kohta</li><li>Luettelon 3. kohta</li>
</ul>
<p>Voit tehdä numeroidun luettelon lisäämällä [list=1] ja aakkoksellisen listan lisäämällä [list=a].</p>";
?>
