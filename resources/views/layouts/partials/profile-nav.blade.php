<li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
<li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">  <span class="d-none d-md-inline">Alexander Pierce</span> </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
        <li class="user-header text-bg-primary"> <img src="../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">
            <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2023</small>
            </p>
        </li> <!--end::User Image--> <!--begin::Menu Body-->

        <li class="user-footer"> <a href="#" class="btn btn-outline-primary ">Profile</a><br>

            <form action="{{route('logout')}}" method="post">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Sign out">
            </form>

        </li> <!--end::Menu Footer-->
    </ul>
</li> <!--end::User Menu Dropdown-->

