<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                <div class="section">

<div class="card  animate fadeUp">
    <div class="card-content">
        <h3><i class="material-icons medium icon-demo">account_box</i> <?=$uin?></h3>
        <div class="caption mb-0">
        <div class="row">
          <div class="col s8">Here is the detail of a user whos UIN is <?=$uin?>.</div>
          <div class="col s4 right-align">
            <!-- Switch -->
            <div class="switch" style="float:right">
              <label for="ban_switch_checkbox">
                Unban
                <input type="checkbox" id="ban_switch_checkbox">
                <span class="lever"></span>
                Ban
              </label>
            </div>
            <a href="<?=site_url('/chat/'.$uin)?>" class="mr-5"><i class="material-icons dp48">chat</i></a>
          </div>
        </div>
        </div>
    </div>
</div>

<!-- Responsive Table -->
<div class="row">
    <div class="col s12 m12 l12">
      <div id="responsive-table" class="card card card-default scrollspy  animate fadeUp">
        <div class="card-content">
          <h4 class="card-title">User Information</h4>
          <div class="row">
            <div class="col s12">
              <table class="responsive-table Highlight striped bordered">
                <thead>
                  <tr>
                    <th data-field="id">Field</th>
                    <th data-field="name">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PP Count</td>
                    <td data-key="pps_count">0</td>
                  </tr>
                  <tr>
                    <td>Fullz Count</td>
                    <td data-key="fullz_count">0</td>
                  </tr>
                  <tr>
                    <td>Dead Fullz Count</td>
                    <td data-key="dead_fullz_count">0</td>
                  </tr>
                  <tr>
                    <td>Confirmed Transaction Count</td>
                    <td data-key="transaction">0</td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td>£ <span data-key="price">0</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>