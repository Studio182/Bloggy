<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<!-- 

  __                        _  _  
 (_ _|_      _| o  _    /| (_)  ) 
 __) |_ |_| (_| | (_)    | (_) /_ 
                                  

bloggy, simple blog system made by hunter dolan and pablo merino 

-->

<html>
<head>
    <title>{$title}</title>
    <link href="./skins/bloggy/js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="./skins/bloggy/css/style.css">
    <script src="./skins/bloggy/js/jquery.js" type="text/javascript">
</script>
    <script src="./skins/bloggy/js/facebox/facebox.js" type="text/javascript">
</script>
    <script type="text/javascript" src="./skins/bloggy/js/typewriter.js">
</script>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700|Maven+Pro|Yanone+Kaffeesatz|Bangers|Istok+Web&v2' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="./skins/bloggy/img/favicon.ico">
    <script type="text/javascript">
jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'js/facebox/loading.gif',
        closeImage   : 'js/facebox/closelabel.png'
        })
        $('#header').typewriter( 500 );
       })
    </script>
</head>

<body>
    <div id="header">
        {$title}
    </div>

    <div id="subtitle">
        {$slogan}
    </div>
</body>
</html>
