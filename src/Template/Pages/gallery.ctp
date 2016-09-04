<!-- 
 * Description: photo Gallery
 *
 * @author    Elizabeth Kukla <elizabeth.kukla@gmail.com>
 * @date      03.09.16
 * @copyright All rights reserved.
 */
 -->
 <?php
$this->element('cake_php_header') 
?>
<!DOCTYPE html>
<html>
<?= $this->element('head') ?>
<?= $this->element('navbar') ?>
<body>
    <?= $this->Html->css('fresco/fresco.css')?>
    <?= $this->Html->script('fresco/fresco'); ?>
    <div class='berg_content'>
        <h2 class='berg_content-title'>
            Gallery
        </h2>
        
<?php 
            $easternshore = [
                            "smallfreshwaterstreams"=> "Small Freshwater Streams",
                            "oysterbeds" => "Oyster beds",
                            "seagrassbeds" => "Seagrass beds" 
                            ];
            $this->Gallery->printGallerySection("easternshore","Eastern Shore",$easternshore);

            $floridakeys = [
                            "coralreefs" => "Coral Reefs",
                            "permeablesediments" => "Permeable Sediments",
                            "seagrassbeds" => "Seagrass Beds"
                            ];
            $this->Gallery->printGallerySection("floridakeys","Florida Keys",$floridakeys);

            $floridagulf = [
                            "permeablesediments"=>"Permeable Sediments"
                            ];
            $this->Gallery->printGallerySection("floridagulf","Gulf of Mexico, Florida",$floridagulf);

            $floridawakulla = [
                            "permeablesediments"=>"Permeable sediments"
                            ];
            $this->Gallery->printGallerySection("floridawakulla","Wakulla River, Florida",$floridawakulla);

            $greenland = [
                            "underseaice"=>"Upside Down, Under Sea Ice"
                            ];
            $this->Gallery->printGallerySection("greenland","Greenland",$greenland);

            $japan = [
                      "deepocean"=>"Deep ocean"
                     ];
            $this->Gallery->printGallerySection("japan","Japan",$japan);

            $savannah = [
                      "permeableshelfsediments" => "Permeable Sediments"
                     ];
            $this->Gallery->printGallerySection("savannah","Continental shelf, Georgia",$savannah);

            $switzerland = [
                      "freshwater"=>"Fresh water river sediments"
                     ];
            $this->Gallery->printGallerySection("switzerland","Switzerland",$switzerland);

            $wisconsin = [
                      "quaggamussels"=>"Quagga Mussels overgrown with filamentous algae"
                     ];
            $this->Gallery->printGallerySection("wisconsin","Great Lakes, Wisconsin",$wisconsin);

            $woodshole = [
                      "permeablesediments"=>"Permeable sediments"
                     ];
            $this->Gallery->printGallerySection("woodshole","Woods Hole, Massachusetts",$woodshole);

?>
        
        
    </div>
</body>
<?= $this->element('footer') ?>
</html>
