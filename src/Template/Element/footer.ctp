<!-- 
 * Description: Footer for Eddy Correlation website
 *
 * @author    Elizabeth Kukla <elizabeth.kukla@gmail.com>
 * @date      03.09.16
 * @copyright All rights reserved.
 */
 -->
<div class='footer'>
    <div class="berg_page-footer berg_background-white berg_text-footer" >
        <?php 
            echo $this->Html->image('uva-logo.gif', ['alt' => 'UVa logo', 'class' => 'berg_float-left berg_footer-logos']);
            ?>
        <div class='berg_footer-content-center'>
            <p>
                Peter Berg
                <br>
                Department of Environmental Sciences
            </p>

            <p>
                University of Virginia, Clark Hall
                <br>
                291 McCormick Road, 
                <br>
                Charlottesville, VA 22904-4123
            </p>

            <p>
                email: pb8n@virginia.edu
                <br>
                phone: 434-924-1318
            </p>
        </div>
        
        <?php
            echo $this->Html->image('nsf-logo.gif', ['alt' => 'NSF logo', 'class' => 'berg_float-right berg_footer-logos']); 
        ?>

        <div class='berg_clear-floats'></div>
    </div>
    <?= $this->Html->script('jquery-3.1.0'); ?>
    <?= $this->Html->script('flickity.pkgd'); ?>

</div>
