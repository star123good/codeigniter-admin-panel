<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Page Main-->
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div id="search-page" class="section">
  <div class="row">
    <div class="col s12">
      <div id="search" class="search card z-depth-0 pb-5 center-align  animate fadeUp">
        <div class="card-content">
          <div class="input-field col s12">
            <h5 class="mb-2">Search User</h5>
            <input placeholder="Input the UIN of a customer." id="search_user" type="text" class="search-box validate white search-circle">
          </div>
        </div>
      </div>
      <h6>Here is chat bot user list.</h6>
      <div class="row">
        <div class="col s12">
          <div class="card z-depth-1">
            <div class="card-content">
              <p class="mb-2">Total counts : <span data-key="user_count">0</span></p>
              <div class="divider mt-2"></div>

                <!-- Card With Analytics -->
                <div id="card-with-analytics" class="section">
                    <h4 class="header">Users List</h4>
                    <div class="row" id="user-cards-multi">
                        <a href="<?=site_url('/user')?>" class="user-card-one col s12 m6 l3 card-width animate fadeLeft" id="user-card-one-1">
                            <div class="card border-radius-6">
                                <div class="card-content center-align">
                                    <i class="material-icons background-round mt-5">account_circle</i>
                                    <h4 class="mt-3"><b data-key="uin">0</b></h4>
                                    <p>Unique Identification Number</p>
                                    <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">av_timer</i> <span data-key="time">2000-01-01 00:00:00</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
