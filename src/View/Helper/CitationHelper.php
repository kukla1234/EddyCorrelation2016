<?php

/* src/View/Helper/CitationHelper.php 
 *
 * @link http://book.cakephp.org/3.0/en/views/helpers.html#creating-helpers
 *
**/

namespace App\View\Helper;

use Cake\View\Helper;

class CitationHelper extends Helper
{

    public function printCitation($txt, $path = "", $filename ="") {
        if ($path) {
            echo "<a class=\"berg_citation-text berg_citation-hover\"  target=\"_blank\" href=";
            if($path == "modeling")
                echo "journals/modeling/";
            else if ($path == "eddy")
                echo "journals/";
            echo str_replace(" ","%20",$filename) . " >";
            echo "<p class=\"berg_citation-wrapper berg_citation-hover\">";
            echo "<span class=\"berg_citation-pdf-tag\">[PDF]</span>";
        }   
        else {
            echo "<p class=\"berg_citation-wrapper\">";
        }
        echo "<br/>";
        echo "<span class=\"berg_citation-text\">";
        echo $txt;
        echo "</span>";
        echo "</p></a>";
    }

}

?>
