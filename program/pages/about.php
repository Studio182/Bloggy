<?php
if($bloggy_config['skin'] == "iphone") {
$content = <<<EOF

<div id="box" class="about">
<h1>
Beta 1 - Caspervail 11B
</h1>
<center><pre style="font: 30px/10px monospace;"> 

Bloggy!

</pre></center>

<hr>
<h2>Bloggy is a the hacker's choice blog engine by:

<ul>
	<li><a href="http://madebyhd.us">Hunter Dolan</a>, the PHP/HTML/CSS ninja</li>
	<li><a href="http://zad0xsis.net">Pablo Merino</a>, the HTML/CSS coder</li>
	
	</ul>

<p>A project from:</p>
<center><pre style="font: 30px/10px monospace;"> 

Studio182

</pre></center>
<p>(BTW, Bloggy is open source here: <a href="https://github.com/Studio182/Bloggy">Link to GitHub</a>)</p>
</div>
EOF;
} else {
$content = <<<EOF

<div id="box" class="about">
<h1>
Beta 1 - Caspervail 11B
</h1>
<pre style="font: 10px/10px monospace;"> 

888888b.   888                                     888 
888  "88b  888                                     888 
888  .88P  888                                     888 
8888888K.  888  .d88b.   .d88b.   .d88b.  888  888 888 
888  "Y88b 888 d88""88b d88P"88b d88P"88b 888  888 888 
888    888 888 888  888 888  888 888  888 888  888 Y8P 
888   d88P 888 Y88..88P Y88b 888 Y88b 888 Y88b 888  "  
8888888P"  888  "Y88P"   "Y88888  "Y88888  "Y88888 888 
                             888      888      888     
                        Y8b d88P Y8b d88P Y8b d88P     
                         "Y88P"   "Y88P"   "Y88P"      

</pre>

<hr>
<h2>Bloggy is a the hacker's choice blog engine by:

<ul>
	<li><a href="http://madebyhd.us">Hunter Dolan</a>, the PHP/HTML/CSS ninja</li>
	<li><a href="http://zad0xsis.net">Pablo Merino</a>, the HTML/CSS coder</li>
	
	</ul>

<p>A project from:</p>
<pre style="font: 10px/10px monospace;"> 

 .d8888b.  888                  888 d8b          d888   .d8888b.   .d8888b.  
d88P  Y88b 888                  888 Y8P         d8888  d88P  Y88b d88P  Y88b 
Y88b.      888                  888               888  Y88b. d88P        888 
 "Y888b.   888888 888  888  .d88888 888  .d88b.   888   "Y88888"       .d88P 
    "Y88b. 888    888  888 d88" 888 888 d88""88b  888  .d8P""Y8b.  .od888P"  
      "888 888    888  888 888  888 888 888  888  888  888    888 d88P"      
Y88b  d88P Y88b.  Y88b 888 Y88b 888 888 Y88..88P  888  Y88b  d88P 888"       
 "Y8888P"   "Y888  "Y88888  "Y88888 888  "Y88P" 8888888 "Y8888P"  888888888  
                                                                             
</pre>
<p>(BTW, Bloggy is open source here: LINK!)</p>
</div>
EOF;
}
include('./program/lib/constants.php');