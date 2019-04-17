<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Page Main-->
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="chat-application">
  <div class="chat-content-head">
    <div class="header-details">
      <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Chat</h5>
    </div>
  </div>
  <div class="app-chat">
    <div class="content-area content-right">
      <div class="app-wrapper">
        <!-- Sidebar menu for small screen -->
        <a href="#" data-target="chat-sidenav" class="sidenav-trigger hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
        <!--/ Sidebar menu for small screen -->

        <div class="card card card-default scrollspy border-radius-6 fixed-width">
          <div class="card-content chat-content p-0">
            <!-- Sidebar Area -->
            <div class="sidebar-left sidebar-fixed animate fadeUp animation-fast">
              <div class="sidebar animate fadeUp">
                <div class="sidebar-content">
                  <div id="sidebar-list" class="sidebar-menu chat-sidebar list-group position-relative">
                    <div class="sidebar-list-padding app-sidebar sidenav" id="chat-sidenav">
                      <!-- Sidebar Header -->
                      <div class="sidebar-header">
                        <div class="row valign-wrapper">
                          <div class="col s2 media-image pr-0">
                          <i class="material-icons dp48">contact_mail</i>
                          </div>
                          <div class="col s10">
                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">Chat Bot</p>
                            <p class="m-0 info-text">Here is a chat list.</p>
                          </div>
                        </div>
                        <span class="option-icon">
                          <i class="material-icons">more_vert</i>
                        </span>
                      </div>
                      <!--/ Sidebar Header -->

                      <!-- Sidebar Search -->
                      <div class="sidebar-search animate fadeUp">
                        <div class="search-area">
                          <i class="material-icons mr-2 search-icon">search</i>
                          <input type="text" placeholder="Search Chat" class="app-filter" id="chat_filter">
                        </div>
                        <div class="add-user">
                          <a href="#">
                            <i class="material-icons mr-2 add-user-icon">person_add</i>
                          </a>
                        </div>
                      </div>
                      <!--/ Sidebar Search -->

                      <!-- Sidebar Content List -->
                      <div class="sidebar-content sidebar-chat">
                        <div class="chat-list" id="chat-users-list">
                          <a href="<?=site_url('/chat')?>" class="chat-user animate fadeUp delay-1" id="chat-user-delay-1">
                            <div class="user-section">
                              <div class="row valign-wrapper">
                                <div class="col s2 media-image online pr-0">
                                <i class="material-icons dp48">assignment_ind</i>
                                </div>
                                <div class="col s10">
                                  <p class="m-0 blue-grey-text text-darken-4 font-weight-700" data-key="uin"></p>
                                  <p class="m-0 info-text" data-key="date">2000:01:01</p>
                                </div>
                              </div>
                            </div>
                            <div class="info-section">
                              <div class="star-timing">
                                <div class="favorite">
                                  <i class="material-icons amber-text">star</i>
                                </div>
                                <div class="time">
                                  <span data-key="time">00:00:00</span>
                                </div>
                              </div>
                              <span class="badge badge pill red" data-key="index">0</span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!--/ Sidebar Content List -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Sidebar Area -->

            <!-- Content Area -->
            <div class="chat-content-area animate fadeUp">
              <!-- Chat header -->
              <div class="chat-header">
                <div class="row valign-wrapper">
                  <div class="col media-image online pr-0">
                  <i class="material-icons dp48">assignment_ind</i>
                  </div>
                  <div class="col">
                    <p class="m-0 blue-grey-text text-darken-4 font-weight-700" data-key="selected_uin"></p>
                    <p class="m-0 chat-text truncate">A customer chat list.</p>
                  </div>
                </div>
                <span class="option-icon">
                  <span class="favorite">
                    <i class="material-icons">star_outline</i>
                  </span>
                  <i class="material-icons">delete</i>
                  <i class="material-icons">more_vert</i>
                </span>
              </div>
              <!--/ Chat header -->

              <!-- Chat content area -->
              <div class="chat-area">
                <div class="chats">
                  <div class="chats" id="chat-each-users-multi">
                    <div class="chat chat-each-user" id="chat-each-user-1">
                      <div class="chat-avatar">
                        <a class="avatar">
                        <i class="material-icons dp48" >android</i>
                        </a>
                      </div>
                      <div class="chat-body">
                        <div class="chat-text">
                          <p></p>
                          <span class="padding-1 text-darken-4 font-weight-100"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Chat content area -->

              <!-- Chat footer <-->
              <div class="chat-footer">
                <form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">
                  <input type="text" placeholder="Type message here.." class="message">
                  <a class="btn waves-effect waves-light send disabled" onclick="enter_chat();">Send</a>
                </form>
              </div>
              <!--/ Chat footer -->
            </div>
            <!--/ Content Area -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>