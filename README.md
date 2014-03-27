cedc  
====  
  
Clemson Engineers for Developing Countries Website  
  
This hub contains the most up-to-date code from all of the developers in CEDC for the organizational website.

If committing, make sure to include references to any relevant issues you are working on and a *descriptive* title and description for your commit.  Break up your commit if working on multiple issues at once, try to use a commit per issue/change if possible.
  
====  
  
The structure of the website is mostly self-explanatory, but I'll go over it below:  
  
Basic structure:  
  
| File/Folder  | Description                                                                                         |
| ------------ |:---------------------------------------------------------------------------------------------------:|
| /css/        | Contains the Cascading Style Sheet files                                                            |
| /img/        | Contains image files                                                                                |
| /pages/      | Contains the actual pages of the website                                                            |
| /footer.php  | Footer information for website                                                                      |
| /header.php  | Head info, logo, links                                                                              |
| /index.php   | Index page (REDIRECTS TO page.php?page=index.php)                                                   |
| /page.php    | PHP file that grabs various PHP files and serves them with the page requested located in /pages/    |

Structure in /img/:
| File/Folder  | Description                                                                                         |
| ------------ |:---------------------------------------------------------------------------------------------------:|
| /partners/   | Partners of CEDC.  Used on the about us page.														 |
| /projects/   | Pictures of our projects used on the website but NOT in galleries.  Ex: grid on projects page       |
| /ps/		   | Page specific images.  Ex: about us page images at the top											 |
| /trips/	   | Pictures of the trips we've taken in CEDC.															 | 
  
For the website, we use a combination of CSS3, HTML5, and JS.  In every case possible, avoid Adobe Flash and any other non-W3C valid plugins.  Our aim is W3C standard compatiblity in HTML5 - this will in almost every single case work exactly right with modern Chrome, Firefox, IE.  We still aim to maintain compatibility with the older IE versions through custom CSS, though not at the expense of standards.

Current styling width(s): 960px
  
Resources:  
  
| Location                 | Description                                                          |
| ------------------------ |:--------------------------------------------------------------------:|
| http://www.w3.org/       | Contains web standards, as well as resources on web development      |
  
If you have any questions on the website, feel free to contact user sstickl.
