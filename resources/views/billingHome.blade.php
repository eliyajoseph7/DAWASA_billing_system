@include('constants.header')

    <div class="row">
      <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
      </div>
      <div class="col-10">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">wellcome</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">hello</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">friends</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">fine</div>
        </div>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('front')}}"><i class="fa fa-circle-o"></i> Timetable</a></li>
          </ul>
        </li>

        <li>
          <a href="{{url('first')}}">
            <i class="fa fa-th"></i> <span>1st year</span>

          </a>
        </li>

        <li >
          <a href="{{url('second')}}">
            <i class="fa fa-laptop"></i>
            <span>2nd year</span>
          </a>

        </li>
        <li >
          <a href="{{url('third')}}">
            <i class="fa fa-edit"></i> <span>3rd year</span>
          </a>

        </li>
        <li >
          <a href="{{url('forth')}}">
            <i class="fa fa-table"></i> <span>4th year</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
          </a>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>
</body>
</html>