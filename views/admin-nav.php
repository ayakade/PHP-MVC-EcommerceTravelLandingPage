<div class="nav col-12 col-lg-3">

	<div class="burgerMenu">
		<input type="checkbox" class="checkBox">

		<div class="bars">
			<i class="fas fa-bars"></i>
		</div><!-- end of bars-->

		<div id="flyoutMenu">
        <?php
            $arrMenu = array(
                array('menu'=>'Customers', 'link'=>'index.php?controller=admin&action=adminMain'),
                array('menu'=>'Logout', 'link'=>'index.php?controller=admin&action=doLogOut')
            );
           
            foreach ($arrMenu as $key => $menu) {
        ?>
            <a href="<?=$menu["link"]?>"><?=$menu["menu"]?></a>
        <?php
            }
        ?>
		</div><!-- end of flyout menu -->
	</div><!-- end of burger menu -->

	<nav>
    <?php
        foreach ($arrMenu as $key => $menu) {
    ?>
        <a href="<?=$menu["link"]?>"><?=$menu["menu"]?></a>
    <?php
        }
    ?>
	</nav>
	
</div><!-- .nav / admin-nav.php -->