<!-- 
 * Description: Eddy Correlation team page
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
          Team
        </h2>

        <div class='size berg_team-container'>
            <p class='berg_content-subtitle berg_text-team-name'>
                    Peter Berg
            </p>
                 <?php 
                echo $this->Html->image('people/PeterBerg2.jpg', ['alt' => 'Peter Berg', 'class' => 'berg_image-container berg_team-tumbnail berg_prof-thumbnail field']); 
                ?>
            <div class="info">
                <p>
                    My educational background is in civil engineering. As an undergraduate I focused on mechanical design 
                    and construction while my graduate work focused, broadly speaking, on applied mathematical modeling of 
                    transport processes and mass and energy flows. I earned my PhD degree in 1988 from the Technical 
                    University of Denmark. After that I worked at the Danish National Environmental Research Institute 
                    where I was responsible for long-term modeling of nitrogen leaching from agricultural land. In 1996, 
                    I relocated to the University of Virginia (UVA) and have since then focused my research on 
                    biogeochemical cycling in aquatic benthic environments.
                </p>
                <p>
                    A dominant approach in my work at UVA has been the use of applied mathematical modeling, which I have 
                    combined with the development of new measuring techniques and approaches. I see these two foci as highly 
                    complementary and powerful, and on a personal level I am very excited to apply them to address research 
                    questions focusing on the benthic environment.
                </p>
                <p>
                    From 2001 forward, I pioneered the aquatic eddy covariance technique for oxygen flux measurements in 
                    collaboration with the Max Planck Institute for Marine Microbiology, Germany. At first, this was a 
                    side project to my ongoing modeling activities, but given our first successes and the potential of the 
                    approach, it quickly became the main focus of my work. Today I work exclusively on the eddy covariance 
                    technique. As reflected in the <a href="/publications"> publications from my lab group</a> this work is 
                    focusing on further developing the technique, and also on applying it to benthic environments where 
                    traditional flux approaches are hard to use, and where our knowledge on benthic exchange is thus limited.
                </p>
                <p>
                    A link to my diagenetic modeling work, including download options for papers and the profile 
                    interpretation software, PROFILE, is given <a href="modeling">here. </a>
                </p>            
            </div>
                
               

        </div>

<!-- Team row 1 -->
        <div class='berg_team-row'>
            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Marie Lise Delgard
                </p>
                <?php 
                    echo $this->Html->image('people/MarieLiseDelgard.jpg', ['alt' => 'Marie Lise Delgard', 'class' => 'berg_image-container berg_team-tumbnail']); 
                    ?>
                
               <!--  <div class='berg_image-caption berg_rounded_8'>
                  <p>
                    Time series of water velocities (x, y, z) and oxygen concentration (for oxygen fluxes) are recorded simultaneously, for example at 64 Hz and 5 to 30 cm above seafloor.
                  </p>

                </div> -->
            </div>

            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Martin Volaric
                </p>
                <?php 
                echo $this->Html->image('people/MartinVolaric.jpg', ['alt' => 'Martin Volaric', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Amelie Berger
                </p>
                <?php 
                echo $this->Html->image('people/AmelieBerger.jpg', ['alt' => 'Amelie Berger', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>
            <div class='berg_clear-floats'></div>
            
        </div>
<!-- Team row 2-->
        <div class='berg_team-row'>
            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Dirk Koopmans
                </p>
                <?php 
                echo $this->Html->image('people/DirkKoopmans.jpg', ['alt' => 'Dirk Koopmans', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Matthew Long
                </p>
                <?php 
                echo $this->Html->image('people/MattLong.jpg', ['alt' => 'Matthew Long', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Jennie Rheuban
                </p>
                <?php 
                echo $this->Html->image('people/JennieRheuban.jpg', ['alt' => 'Jennie Rheuban', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>
            <div class='berg_clear-floats'></div>
        </div>

<!-- Team row 3-->
        <div class='berg_team-row'>
            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Andrew Hume
                </p>
                <?php 
                echo $this->Html->image('people/AndrewHume.jpg', ['alt' => 'Andrew Hume', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

        <!-- Webmasters -->
            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Ben Terner
                </p>
                <?php 
                echo $this->Html->image('people/BenTerner.jpg', ['alt' => 'Ben Terner', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

            <div class='berg_team-container berg_float-left'>
                <p class='berg_content-subtitle berg_text-team-name'>
                    Elizabeth Kukla
                </p>
                <?php 
                echo $this->Html->image('people/ElizabethKukla.jpg', ['alt' => 'Elizabeth Kukla', 'class' => 'berg_image-container berg_team-tumbnail']); 
                ?>
            </div>

            <div class='berg_clear-floats'></div>
        </div>

            
        
        
        

    </div>
    <script type="text/javascript">
        $(function(){
            $('.size').styleddropdown();
        });
    </script>
</body>
<?= $this->element('footer') ?>
</html>
