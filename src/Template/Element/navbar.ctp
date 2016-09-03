<nav class='berg_background-blue berg_navbar'>
  <div class='berg_padding-left'>
    <?php echo $this->Html->image('menu_icon.png', ['alt' => 'Menu', 'class' => 'berg_menu-icon', 'id' => 'berg_menu-icon']); ?>
  </div>
</nav>

<div class='berg_hide berg_nav-dropdown berg_padding-left berg_background-blue' id='menu-dropdown'>
  <ul class='berg_nav-list'> 
    <a class='berg_text-blue' href="/principles"><li class='berg_nav-list-item'>Home</li></a>
    <a class='berg_text-blue' href="/principles/"><li class='berg_nav-list-item'>Principles</li></a>
    <a class='berg_text-blue' href="/publications"><li class='berg_nav-list-item'>Publications</li></a>
    <a class='berg_text-blue' href="/team"><li class='berg_nav-list-item'>Team</li class='berg_nav-list-item'></a>
    <a class='berg_text-blue' href="/gallery"><li class='berg_nav-list-item'>Gallery</li></a>
    <a class='berg_text-blue' href="/presentations"><li class='berg_nav-list-item'>Presentations</li></a>
    <a class='berg_text-blue' href="/weblinks"><li class='berg_nav-list-item'>Weblinks</li></a>

    <li class='berg_text-blue berg_nav-list-divider'>Examples</li>

    <a class='berg_text-blue' href="/example-gulf/"><li class='berg_nav-list-item'>Gulf of Mexico</li></a>
    <a class='berg_text-blue' href="/example-fl-reef/"><li class='berg_nav-list-item'>Florida Reef</li></a>
    <a class='berg_text-blue' href="/example-fl-sediments/"><li class='berg_nav-list-item'>Florida Sediments</li ></a>
    <a class='berg_text-blue' href="/example-va-seagrass/"><li class='berg_nav-list-item'>Virginia Seagrass</li></a>
  </ul>
</div>

<div class="berg_page-header berg_background-light-blue" >
  <h1 class='berg_text-white'>Aquatic Eddy Covariance Research Lab</h2>
  <h2 class='berg_text-white'>at University of Virginia</h3>
</div>
<?= $this->Html->script('jquery-3.1.0'); ?>
  <script type="text/javascript">
     $('#berg_menu-icon').click(function() {
      $('#menu-dropdown').toggleClass('berg_hide');
    });
  </script>
 
