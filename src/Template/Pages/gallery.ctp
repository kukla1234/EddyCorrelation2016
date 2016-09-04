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
        
        <div class='berg_gallery-segment'>

            <div class='berg_gallery-section'>
                <p class='berg_text-team-name'>
                    Section Title
                </p>
                
                <div class='berg_gallery-subsection'>
                    <p class='berg_text-team-name'>
                    SubSection Title
                    </p>
                    <?php 
                    // $this->Gallery->printGallerySegment("earlydays","Early days",array("" => ""));
                    // $this->Gallery->printGalleryImage('easternshore','oysterbeds','P6190611.jpg');
                    $this->Gallery->printGallerySubSection('easternshore','Oyster Beds','oysterbeds');
                    $this->Gallery->printGallerySubSection('earlydays','Early Days');

                     ?>
                </div>
            </div>
            
        </div>
        
        
    </div>
</body>
<?= $this->element('footer') ?>
</html>
