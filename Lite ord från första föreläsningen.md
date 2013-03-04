SYSTEMIMPLEMENTERINGSTEKNIK -
KAP. 3, 4, 5, 6, 13, 18 i PHP & MySQL

Klientsida. Skickar anrop till server, som ligger och väntar. 
Apache på serversida. Väntar på anrop och returnerar det önskade till klienten. (Server - Apache, PHP, MySQL)
Webbläsaren renderar resultatet. Så fort servern har returnerat det önskade till klienten så glömmer den av det som den skickade. 


Ändrat på dokument:
Header, nav, section och footer till div. 

Tog bort <!DOCTYPE html> och la till: <!DOCTYPE html 

     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv" />    
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />  

Stängde a-tag runt ”gömda fält”.

La till citattecken där det fattades, runt 2 alt-bild-taggar.
Stängde bilder på rätt sätt, med en ”/” på 4 ställen. 
La till 3 alt-taggar på bilder där det fattades. I #buttonLink-diven.
I #contentnav var det sista listobjektet inte stängt, vi stängde det.  

La till en div runt input-fälten i formuläret. La till citattecken runt ”submit”>

Satte en paragraf runt texten i #siteheader och #sitefooter.

Innan sitefooter låg där en tom div med clear:both; som styleattribut. Vi tog bort hela diven. 

Fixade all intendering. Tabellen hade en omslutande div med ett id, vi tog bort diven och satte id på tabellen istället. 
