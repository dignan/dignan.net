<?php

    $apple_dev_tools = array(
                                'title' => 'Apple Development Tools',
                                'date' => '2009-07-24 08:57'                           
                            );
    $avahi_gobject = array(
                            'title' => 'Avahi-GObject',
                            'date' => '2009-07-24 08:57'
                          );

    $compilers = array(
                        'title'=> 'Compilers',
                        'date' => '2009-07-24 08:57'
                      );

    $gloobus_preview = array(
                                'title' => 'Gloobus Preview on Fedora',
                                'date' => '2009-07-24 08:57' 
                            );

    /* Make sure to add blog entries here */
    $blog_entries = array( 
        'blog/apple-development-tools.html' => $apple_dev_tools,
        'blog/avahi-gobject.html' => $avahi_gobject,
        'blog/compilers.html' => $compilers,
        'blog/gloobus-preview-on-fedora.html' => $gloobus_preview
    );
   

    if (isset($_GET['p'])) {
        $file = 'blog/' . $_GET['p'] . '.html';

        if (file_exists($file) && array_key_exists($file, $blog_entries)) {

            $title = $blog_entries[$file]['title'];
            $date = $blog_entries[$file]['date'];
            $isBlog = true;
            
            require_once('header.inc.php');
            include_once($file);
        } else {
            
            $title = "Fail";
            $isBlog = false;

            require_once('header.inc.php'); 

            echo '
                <div class="entry">The entry ' . $file . ' does not exist</div>
            ';
        }
    } else {
        $title = "Blog";
        $isBlog = false;
        
        require_once('header.inc.php');

        echo ' 
        <div id="description">
          <ul>
            <li><a href="blog.php?p=apple-development-tools">Apple Development Tools</a></li>
            <li><a href="blog.php?p=avahi-gobject">Avahi GObject</a></li>
            <li><a href="blog.php?p=compilers">Compilers</a></li>
            <li><a href="blog.php?p=gloobus-preview-on-fedora">Gloobus-Preview on Fedora</a></li>
          </ul>
        </div>';
    }
     
    require_once('footer.inc.php');
?>
