

Laddningstid
=======================

Rapporten är en analys av några webbplatsers resultat i laddningstid i reda siffror
och betygsättning.


Urval
-----------------------

Det är intressant att undersöka webbplatser som har en koppling till varandra för
att eventuellt hitta gemensamma nämnare. Mitt val föll på tre tillverkare av
träningskläder, Adidas, Nike och Reebok, samma webbplatser som användes i min
rapport angående Färgschema.

Dessa aktörer bör vara intresserade av att hålla ned laddningstider då mycket
tyder på att det finns en relation mellan kortare laddningstider och bättre
försäljning. (se referens under Referenser)


Metod
-----------------------

Jag gjorde en analys av webbplatsen med
[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
vilket gav betyg med förslag till åtgärder.

Jag samlade in data över antaler resurser, mängd data och laddningstid via
fliken Nätverk i Google Chrome DevTools.


Resultat
-----------------------

Länk till [rådata](https://docs.google.com/spreadsheets/d/1r8y3Dr8i3Pu8ArzEDHA2Z9EZKqGEzSfXtrpgYAmG4KA/edit#gid=0)

#### Adidas ####


[FIGURE src="image/screencapture-adidas.png?width=150&crop-to-fit&a=0,0,69,0&save-as=jpg&q=40" class="left w25"]



| Adress | Betyg Dator | Betyg Mobil | Laddningstid (s) | Resurser (st) | Data (MB) |
|:-----|:-----------:|:-----------:|:----------------:|:-------------:|:---------:|
| www.adidas.se | 86 | 21 | 10.6 | 179 | 10.6 |


**Åtgärd** : Skjut upp inläsningen av bilder som inte visas på skärmen och
använd bilder med rätt storlek.


#### Nike ####


[FIGURE src="image/screencapture-nike.png?width=150&crop-to-fit&a=0,0,77,0&save-as=jpg&q=40"  class="left w25"]

| Adress | Betyg Dator | Betyg Mobil | Laddningstid (s) | Resurser (st) | Data (MB) |
|:-----|:-----------:|:-----------:|:----------------:|:-------------:|:---------:|
|www.nike.se| 61 | 24 | 5.78 | 180 | 9.7 |

**Åtgärd** : Minska antalet omdirigeringar och skjut upp inläsning av bilder som
inte visas på skärmen.

#### Reebok ####

[FIGURE src="image/screencapture-reebok.png?width=150&crop-to-fit&a=0,0,60,0&save-as=jpg&q=40" class="left w25"]


| Adress | Betyg Dator | Betyg Mobil | Laddningstid (s) | Resurser (st) | Data (MB) |
|:-----|:-----------:|:-----------:|:----------------:|:-------------:|:---------:|
|www.reebok.se| 80 | 24 | 5.06 | 136 | 7.8 |

**Åtgärd** : Använd bilder med rätt storlek.



Analys
-----------------------

Föga förvånande så är det bilder som påverkar laddningstiden på alla tre
webbplatserna. Vad gäller Nike väcker det låga betyget i PageSpeed Insights (PI)
datordel funderingar. Värdena för Nike sticker ju inte ut, och är inte ens sämst,
när det gäller laddningstider i Devtools. Nike's betyg i PI påverkas av att det görs
flera omdirigeringar och frågan är om analysen hanteras annorlunda via PI
kontra anslutning via lokal webbläsare(DevTools)?
Genomgående gäller dock att alla tre webbplatser skulle kunna trimma sina värden
genom
att anpassa bilder och hur de laddas till sidan.

En rangordning blir som följer:

1. Reebok
2. Adidas
3. Nike

Reebok var den webbplats med bra betyg i kombination med bra laddningstid och
Adidas kommer tvåa. Adidas upplevs snabbare, trots högre värden i laddningstid,
än Nike och betygen i PI pekar ju också ditåt.

Ingen av sajterna upplevs dock som seg eller långsam. Min bedömning är att om
det inte har hänt någonting på 1,5-2 sekunder så upplever jag sidan som långsam.
Alla dessa tre presenterar en del av sidan gott och väl inom den tiden, även
Adidas. Min upplevelse är att de presterar ok om man räknar med att vissa sidor
är väldigt bildintensiva.

Referenser
-----------------------

[Why Performance Matters](https://developers.google.com/web/fundamentals/performance/why-performance-matters/)
 (by Jeremy Wagner)

Övrigt
-----------------------

Jag har gjort denna rapporten på egen hand.

*Johan Lindberg*
