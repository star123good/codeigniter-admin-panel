<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Page Main-->
<div id="main">
<div class="row">
  <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
  
  <div class="col s12">
    <div class="container">
      <div class="seaction">
      <div id="search" class="search card z-depth-0 pb-5 center-align  animate fadeUp">
        <div class="card-content">
            <div class="input-field col s12 m6">
                <select id="search_select">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">UIN</option>
                    <option value="2">Product ID</option>
                    <option value="3">Order ID</option>
                </select>
                <label>Search Option Select</label>
            </div>
            <div class="input-field col s12 m6">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix1" type="text" class="validate" data-key="search_input">
                <label for="icon_prefix1" class="">Search</label>
            </div>
            <div class="col s12 mt-3">Please search after select search options.</div>
            <div class="col s12 mt-2 left-align">
                <p>You can select 3 options: UIN, Product ID, Order ID.</p>
                <p>UIN: Unique Identification Number</p>
                <p>Product ID: ID of pp, fullz, dead fullz</p>
                <p>Order ID: ID of transmition</p>
            </div>
        </div>
      </div>

        <!--Basic Tabs-->
        <div class="row">
            <div class="col s12 m12 l12">
            <div id="basic-tabs" class="card card card-default scrollspy animate fadeUp">
                <div class="card-content">
                <div class="card-title">
                    <div class="row">
                    <div class="col s12 m6 l10">
                        <h4 class="card-title"> Orders List </h4>
                        <p>Here is a list of orders. [<?=$search_params?>]</p>
                    </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row" id="main-view">
                        <div class="col s12">
                            <ul class="tabs tab-demo z-depth-1">
                                <li class="tab col m2"><a class="active" href="#test5">All transactions</a>
                                </li>
                                <li class="tab col m2"><a href="#test1">Orders Paid</a>
                                </li>
                                <li class="tab col m2"><a href="#test2">Ongoing Order</a>
                                </li>
                                <li class="tab col m2"><a href="#test3">Failed Orders</a>
                                </li>
                                <li class="tab col m2"><a href="#test4">Repalced products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12">
                            <div class="section section-data-tables">
                                <div id="test1" class="col s12">
                                    <!-- Orders Paid -->
                                    <!-- DataTables example -->
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                        <div id="button-trigger1" class="card card card-default scrollspy">
                                            <div class="card-content">
                                            <h4 class="card-title">Orders Paid</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                <p>Orders Paid</p>
                                                </div>
                                                <div class="col s12">
                                                <table id="data-table-simple1" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-key="table_paid">
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test2" class="col s12">
                                    <!-- Ongoing Order< -->
                                    <!-- DataTables example -->
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                        <div id="button-trigger2" class="card card card-default scrollspy">
                                            <div class="card-content">
                                            <h4 class="card-title">Ongoing Order</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                <p>Ongoing Orders</p>
                                                </div>
                                                <div class="col s12">
                                                <table id="data-table-simple1" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-key="table_ongoing">
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test3" class="col s12">
                                    <!-- Failed Orders -->
                                    <!-- DataTables example -->
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                        <div id="button-trigger3" class="card card card-default scrollspy">
                                            <div class="card-content">
                                            <h4 class="card-title">Failed Orders</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                <p>Failed Orders</p>
                                                </div>
                                                <div class="col s12">
                                                <table id="data-table-simple1" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-key="table_failed">
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test4" class="col s12">
                                    <!-- Repalced products -->
                                    <!-- DataTables example -->
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                        <div id="button-trigger3" class="card card card-default scrollspy">
                                            <div class="card-content">
                                            <h4 class="card-title">Repalced products</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                <p>Repalced products</p>
                                                </div>
                                                <div class="col s12">
                                                <table id="data-table-simple1" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-key="table_replaced">
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test5" class="col s12">
                                    <!-- All transactions -->
                                    <!-- DataTables example -->
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                        <div id="button-trigger3" class="card card card-default scrollspy">
                                            <div class="card-content">
                                            <h4 class="card-title">All transactions</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                <p>All transactions</p>
                                                </div>
                                                <div class="col s12">
                                                <table id="data-table-simple1" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-key="table_all">
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>UIN</th>
                                                        <th>Time</th>
                                                        <th>Type</th>
                                                        <th>Count</th>
                                                        <th>Price</th>
                                                        <th>Chat</th>
                                                    </tr>
                                                    </tfoot>
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
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

