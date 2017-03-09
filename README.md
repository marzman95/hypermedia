# [2IO80] DBL Hypermedia group 2, TU/e 2017
###### This is the software repository for the TU/e course "DBL Hypermedia [2IO80]" for group 2.
### Contributors
[Susan van Ewijk](https://github.com/SusanVe),
[Bas Gremmen](https://github.com/BasGremmen),
[Robin Keij](https://github.com/RobinKeij),
[Plamen Pasliev](https://github.com/plamenpasliev),
[Stijn van Rooij](https://github.com/Superstino),
[Marcin van de Ven](https://github.com/marzman95)

### Files
This root-directory is also used to store some descriptional files.
The [public_html](https://github.com/marzman95/hypermedia/public_html)-directory is the root-
directory for the site.

In the [file_tree.md](https://github.com/marzman95/hypermedia/file_tree.md) you
can find the file and directory structure of the website.

### Synchronizing with the server
We have a TU/e webhost to publish our website. To synchronize this site with the
latest version on Github you can login to the host (see mail) and run the command
`./gitsync.sh` (the **tab**-button autocompletes the command when you typed `./g`).

The script will first ask you for you Github-login. You won't see that you type your
password because of security reasons. The password won't be saved!

After that it will reset the (old) Github-repository that is saved on the server. Then
it will download the latest one from Github using your credentials.

When this succeeds, it will ask you to fill in the branch name that has to be used
to update from. Fill in the branch that you have been working on to test your latest
code. If everything is ok, it will end the script with a green message stating that
the update succeeded using the filled in branch.
