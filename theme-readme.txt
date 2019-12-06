Hallo! 

Ik ben Thom, ik heb dit thema gemaakt tot hetgeen dat het nu is. In deze readme zal ik proberen uit te leggen hoe deze in elkaar
steekt en hoe jij verder aanpassingen kan maken. 

- Zodra je de boel lokaal opzet, zorg dat je de commando's "npm install" & "bower install" laat lopen zodat de je de folders
bower_components en node_modules ook hebt. Omdat deze erg groot zijn, zet je deze nooit op een live omgeving, alleen lokaal
voor development. 
- Met gulp zet je de boel in werking. In je command promt "gulp" als normaal commando, "gulp watch" om de watch aan te zetten 
(hiervoor zul je je lokale development omgeving moeten opzetten) en "gulp --production" om de boel voor productie klaar te zetten
- Als ik jullie was zou ik nog een caching plugin aanzetten op liveomgeving. Ook natuurlijk GA inschieten middels GTM en
overige SEO improvements. 


- In de root folder vind je de verschillende templates. Het spreekt voor zich. Zo hebben we template-home voor de homepagina enzovoort. 
- In de assets map vind je alle assets, pas zelf nooit de dist folder aan. Deze past zichzelf aan middels het gulp commando. 
- Het meeste wat je nodig hebt zul je vinden in _sections.scss in de templates map. Ook header.scss of footer.scss zit spul in dat 
misschien relevant is, wil je aanpassingen maken. Soms wordt code overschreven door pages.scss dieper pagina specifieke scss overschrijft.
- Tevens is de main.js belangrijk. Je kan hier per pagina JS aanroepen. Ik heb geprobeerd deze file zo 
duidelijk mogelijk te commenten zodat je doorhebt wat waarvoor wordt aangeroepen. 

Hetgeen erg lastig was, maar nu werkt:

- Onthoud dat op de homepage een snappy scroll actief is, als enige pagina. 
- Op de homepage heeft de intro een speciale fade in, een titel die van kleur en tekst veranderd en een 2e sectie die full width
wordt on scroll
- Achtergronden veranderen van kleur op de homepage. Dit wordt berekend middels een functie die naar de full height van een scherm
kijkt elke keer. 
- Op mobile staat snappy scroll uit, maar dan kijkt hij echt naar mobiele devices, naar beneden schalen op desktop
werkt dus niet, want dan pakt hij nog steeds de desktop code. Simuleer daarom altijd een mobile device indien je dit wilt testen. 


Hetgeen erg lastig was voor mij en ik niet werkend kreeg zijn de volgende items:

- Safari heeft een bug waardoor snappy scroll niet werkt op safari op MAC. Heel odd, want het werkt wel op safari op
macbook. Voor zover ik dit kan zien, heeft dit te maken met verschillende versies van safari en soms ondersteunt dit 
snappy scroll wel en soms niet. 
- Een parallax effect op images op de onze aanpak pagina. Deze moeten on scroll naar beneden/boven animeren
- Een parallax effect op de tekst "Doen. Doorpakken. Sprinten.". Deze moet van rechts in de viewport naar links in de viewport on 
scroll animeren. Reden dat ik dit niet werkend kreeg is omdat de scroll positie van parallax normaal bovenaan begint. 
Nu moet deze gaan animeren vanaf een bepaald punt op de pagina. 

Je kan wel kijken of je iets als dit werkend kan krijgen (http://prinzhorn.github.io/skrollr/). Ik heb deze tevens al geprobeerd
en kreeg het niet werkend omdat we in de body een div hebben die als container dient. 

Indien je bovenstaande 3 items werkend krijgt, dan neem ik mijn hoed af voor jou! 

Heb je verder nog vragen? Dan mag je me altijd e-mailen op thom@onlinetribe.nl