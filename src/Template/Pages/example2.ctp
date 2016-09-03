<!-- 
 * Description: Examples page - Florida reef
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
        <div class='berg_content'>
        <h2 class='berg_content-title'>
          Florida Keys
        </h2>

        <h3 class='berg_content-subtitle'>
            Coral Reefs
        </h3>

        <div class='berg_image-container berg_align-center'>
            <?php 
            echo $this->Html->image('data/PlotWebSite2.png', ['alt' => 'Data Example 2', 'class' => 'berg_carousel-image']); 
             ?>
            <div class='berg_image-caption berg_rounded_8'>
              <p>
                High-quality eddy covariance data through 24 hours measured over a 2 m deep coral reef in Florida Keys. Raw data were recorded in 15 min data segments that included a short pause at the end. Gallery 
              </p>
                
              <p>
                First panel: Three velocity components (x, y, z) and mean current velocity varying between 1 and 10 cm s-1. Some of the variation in velocity represents wave action. Second panel: Oxygen concentration measured with a fast-responding micro-electrode and a stable optode. The latter was used for calibration. Note the large fluctuations in concentration (~10 µmol L-1) at the end of the time series consistent with the large fluxes. Third panel: Cumulative oxygen fluxes with clear linear trends indicating a strong consistent flux signal in the data. Fourth panel: Oxygen fluxes, one for each 15 min data segment, and light (PAR) measured over the reef. Positive fluxes represent a release.
              </p>

              <p>
                Note the tight correlation between oxygen flux and light (Fourth panel), and also the magnitude of the fluxes that results from the efficient use of light by the phototrophs and the uneven complex reef surface that has a many-fold larger surface area than its horizontal projection. The clear water over this subtropical reef allowed data of this rare high quality to be measured. For further details on the data, see <a href="<?= $this->request->webroot.'journals/Long%20et%20al%202013%20PLOS%20ONE.pdf'?>">Long et al. (2013)</a>.
              </p>
            </div>
        </div>
    </div>
</body>
<?= $this->element('footer') ?>
</html>
