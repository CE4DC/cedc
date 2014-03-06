cedc  
====  
  
Clemson Engineers for Developing Countries Website  
  
This hub contains the most up-to-date code from all of the developers in CEDC for the organizational website.

Currently, this isn't the live site but the version in production.
  
====  
  
The structure of the website is mostly self-explanatory, but I'll go over it below:  
  
Basic structure:  
  
| File/Folder  | Description                                                                                         |
| ------------ |:---------------------------------------------------------------------------------------------------:|
| /css/        | Contains the Cascading Style Sheet files                                                            |
| /fonts/      | Contains font files                                                                                 |
| /img/        | Contains image files                                                                                |
| /js/         | Contains Javascript files                                                                           |
| /pages/      | Contains the actual pages of the website                                                            |
| /config.json | Config file for Bootstrap.  Ignore.                                                                 |
| /footer.php  | Footer information for website                                                                      |
| /head.php    | Head (charset, title, stylesheet) data for the website                                              |
| /header.php  | Logo and text above the navbar                                                                      |
| /index.php   | Index page (REDIRECTS TO page.php?page=index.php)                                                   |
| /navbar.php  | Navbar  for the website                                                                             |
| /page.php    | PHP file that grabs various PHP files and serves them with the page requested located in /pages/    |
| /scripts.php | Contains scripts that are loaded per the *entire* website.                                          |
  
For the website, we use a combination of CSS3, HTML5, and JS.  In every case possible, avoid Adobe Flash and any other non-W3C valid plugins.  Our aim is W3C standard compatiblity in HTML5 - this will in almost every single case work exactly right with modern Chrome, Firefox, IE.  We still maintain compatiblity with IE8 (to the extent to NOT interfere with the W3C standards), the last version of the browser for Windows XP and in low-resolution (1024x768 targeted) environments, although these platforms are not our main targets.
  
Resources:  
  
| Location                 | Description                                                          |
| ------------------------ |:--------------------------------------------------------------------:|
| http://www.w3.org/       | Contains web standards, as well as resources on web development      |
| http://getbootstrap.com/ | Contains Bootstrap, the web framework we use.  GREAT documentation.  |
  
If you have any questions on the website, feel free to contact user sstickl.
