


<div class="dlabnav">
    <div class="dlabnav-scroll">
        <div class="dropdown header-profile2 ">
            <a class="nav-link " href="javascript:void(0);"  role="button">
                <div class="header-info2 d-flex align-items-center">
                    <img src="{{asset('backend/asset')}}/images/profile/pic1.jpg" alt="">
                    <div class="d-flex align-items-center sidebar-info">
                        <div>
                            <span class="font-w400 d-block">Franklin Jr</span>
                            <small class="text-end font-w400">Superadmin</small>
                        </div>

                    </div>

                </div>
            </a>
        </div>
        <ul class="metismenu" id="menu">
            <li><a class="{{ request()->routeIs('dashboard')?'mm-active':"" }}" href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-093-waving"></i>
                    <span class="nav-text">Jobs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('job.index') }}">Job Lists</a></li>
                    <li><a href="job-view.html">Job View</a></li>
                    <li><a href="job-application.html">Job Application</a></li>
                    <li><a href="apply-job.html">Apply Job</a></li>
                    <li><a href="new-job.html">New Job</a></li>
                    <li><a href="user-profile.html">User Profile</a></li>
                </ul>
            </li>

        </ul>
     
    </div>
</div>
