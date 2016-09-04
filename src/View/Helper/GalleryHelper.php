<?php

/* src/View/Helper/GalleryHelper.php 
 *
 * @link http://book.cakephp.org/3.0/en/views/helpers.html#creating-helpers
 *
**/

namespace App\View\Helper;

use Cake\View\Helper;

class GalleryHelper extends Helper {

    public $helpers = array('Html', 'Url'); 

    /**
    * @param String             $directory    - directory name to print (found in img/gallery/{directory})
    * @param String             $sectionTitle - desired name of the section title
    * @param associative array  $subsections (optional) 
    *                                         - if subsections format: ['subdirectoryName' => 'subsectionTitle']
    */
    public function printGallerySection($directory, $sectionTitle, $subsections = null) {

    }

    /**
    * @param String $directory       - directory name to print (found in img/gallery/{directory})
    * @param String $subdirectory    - directory name to print (found in img/gallery/{directory}/{subdirectory})
    * @param String $subsectionTitle - desired name of subsection title
    */
    public function printGallerySubSection($directory, $subdirectory, $subsectionTitle) {

    }

    /**
    * @param String $directory - directory name to print (found in img/gallery/{directory})
    * @param String $subdirectory - directory name to print (found in img/gallery/{directory}/{subdirectory})
    */
    public function printGalleryImage($directory, $subdirectory, $fileName) {
        $pathFromGallery = 'gallery/'.$directory.'/'.$subdirectory.'/'.'pics'.'/'.$fileName;
        echo '<a href=\''.$this->Url->webroot('img/').$pathFromGallery.'\' class=\'fresco\'>' ;
        echo $this->Html->image($pathFromGallery, ['alt' => 'Slide 1', 'class' => 'berg_gallery-image']);
        echo '</a>'; 
    }

    /**
    * @param String $directory - directory name to print (found in img/gallery/{directory})
    *
    * @return array
    */
    public function fetchImagesDirectory($dir) {
        $dirname = $this->dataRoot.$this->query.'/';
        $images = glob($dirname.'*.jpg');

        return $images;
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

    public function printGalleryNode($directory, $subdirectory, $title, $subtitle){
        $subt = ($subtitle)? " - ".$subtitle  : "";
        print '<h2 class="gallery-header" id='.$directory.$subdirectory.'>'.$title.$subt.'</h2>
                <div class="imageRow">';
        $this->printImageSet($directory,$subdirectory);
        print '</div><!--./imagerow-->';
    }

    public function printImageSet($groupname,$subdirectory){
        $directory = $groupname;
        if($subdirectory) {
            $directory .= '/'.$subdirectory;
        }
        $imggroup = ($subdirectory? $subdirectory : $groupname);
        $imageNames = str_replace(" ", "%20", $this->getDirectoryList('img/gallery/'.$directory.'/pics/') );
        print '<div class="set">'; 
        for($i = 0; $i < count($imageNames); $i++) {
            print '<a class="single" href="img/gallery/'.$directory.'/pics/'.$imageNames[$i].'" rel="lightbox['.$directory.']"><img src="img/gallery/'.$directory.'/thumbs/tn_'.$imageNames[$i].'" alt="'.$groupname.' '.($groupname == $imggroup? "" : $imggroup.' ').$i.'" /></a>';
        } 
        print '</div>';
    }
 
    public function getDirectoryList ($directory) {

        // create an array to hold directory list
        $results = array();
        var_dump($directory);
        // create a handler for the directory
        $handler = opendir($directory);

        // open directory and walk through the filenames
        while ($file = readdir($handler)) {

          // if file isn't this directory or its parent, add it to the results
          if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file != ".AppleDouble") {
            $results[] = $file;
        }

    }

        // tidy up: close the handler
        closedir($handler);

        // done!
        return $results;

    }

}

?>
