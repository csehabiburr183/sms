

<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <li class="mt">
                <a href="{{URL::to('/sms')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>For Students</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ URL::to('sms/create') }}">Add Students</a></li>
                    <li><a  href="#">View Student</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>Admission</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">Add Admission Info</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->


<!--main content start-->
<center>