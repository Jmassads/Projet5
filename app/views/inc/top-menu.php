<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>


    <a href="<?php echo URLROOT;?>">
        <h2 class="nav-brand">
            <div class="initial_first_name"><span>J</span></div>
            <div class="initial_last_name"><span>A</span></div>
        </h2>
    </a>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-clean">
        <li><a href="<?php echo URLROOT;?>/Portfolio">Portfolio</a></li>
        <li><a href="<?php echo URLROOT;?>/Blog">Blog</a></li>
        <li><a href="<?php echo URLROOT;?>/#contact">Contact</a></li>
    </ul>
</nav>