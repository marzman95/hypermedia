# Language system description
###### [2IO80] DBL Hypermedia group 2, TU/e 2017
### General
We have implemented a language system in php to display the pages in either Dutch or English.
It is even possible to switch the language halfway a page. The current language is stored
in a session.

### Prerequisites
At the start of each page run php with `require('includes/lang_system.php');` to import
the language system. In a later stage this will be changed so also other functions can be
implemented.

### Functions
In principle you don't need anything of the functions, except for the `ls($name)`-function.

#### Fetching language strings
To get a string of text, call it by opening php with `<?` (this is a short version of `<?php`).
Then call `ls($name)` where `$name` is a string containing the name of the text variable.

### Language files
Currently two example language files are in the **langfiles** directory. A language file
consists of an array named `$l_data` with keys that are names of the string, and values
with the right translations. After the array-statement the file returns the array.
