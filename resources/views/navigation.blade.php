  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="{{ asset('AdminLTE2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
              </div>
              <div class="pull-left info">
                  <p>
                      {{ Auth::user()->name }}</p>
                  <a href="{{ asset('AdminLTE2/') }}#"><i class="fa fa-circle text-success"></i>
                      Online</a>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search..." />
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active treeview">
                  <a href="{{ asset('AdminLTE2/') }}#">
                      <i class="fa fa-dashboard"></i>
                      <span>Dashboard</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>

              </li>

              <li class="treeview">
                  <a href="{{ asset('AdminLTE2/') }}#">
                      <i class="fa fa-edit"></i> <span>Forms</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li>
                          <a href="{{ asset('AdminLTE2/') }}pages/forms/general.html"><i class="fa fa-circle-o"></i>
                              General
                              Elements</a>
                      </li>
                      <li>
                          <a href="{{ asset('AdminLTE2/') }}pages/forms/advanced.html"><i class="fa fa-circle-o"></i>
                              Advanced
                              Elements</a>
                      </li>
                      <li>
                          <a href="{{ asset('AdminLTE2/') }}pages/forms/editors.html"><i class="fa fa-circle-o"></i>
                              Editors</a>
                      </li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="{{ asset('AdminLTE2/') }}#">
                      <i class="fa fa-table"></i> <span>Tables</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li>
                          <a href="{{ asset('AdminLTE2/') }}pages/tables/simple.html"><i class="fa fa-circle-o"></i>
                              Simple
                              tables</a>
                      </li>
                      <li>
                          <a href="{{ asset('AdminLTE2/') }}pages/tables/data.html"><i class="fa fa-circle-o"></i>
                              Data
                              tables</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="{{ asset('AdminLTE2/') }}pages/calendar.html">
                      <i class="fa fa-calendar"></i>
                      <span>Calendar</span>
                      <span class="pull-right-container">
                          <small class="label pull-right bg-red">3</small>
                          <small class="label pull-right bg-blue">17</small>
                      </span>
                  </a>
              </li>
              <li>
                  <a href="{{ asset('AdminLTE2/') }}pages/mailbox/mailbox.html">
                      <i class="fa fa-envelope"></i>
                      <span>Mailbox</span>
                      <span class="pull-right-container">
                          <small class="label pull-right bg-yellow">12</small>
                          <small class="label pull-right bg-green">16</small>
                          <small class="label pull-right bg-red">5</small>
                      </span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>
