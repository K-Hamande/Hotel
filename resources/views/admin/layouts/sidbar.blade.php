<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{Route('admin_home')}}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{Route('admin_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{Route('admin_home')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{Route('Admin_About')}}"><i class="fas fa-angle-right"></i> About </a></li>
                    <li class="active"><a class="nav-link" href="{{Route('Admin_Terme')}}"><i class="fas fa-angle-right"></i> Terme </a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Contact </a></li>
                </ul> 
            </li>


            <li class=""><a class="nav-link" href="{{Route('Admin_Slide')}} "><i class="fas fa-hand-point-right"></i> <span>Slide</span></a></li>

            <li class=""><a class="nav-link" href="{{Route('Admin_Feature')}} "><i class="fas fa-hand-point-right"></i> <span>Feature</span></a></li>

            <li class=""><a class="nav-link" href="{{Route('Admin_Testimonial')}} "><i class="fas fa-hand-point-right"></i> <span>Testimonial</span></a></li>

            <li class=""><a class="nav-link" href="{{Route('Admin_Post')}} "><i class="fas fa-hand-point-right"></i> <span>Post</span></a></li>

            <li class=""><a class="nav-link" href="{{Route('Admin_Photo')}} "><i class="fas fa-hand-point-right"></i> <span>Galeries Photo</span></a></li>

            <li class=""><a class="nav-link" href="{{Route('Admin_FAQ')}} "><i class="fas fa-hand-point-right"></i> <span>FAQ</span></a></li>

        </ul>
    </aside>
</div>