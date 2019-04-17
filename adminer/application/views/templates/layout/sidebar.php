<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed"> 
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
        <div class="nav-wrapper">
        <div class="header-search-wrapper hide-on-med-and-down">
            <!-- <i class="material-icons">search</i> -->
            <!-- <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore User"> -->
        </div>
        <ul class="navbar-list right">
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
            <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
            <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">0</small></i></a></li>
            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?=base_url("template/app-assets/images/avatar/avatar-18.png")?>" alt="avatar"><i></i></span></a></li>
            <li><a class="waves-effect waves-block waves-light sidenav-trigger1" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
        </ul>
        <!-- translation-button-->
        <ul class="dropdown-content" id="translation-dropdown">
            <li><a class="grey-text text-darken-1" href="#"><i class="flag-icon flag-icon-gb"></i> English</a></li>
        </ul>
        <!-- notifications-dropdown-->
        <ul class="dropdown-content" id="notifications-dropdown">
            <li>
            <h6>NOTIFICATIONS<span class="new badge"></span></h6>
            </li>
            <li class="divider"></li>
            </li> -->
        </ul>
        <!-- profile-dropdown-->
        <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="<?=site_url('/login')?>"><i class="material-icons">input</i> Log In</a></li>
            <li class="divider"></li>
            <!-- <li><a class="grey-text text-darken-1" href="<?=site_url('/lock')?>"><i class="material-icons">lock_outline</i> Lock</a></li> -->
            <li><a class="grey-text text-darken-1" href="<?=site_url('/logout')?>"><i class="material-icons">keyboard_tab</i> Log Out</a></li>
        </ul>
        </div>
        <nav class="display-none search-sm">
        <div class="nav-wrapper">
            <form>
            <div class="input-field">
                <input class="search-box-sm" type="search" required="">
                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
            </div>
            </form>
        </div>
        </nav>
    </nav>
    </div>
</header>
<!-- END: Header-->

<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?=site_url('/')?>">
            <span class="logo-text hide-on-med-and-down">Bot Admin</span></a><a class="navbar-toggler" href="<?=site_url('/')?>"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="<?=($page_select == 'home')?'active':''?> bold"><a class="waves-effect waves-cyan <?=($page_select == 'home')?'active':''?>" href="<?=site_url('/')?>"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="<?=($page_select == 'user')?'active':''?> bold"><a class="waves-effect waves-cyan <?=($page_select == 'user')?'active':''?>" href="<?=site_url('/user')?>"><i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span></a>
        </li>
        <li class="<?=($page_select == 'order')?'active':''?> bold"><a class="waves-effect waves-cyan <?=($page_select == 'order')?'active':''?>" href="<?=site_url('/order')?>"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">Order</span></a>
        </li>
        <li class="<?=($page_select == 'chat')?'active':''?> bold"><a class="waves-effect waves-cyan <?=($page_select == 'chat')?'active':''?>" href="<?=site_url('/chat')?>"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Chat</span></a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->