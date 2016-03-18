<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $name or "Username" }}</strong>
                        </span> <span class="text-muted text-xs block">{{ $storename or "" }}</span> </span>
            </div>
            <div class="logo-element">
                IN+
            </div>
        </li>
        <!--
        <li>
            <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Overview</span></a>
        </li>
        -->
        <li>
            <a href="/"><i class="fa fa-cubes"></i> <span class="nav-label">Bookings</span> </a>
        </li>
        <li>
            <a href="/revenue"><i class="fa fa-dollar"></i> <span class="nav-label">Revenue</span> </a>
        </li>
        <li>
            <a href="/people"><i class="fa fa-users"></i> <span class="nav-label">People</span> </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-heartbeat"></i> <span class="nav-label">CSAT</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="/csat/consulting">Consulting</a></li>
                <li><a href="/csat/training">Training</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Manage</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="/data">Data</a></li>
            </ul>
        </li>
        <!--        
        <li>
            <a href="#"><i class="fa fa-male"></i> <span class="nav-label">Customers</span> </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Settings</span> </a>
        </li>
        -->
    </ul>

</div>