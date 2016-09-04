<!-- 
 * Description: Presentations
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
            Presentations
        </h2>

        <p>
            The PowerPoint slides and animations available here have all been used in our presentations on the eddy covariance technique. The slides and animations must be viewed in ‘Slide Show’ mode to work correctly. A brief explanation is given in the PowerPoint text box below each of them. Please reference to the slides and animations as indicated on them:
        </p>

        <div class='berg_weblink berg_align-center'>
            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Instrument%20animation.ppt'?>" target="_blank">Instrument animation</a>
                    – Animations of our typical instrument for oxygen flux measurements and how it records data.
                    For more information, see <a href="<?= $this->request->webroot.'journals/Berg%20and%20Huettel%202008%20Oceanography.pdf'?>" target="_blank">Berg and Huettel (2008)</a>
            </p>
            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Instrument%20illustration.ppt'?>">Instrument illustration</a>
                – Illustration of an instrument on the seafloor and its footprint.
            </p>
            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Visible%20eddy%20correlation%20in%20data%201.ppt'?>">Visible eddy covariance in data 1</a>
                – Real data with visible covariance between the vertical velocity and oxygen concentration that gives the flux. 
            </p>

            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Visible%20eddy%20correlation%20in%20data%202.ppt'?>">Visible eddy covariance in data 2</a>
                 – Same as above but with cumulative flux calculation added.
            </p>

            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Eddy%20correlation%20footprint.ppt'?>">Eddy covariance footprint</a>
                – The area on the seafloor that gives the measured eddy flux. For more information, see
                <a href="<?= $this->request->webroot.'journals/Berg%20et%20al%202007%20L&O.pdf'?>" target="_blank">Berg et al. (2007)</a> and
                <a href="<?= $this->request->webroot.'journals/Rheuban%20and%20Berg%202013%20L&OM.pdf'?>" target="_blank">Rheuban and Berg (2013)</a>.
            </p>

            <p class='berg_citation-text text berg_indent-block'>
                <a href="<?= $this->request->webroot.'slides/Transport%20by%20turbulent%20eddy.ppt'?>">Transport by turbulent eddy</a>
                – Illustration of an eddy that brings oxygen down to the seafloor.
            </p>
        </div>

    </div>
</body>
<?= $this->element('footer') ?>

</html>
