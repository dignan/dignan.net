<?php
    echo '
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="UTF-8"> 
        <title>' . $title . '</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        ';
        if (isset($script)) {
            echo '<script type="text/javascript" src="' . $script . '"></script>';   
        }
    echo '
    </head>
    <body>
      <div id="main">
        <div id="title_area">
            <p>Patrick Dignan</p>
        </div>    
        <div id="link_bar">
          <ul id="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="project.php">Projects</a></li>
            <li><a href="Resume_of_Patrick_Dignan.pdf">Resume</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div id="entry_title" style="text-align: left;">';

    if ($isBlog) {          
        echo '
          <p style="float: right; font-size: 14px; padding:10px;">
          ' . $date . '</p>
              <p>' . $title . '</p>
          <span style="clear: both;"></span>
        </div>
        ';
    } else {
        echo '
          <span style="clear: both;"></span>
        </div>
        ';
    }
?>
