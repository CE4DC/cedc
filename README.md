cedc  
====  
  
Clemson Engineers for Developing Countries Website  
  
Congratulations!  If you're viewing this you're a web developer for CEDC.  
This hub contains the most up-to-date code from all of the developers in CEDC.  
  
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
  
For the website, we use a combination of CSS3, HTML5, and JS.  In every case possible, avoid Adobe Flash and any other non-W3C valid plugins.  Our aim is W3C standard compatiblity - this will in almost every single case work exactly right with modern Chrome, Firefox, IE.  Old IE does not work well - do NOT hack up the site to get support - inform the user that they're using an old browser and that it will not display correctly unless they update - CEDC has standards and unfortunately IE6 doesn't meet them.
  
Resources:  
  
| Location                 | Description                                                          |
| ------------------------ |:--------------------------------------------------------------------:|
| http://www.w3.org/       | Contains web standards, as well as resources on web development      |
| http://getbootstrap.com/ | Contains Bootstrap, the web framework we use.  GREAT documentation.  |
  
If you have any questions on the website, feel free to email me at sestickl@gmail.com.
