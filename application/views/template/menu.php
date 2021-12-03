
<header id="masthead" class="header ttm-header-style-classic">

    <div class="ttm-header-wrap">
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="site-branding">
                            <a class="home-link" href="" title="" rel="home">
                                <img id="logo-img" class="img-center" src="<?= base_url(); ?>assets/images/random.png" alt="">
                            </a>
                        </div>
                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-rt-contact">
                                <div class="ttm-header-icons">
                                    
                                </div>
                            </div>
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li class="<?php if($this->uri->uri_string() == '') { echo 'active'; } ?>"><a href="<?php echo site_url(''); ?>">Home</a></li>
                                    <li class="<?php if($this->uri->uri_string() == 'about') { echo 'active'; } ?>"><a href="<?php echo site_url('about'); ?>">About</a></li>
                                    <li class="<?php if($this->uri->uri_string() == 'home#our-service') { echo 'active'; } ?>"><a href="<?php echo site_url('home#our-service'); ?>">Services</a></li>
                                    <li class="<?php if($this->uri->uri_string() == 'career') { echo 'active'; } ?>"><a href="<?php echo site_url('career'); ?>">Career</a></li>
                                    <li class="<?php if($this->uri->uri_string() == 'contact') { echo 'active'; } ?>"><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
