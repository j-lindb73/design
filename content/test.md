---
title: "Min fina titel"

views:
    kursrepo:
        region: sidebar-left
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/om-kursrepo

    redovisa:
        region: sidebar-right
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/om-redovisa
---
Test-sida för Markdown
=========================

En mindre rubrik med *kursiv* text
------------

###Ännu mindre rubrik med **fet** text

####Ännu mindre rubrik med en [länk till min förra arbetsplats](https://www.skobes.se)

#####Ännu mindre rubrik med annan typ av [länk][tjohoo] så att säga.

######Ännnnnu mindre...är det ens en rubrik??

Kanske kan man testa att göra en <br /> radbrytning mitt i texten? Detta bara för att <em>verifiera</em> att man kan använda <code>html-taggar</code> mitt i markdown-texten.

[tjohoo]:https://www.skobes.se

En tabell
--------
| Djur | Antal ben | Föda
|:-----|:---------:|:-------|
| Björn | 4 | Bär |
| Katt | 4 | Möss |
| Fågel | 2 | Mask |

##Favoritdjur
1. Katt
2. Hund
3. Kyckling
