# Interface

- [Wartung](#wartung)
- [Einstellungen](#einstellungen)
    - [Suchmodus](#einstellungen-suchmodus)
    - [Suchergebnis](#einstellungen-suchergebnis)
    - [Quelle](#einstellungen-quelle)
- [Plaintext](#plaintext)
- [Search Highlighter](#search_highlighter)

<a name="wartung"></a>
# Wartung

Aktion | Erläuterung
------ | ------
Index vollständig erstellen | Die Index-Tabelle wird gelöscht und neu aufgebaut.
Index schrittweise erstellen | Führt die Indexierung in mehreren Schritten aus, um die Skriptlaufzeit (max_execution_time) gering zu halten. Artikel und Medien werden einzeln indexiert, Datenbankeinträge in 100er-Schriten.
Suchcache löschen | Wenn eine Neuindexierung nicht erforderlich ist, kann auch ausschließlich der Cache gelöscht werden.
Keyword-Index leeren | Löscht alle Keywords, die bei der Indexierung oder über Suchanfragen gesammelt wurden. Da diese Keywords z. B. für die Ähnlichkeitssuche gebraucht werden, sollten diese nur in Ausnahmefällen gelöscht werden.
Statistik löschen | Setzt die Statistik zurück. Die Anzahl aller gesuchten Begriffe wird auf 0 gesetzt.

<a name="einstellungen"></a>
# Einstellungen

<a name="einstellungen-suchmodus"></a>
## Suchmodus

Dies sind die Standard-Einstellungen für jede Suche. 

> Tipp: In den erweiterten Beispielen wird erklärt, wie das Suchobjekt mit eigenen Parametern überschrieben werden kann. So lassen sich mehrere Suchen in einer Website realisieren, bspw. eine Produktsuche oder eine Mitarbeiter-Suche.

### Suchmodi

#### Logischer Suchmodus

Wenn mehr als ein Begriff in das Suchfeld eingegeben wird, ...

Option | Erläuterung
------ | ------
`Konjunktive Suche (AND)` | ... müssen beide Begriffe vorhanden sein.
`Disjunktive Suche (OR)` | ... genügt einer von beiden Begriffen.

#### Textmodus

Option | Erläuterung
------ | ------
Durchsuche Text ohne HTML-Tags (Plain) | ###Alex###
Durchsuche Text mit HTML-Tags (HTML) | ###Alex###
Durchsuche beides (HTML und Plain) | ###Alex###

#### Ähnlichkeitssuche

Bei der Ähnlichkeitssuche werden ähnliche Begriffe dem gesuchten Begriff zugeordnet. Gleichklingende bekommen dabei einen gleichen Code. Beispiele hierfür sind:
* Tippfehler: `Standard` vs. `Standart`
* Verwechslungen: `Maier` vs. `Meyer`

Option | Erläuterung
------ | ------
Deaktivieren | Es werden nur exakte Treffer angezeigt.
Soundex | Gleichklingende Wörter führen zu einem Treffer. Verwendet den Soundex-Algorithmus. 
Metaphone | Gleichklingende Wörter führen zu einem Treffer. Metaphone eignet sich für englische Begriffe.
Kölner Phonetik | Gleichklingende Wörter führen zu einem Treffer. Kölner Phonetik eignet sich für deutsche Begriffe.
Alle | Überprüft Soundex, Metaphone und Kölner Phonetik nach Treffern.
Die Ähnlichkeitssuche auch dann durchführen, wenn Ergebnisse vorhanden sind? | Ausschalten, um die Ähnlichkeitssuche nur dann zu aktivieren, wenn kein Suchergebnis gefunden wurde.

#### MySQL-Suchmodus

Option | Erläuterung
------ | ------
LIKE | findet auch Teilwörter, z.B. `Boot` in `Hausboot`, ist jedoch langsamer.
MATCH AGAINST  | findet nur ganze Wörter, ist dafür schneller.

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
