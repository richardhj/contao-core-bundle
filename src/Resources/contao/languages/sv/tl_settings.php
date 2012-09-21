<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/sv/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Hemsidans titel';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Ange en titel för hemsidan.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-postadress till systemadministratör';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Automatiskt generated E-postmeddelanden, som t.ex. bekräftelser på prenumerationer, kommer att skickas till denna adress.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Datumformat';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Ange ett datumformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Ange ett tidsformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Datum- och tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Ange ett datum- och tidsformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Tidszon';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Välj tidszon för din webbserver.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Relativ sökväg till Contao-mappen';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Den relativa sökvägen till Contao katalogen är vanligtvis automatiskt genererad av installationsverktyget.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Teckenavkodning';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Ange teckenavkodning (character set). UTF-8 rekommenderas för att vara säker på att specialtecken visas korrekt.<br />Ändra inte teckenavkodningen såvida du inte har en god anledning att göra så.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Egna layoutsektioner';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Här kan du skriva in en kommaseparerad lista med egna layoutsektioner. Du kan använda dessa sektioner i modulen <em>Sidlayout</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Avaktivera kommandoplaneraren';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Avaktivera kommandoplaneraren och kör istället skriptet cron.php via ett äkta cron job (som du själv måste sätta upp i servern).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Minifiera HTML-kod';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Minifiera (komprimera) HTML-koden innan den skickas till besökarens webbläsare (kräver ev. installation/aktivering av tidy-tillägget i PHP för att fungera).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Komprimera skript';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Skapar en komprimerad version av kombinerade CSS- och JavaScript-filer. Kräver justering i filen .htaccess.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Poster per sida';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Här kan du ange ett standardvärde för hur många poster som kommer att visas i backend.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Max poster per sida';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Denna begränsning aktiveras när användaren väljer "visa alla poster".';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Exkludera mappar från synkroniseringen';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = "Här kan du ange en kommaseparerad lista över mappar som ska undantas vid filsynkronisering (t.ex. <em>attachments,music_academy</em>).\nNotera att exkluderade resurser inte kan användas i innehållselement som t.ex. Bild eller Nedladdning.";
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Kollapsa inte elementen';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Kollapsa inte innehållselementen och andra resurser när dom förhandsvisas i backend.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'URL-suffix';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Webbadressuffixet är en filtyp som har lagts till i URI-strängen för att simulera statiska dokument. Grundinställningen URL suffix är <em>.html</em>. Observera att ingen URL suffix alls kan ha en negativ effekt på sökmotorns rankning.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Cache-läge';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Här kan du välja cache-läge.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonymisera IP-adresser';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonymisera alla IP-adresser som är lagrade i databasen förutom i <em>tl_session</em>-tabellen (IP-adresser är bundna till sessioner av säkerhetsskäl).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonymisera Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonymisera IP-adresser som skickas till Google Analytics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Omskrivna URL:er';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Med detta val kan du få Contao att generera statiska URL:er utan "index.php". Den här funktionen kräver "mod_rewrite" samt att ".htaccess.default"-filen döps om till ".htaccess" och att RewriteBase i samma fil justeras vid behov.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Lägg till språkkod till URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Lägg till språkkod som första URL-parameter (t.ex. <em>http://domain.tld/sv/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Vidaresänd inte tomma URLer';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'För tomma URLer visas webbplatsen istället för att vidaresända till språkets rotsida (ej rekommenderat).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Använd auto_item-parameter';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Hoppa över <em>items/</em>- eller <em>events/</em>-delarna i URLer för att istället automatiskt identifiera objektet baserat på <em>auto_item</em>-parameter.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Stäng av användningen av sidalias';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Om du väljer detta val kommer Contao att använda sidans numeriska ID istället för sidans sidalias för att generera URL:er (d.v.s <em>12.html</em> istället för <em>home.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Tillåtna HTML-taggar';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Ange en lista med tillåtna HTML-taggar. Alla andra taggar kommer att tas bort från användarnas inmatningar.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Debug-läge';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Om du väljer detta val kommer viss körningsinformation (t.ex. databasfrågor) att skrivas ut på skärmen. <br />Detta val är därför bara att rekommendera för systemmodifieringar/felsökning!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Slå av referenskontroll';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Välj detta val om du inte vill att Contao ska kontrollera adressreferensen när ett formulär skickas. <br />Kom ihåg att detta innebär en stor säkerhetsrisk!';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Väntetid för ett låst konto';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Ange den tid en medlem måste vänta innan han kan logga in igen efter att kontot har låsts. (standard: 5 minuter = 300 sekunder). Denna egenskap är tillför att göra \'brute force\' attacker lite svårare att genomföra.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Visa felmeddelanden';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Om du väljer detta val kommer felmeddelanden att skrivas ut på skärmen. <br />Detta val är bara att rekommendera i samband med systemmodifieringar!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Logga felmeddelanden';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Spara felmeddelanden till felloggen (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Kör i Safe mode';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Kör Contao i Safe mode (säkert läge) där enbart kärnans moduler laddas (3:e-partsmoduler laddas ej).';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Slå av IP-kontroll';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Välj detta val om du inte vill att sessioner knyts till IP-adresser.<br />Kom ihåg att detta innebär en stor säkerhetsrisk!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Godkända filtyper för nedladdning';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Ange en kommaseparerad lista med filändelser som är godkända för nedladdning. <br />Av säkerhetsskäl är filnedladdning begränsat till den mapp som filen finns i och dess undermappar.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Godkända filtyper för bilder';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Ange en kommaseparerad lista med filändelser som är godkända för bilder. <br />Inkludera inte filtyper som inte kan hanteras av Contao eller dina egna skript.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Redigerbara filtyper';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Ange en kommaseparerad lista med filtyper som kan editeras i källkodseditorn.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Mallarnas filtyper';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Ange en kommaseparerad lista med filtyper som stöds för mall-filer.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maximal bildbredd i frontend';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Om bredden på en bild eller film överstiger detta värde, kommer objekten automatiskt att skalas ner.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Kvalitet på tumnaglar';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Ange kvaliteten på tumnaglarna i procent (används enbart på JPG).';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximal GD-bildbredd';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Ange maximal bildbredd för bilder som GD library ska försöka hantera.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximal GD-bildhöjd';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Ange maximal bildhöjd för bilder som GD library ska försöka hantera.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Filmapp';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Här kan du ställa in den relativa sökvägen till Contaos filkatalog.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Godkända filtyper att ladda upp';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Ange en kommaseparerad lista med filtyper som kan laddas upp. <br />Av säkerhetsskäl är uppladdning begränsat till filmappen och dess undermappar.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Simultan filuppladdning';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Ange det maximala antalet filer som simultant kan laddas upp till siten.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximal uppladdningsbar filstorlek';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Här kan du ange den maximala filstorleken i bytes som går att ladda upp (standard: 1 MB = 1000 kB = 1000000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximal bildbredd';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Ange den maximala bildbredden (i px) för bilder som laddas upp till siten.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximal bildhöjd';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Ange den maximala bildhöjden (i px) för bilder som laddas upp till siten.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Aktivera sökmotor';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indexera automatiskt framsidans sidor så att de kan hittas i sökresultaten.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indexera skyddade sidor';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Använd detta val med omsorg och uteslut alltid personaliserade sidor från indexeringen!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Använd SMTP för att skicka E-post';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Som standard använder TYPOlight PHP <em>mail()</em> för att skicka E-post. <br />Här kan du välja att använda en SMTP-server istället.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP-host';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Ange hostnamnet på din SMTP-server (standard är localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'SMTP-användarnamn';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Om din SMTP-server kräver inloggning, ange användarnamnet här.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'SMTP-lösenord';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Om din SMTP-server kräver inloggning, ange lösenordet här.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP-kryptering';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Här kan du välja en krypteringsmetod (SSL eller TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP-port';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Ange porten på din SMTP-server (standard är 25 eller 465 för SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Avaktivera backend-moduler';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Här kan du avaktivera ej använda backend-moduler.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Lagringstid för ångra';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Ange lagringstiden för ångra i sekunder (standard: 24 timmar = 86400 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Lagringstiden för versionshanteringen';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Ange lagringstiden (i sekunder) för olika versioner av poster (standard: 90 dagar = 7776000 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Lagringstid för loggposter';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Ange lagringstiden (i sekunder) för loggposter (standard: 14 dagar = 1209600 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Session-timeout';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Ange den maximala livslängden (i sekunder) för en session (standard: 60 minutes = 3600 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Period för automatisk inloggning';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Här kan du ställa in perioden för automatisk inloggning (90 dagar = 7776000 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Standard sidägare';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Som standard tillhör en sida samma användare som sin föräldrasida. Men, om sidan inte tilldelas en ägare kommer standardsidägaren att bli sidans ägare. <b>Om det inte finns en ägare eller en standardägare kommer det inte att finnas några åtkomstrestriktioner på sidan!</b>';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Standard sidgrupp';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Som standard tillhör en sida samma grupp som sin föräldrasida. Men, om sidan inte tilldelas en grupp kommer standardgruppen att bli sidans ägare. <b>Om det inte finns en grupp eller en standardgrupp kommer det inte att finnas några åtkomstrestriktioner på sidan!</b>!';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Standard sidbehörigheter';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Som standard använder en sida samma behörigheter som sin föräldrasida. Men om inga behörigheter är definierade kommer dessa standardbehörigheter att användas.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live Update URL';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Här kan du ange Live Update URL:en.';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Webbsidans titel';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Datum och tid';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Backend-konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Frontend-konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Integritetsinställningar';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Säkerhetsinställningar';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Filer och bilder';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Uppladdningsinställningar';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Sökmotorinställningar';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'SMTP-konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Inaktiva backendmoduler';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Timeout-värden';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Standardåtkomstvärden';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Statiska resurser';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Redigera den lokala konfigurationen';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Använd serverns- och webbläsarens cache';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Använd enbart serverns cache';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Använd enbart webbläsarens cache';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Avaktivera cache-funktionen';
