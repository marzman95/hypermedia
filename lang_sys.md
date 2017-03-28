# Language system description
###### [2IO80] DBL Hypermedia group 2, TU/e 2017
### General
We have implemented a language system in php to display the pages in either Dutch or English.
It is even possible to switch the language halfway a page. The current language is stored
in a session.

### Prerequisites
At the start of each page run php with `require('includes/lang_system.php');` to import
the language system.

### Functions
In principle you don't need anything of the functions, except for the `ls($name)`-function.

#### Fetching language strings
To get a string of text, call it by opening php with `<?php`.
Then call `ls($name)` where `$name` is a string containing the name of the text variable.

### Adding translations
Via a special GUI it is possible to insert a new string to the database. That GUI is available on the *public_html/includes/gui/addTrans.php* (an GUI-overview will come later). Using that form you can insert a new translation into the database using:
- **name**: Name of the new string, **without spaces!**.
- **page**: *URL* of the page where the text-string is located, starting in *public_html*. If multiple, only use the most important one.
- **nl_string**: Dutch translation of the text-string.
- **en_string**: English translation of the text-string.

When clicking the *add*-button you are redirected to another page. This page is still displayed for debugging purposes. To cancel this debugging-log, uncomment *line 29* and comment *line 30*.
