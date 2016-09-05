# Test

Methode | Erläuterung
-----|-----
[function __construct($_clang = false, $_loadSettings = true, $_useStopwords = true)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L72) | ###Alex###
[function cologne_phone($_word)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L151) | ###Alex###
[function doSearchArticles($_bool = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L238) | ###Alex###
[function doGroupBy($_bool = true)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L243) | ###Alex###
[function setSearchInIDs($_searchInIDs, $_reset = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L251) | ###Alex###
[function encodeRegex($_regex)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L319) | ###Alex###
[function beginFrontendMode()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L327) | ###Alex###
[function endFrontendMode()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L337) | ###Alex###
[function setMaxTeaserChars($_count)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L348) | ###Alex###
[function setMaxHighlightedTextChars($_count)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L358) | ###Alex###
[function generateIndex()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L366) | ###Alex###
[function indexArticle($_id,$_clang = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L422) | ###Alex###
[function indexColumn($_table, $_column, $_idcol = false, $_id = false, $_start = false, $_count = false, $_where = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L569) | ###Alex###
[function indexFile($_filename, $_doPlaintext = false, $_clang = false, $_fid = false, $_catid = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L734) | ###Alex###
[function getMinFID()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L914) | ###Alex###
[function excludeArticle($_id,$_clang = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L929) | Excludes an article from the index.
[function deleteIndex()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L960) | Deletes the complete search index.
[function setSurroundTags($_tags, $_endtag = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L975) | Sets the surround-tags for found keywords. Expects either the start- and the end-tag or an array with both tags.
[function setLimit($_limit, $_countLimit = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L997) | Sets the maximum count of results. Expects either the start- and the count-limit or an array with both limits or only the count-limit.
[function setBlacklist($_words)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1014) | Sets words, which must not be found. Expects an array with the words as parameters.
[function setExcludeIDs($_ids)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1027) | Exclude Articles with the transfered IDs. Expects an array with the IDs as parameters.
[function searchInArticles($_ids)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1041) | Sets the IDs of the articles which are only to be searched through. Expects an array with the IDs as parameters.
[function searchInCategories($_ids)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1051) | Sets the IDs of the categories which are only to be searched through. Expects an array with the IDs as parameters.
[function searchInFileCategories($_ids)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1061) | Sets the IDs of the mediapool-categories which are only to be searched through. Expects an array with the IDs as parameters.
[function searchInDbColumn($_table, $_column)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1072) | Sets the columns which only should be searched through.
[function setIncludeColumns($_columns = array())](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1082) | Sets the columns which should be indexed.
[function setWhere($_where)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1091) | ###Alex###
[function setLogicalMode($_logicalMode)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1107) | Sets the mode of how the keywords are logical connected.
[function setTextMode($_textMode)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1143) | Sets the mode concerning which text is to be searched through.
[function setSearchMode($_searchMode)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1184) | Sets the MySQL search mode.
[ function setOrder($_order)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1211) | Sets the sort order of the results.
[function setHighlightType($_type)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1246) | Sets the type of the text with the highlighted keywords.
[function parseSearchString($_searchString)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1276) | Converts the search string to an array.
[function addWhitelist($_whitelist)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1334) | This method adds weight to special words.
[function setCaseInsensitive($_ci = true)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1350) | Case sensitive or case insensitive?
[function setCI($_ci = true)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1362) | Case sensitive or case insensitive?
[function setClang($_clang)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1374) | Sets the language-Id.
[function getPlaintext($_text)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1392) | Strips the HTML-Tags from a text and replaces them with spaces or line breaks
[function getHighlightedText($_text)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1419) | According to the highlight-type this method will return a string or an array. Found keywords will be highlighted with the surround-tags.
[function getTeaserText($_text)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1577) | Gets the teaser of a text.
[function isCached($_search)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1609) | Returns if a search term is already cached. The cached result will be stored in $this->cachedArray.
[function cacheSearch($_result, $_indexIds)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1644) | Stores a search result in the cache.
[ function deleteCache($_indexIds = false)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1691) | Truncates the cache or deletes all data that are concerned with the given index-ids.
[function storeKeywords($_keywords, $_doCount = true)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1737) | ###Alex###
[ function deleteKeywords()](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1772) | ###Alex###
[function search($_search)](https://github.com/pixelfirma/search_it/blob/Doku/lib/search_it.php#L1785) | Executes the search.
