# Interface

- [Wartung](#wartung)
    - [Aktionen](#wartung-aktionen)
- [Einstellungen](#einstellungen)
    - [Suchmodus](#einstellungen-suchmodus)
    - [Suchergebnis](#einstellungen-suchergebnis)
    - [Quelle](#einstellungen-quelle)
- [Plaintext](#plaintext)
- [Search Highlighter](#search_highlighter)

<a name="wartung"></a>
# Wartung

<a name="wartung-aktionen"></a>
## Aktionen

Aktion | Erläuterung
------ | ------
Index vollständig erstellen | Die Index-Tabelle wird gelöscht und neu aufgebaut.
Index schrittweise erstellen | Bei Problemen mit der maximalen Skriptlaufzeit (max_execution_time) kann der Index schrittweise erstellt werden.
Suchcache löschen | Wenn eine Neuindexierung nicht erforderlich ist, kann auch ausschließlich der Cache gelöscht werden.
Keyword-Index leeren | Löscht alle Keywords, die bei der Indexierung oder über Suchanfragen gesammelt wurden. Diese Keywords werden unter anderem für die Ähnlichkeitssuche gebraucht und sollten nicht gelöscht werden.
Statistik löschen | Achtung, das Löschen der Statistik kann nicht rückgängig gemacht werden.

<a name="einstellungen"></a>
# Einstellungen

<a name="einstellungen-suchmodus"></a>
## Suchmodus

### Suchmodi

#### Logischer Suchmodus

Option | Erläuterung
------ | ------
`Konjunktive Suche (AND)` | ###Alex###
`Disjunktive Suche (OR)` | ###Alex###

#### Textmodus

Option | Erläuterung
------ | ------
Durchsuche Text ohne HTML-Tags (Plain) | ###Alex###
Durchsuche Text mit HTML-Tags (HTML) | ###Alex###
Durchsuche beides (HTML und Plain) | ###Alex###

#### Ähnlichkeitssuche

Option | Erläuterung
------ | ------
Deaktivieren | ###Alex###
Soundex | ###Alex###
Metaphone | ###Alex###
Kölner Phonetik | ###Alex###
Alle | ###Alex###
Die Ähnlichkeitssuche auch dann durchführen, wenn Ergebnisse vorhanden sind? | ###Alex###

#### MySQL-Suchmodus

Option | Erläuterung
------ | ------
LIKE (findet auch Teilwörter, aber langsamer) | ###Alex###
MATCH AGAINST (findet nur ganze Wörter, schneller) | ###Alex###

### Indexierung

#### Art und Weise

Option | Erläuterung
------ | ------
Indexierung der Artikel über eine HTTP-GET-Anfrage | ###Alex###
Indexierung der Artikel über den Redaxo-Cache (ohne Template, nur der Artikel) | ###Alex###
Indexierung der Artikel über den Redaxo-Cache (mit Template, liefert das gleiche Ergebnis wie per HTTP-GET-Anfrage) | ###Alex###
Offline-Artikel indexieren | ###Alex###
Artikel (ADD, EDIT, DELETE) automatisch (de)indexieren | ###Alex###
Extension Point `"OUTPUT_FILTER"` aufrufen | ###Alex###

<a name="einstellungen-suchergebnis"></a>
## Suchergebnis

### Erscheinungsbild des Highlight-Texts

Option | Erläuterung
------ | ------
Start-Tag | ###Alex###
End-Tag | ###Alex###
Maximale Trefferanzahl | ###Alex###
Maximale Zeichenanzahl für Teaser | ###Alex###
Maximale Zeichenanzahl um hervorgehobene Suchbegriffe herum | ###Alex###

### Highlighttyp

Option | Erläuterung
------ | ------
Ab Anfang des Satzes, in dem mindestens einer der Suchbegriffe auftaucht | ###Alex###
Ab Anfang des Absatzes, in dem mindestens einer der Suchbegriffe auftaucht | ###Alex###
Alle gefundenen Suchbegriffe werden mit den sie umgebenden Wörtern dargestellt | ###Alex###
Für jeden gefundenen Suchbegriff wird genau eine Textstelle wiedergegeben | ###Alex###
Als Teaser, in dem eventuell vorkommende Suchebgriffe hervorgehoben sind | ###Alex###
Als Array mit allen Suchbegriffen und Textstellen | ###Alex###
Beispieltext mit Sucheingabe | ###Alex###

### Wörter, Kategorien und Artikel von der Suche ausschließen

Option | Erläuterung
------ | ------
Wörter (kommaseperiert) | ###Alex###
Artikel | ###Alex###
Kategorien | ###Alex###

<a name="einstellungen-quelle"></a>
## Quelle

### Datenbankspalten in die Suche einschließen

Option | Erläuterung
------ | ------
Datenbankname | ###Alex###

### Dateisuche

Option | Erläuterung
------ | ------
Dateiendungen (frei lassen für beliebige Dateien) | ###Alex###
Medienpool indexieren | ###Alex###
Verzeichnistiefe | ###Alex###
Folgende Ordner in die Suche einschließen | ###Alex###
Unterordner der Tiefe 0 auswählen | ###Alex###

<a name="plaintext"></a>
# Plaintext

Option | Erläuterung
------ | ------
CSS-Selektoren (komma-separiert) | ###Alex###
Reguläre Ausdrücke | ###Alex###
Textile parsen | ###Alex###
HTML-Tags entfernen | ###Alex###
Standard-Plaintext-Konvertierung durchführen | ###Alex###

<a name="search_highlighter"></a>
# Search Highlighter

Option | Erläuterung
------ | ------
Tag um die Suchbegriffe | ###Alex###
Class | ###Alex###
inline CSS | ###Alex###
Stil CSS einbinden | ###Alex###
Stil (CSS) | ###Alex###
Eigener Stil | ###Alex###
