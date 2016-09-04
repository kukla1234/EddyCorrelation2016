<?php

/* src/View/Helper/GalleryHelper.php 
 *
 * @link http://book.cakephp.org/3.0/en/views/helpers.html#creating-helpers
 *
**/

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

class GalleryHelper extends Helper {

    public $helpers = array('Html', 'Url'); 

    /**
    * @param String             $directory    - directory name to print (found in img/gallery/{directory})
    * @param String             $sectionTitle - desired name of the section title
    * @param associative array  $subsections (optional) 
    *                                         - if subsections format: ['subdirectoryName' => 'subsectionTitle']
    */
    public function printGallerySection($directory, $sectionTitle, $subsections = null) {
        echo    '<div class=\'berg_gallery-section\'>';
        echo        '<p class=\'berg_text-team-name\' id=\''.$sectionTitle.'\'>';
        echo            $sectionTitle;
        echo        '</p>';
        
        foreach ($subsections as $subdirectoryName => $subsectionTitle) {
            $this->printGallerySubSection($directory, $subsectionTitle, $subdirectoryName);
        }            
        echo    '</div>';
    }

    /**
    * @param String $directory       - directory name to print (found in img/gallery/{directory})
    * @param String $subdirectory    - directory name to print (found in img/gallery/{directory}/{subdirectory})
    * @param String $subsectionTitle - desired name of subsection title
    */
    public function printGallerySubSection($directory, $subsectionTitle, $subdirectory = null) {
        $path = "";
        $pathFromGallery = "";
        if ($subdirectory != null) {
            $path = WWW_ROOT . 'img/gallery/'.$directory.'/'.$subdirectory.'/'.'pics/';
            $pathFromGallery = 'gallery/'.$directory.'/'.$subdirectory.'/'.'pics';
        }
        else {
            $path = WWW_ROOT . 'img/gallery/'.$directory.'/'.'pics/';
            $pathFromGallery = 'gallery/'.$directory.'/'.'pics';
        }

        $dir = new Folder($path);
        $dirContents = $dir->read();
        $files = $dirContents[1];

        echo '<div class=\'berg_gallery-subsection id=\''.$subsectionTitle.'\'>';
        echo            '<p class=\'berg_text-team-name\'>';
        echo            $subsectionTitle;
        echo            '</p>';
        foreach ($files as $file) {
            if (!preg_match('/(?i)\.(jpg|png|gif)$/', $file)) {
                continue;
            }
            $this->printGalleryImage($pathFromGallery, $file);
        }
        echo '</div>';

    }

    /**
    * @param String $directory - directory name to print (found in img/gallery/{directory})
    * @param String $subdirectory - directory name to print (found in img/gallery/{directory}/{subdirectory})
    */
    public function printGalleryImage($pathFromGallery, $fileName) {
        $pathToFile = $pathFromGallery.'/'.$fileName;
        echo '<a href=\''.$this->Url->webroot('img/').$pathToFile.'\' class=\'fresco\' data-fresco-group=\''.$pathFromGallery.'\'>' ;
        echo $this->Html->image($pathToFile, ['alt' => 'Slide 1', 'class' => 'berg_gallery-image field']);
        echo '</a>'; 
    }

    /**
    * @param String $directory - directory name to print (found in img/gallery/{directory})
    *
    * @return array
    */
    public function fetchImagesDirectory($path) {

    }



   public function printGallerySegment($header, $title, $sections) {
        print '<div class="row-fluid">';
        print '<div id='.$header.' class="gallery-section">';
        foreach($sections as $sec => $subheader) {
            $this->printGalleryNode($header, $sec, $title, $subheader);
        }
        print '</div><!--./gallery-section-->
                </div><!--./row-fluid-->';
    }

}

?>
