<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('home.slide') }}" class="waves-effect">
                        <i class="ri-home-gear-line"></i>
                        <span>Home Slide</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page') }}">About Page</a></li>
                        <li><a href="{{ route('about.multi.image') }}">About Multi Image</a></li>
                        <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-user-line"></i>
                        <span>Project Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.project') }}">All Project</a></li>
                        <li><a href="{{ route('add.project') }}">Add Project</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('footer.setup') }}" class="waves-effect">
                        <i class="ri-layout-bottom-line"></i>
                        <span>Footer</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('contact.message') }}" class="waves-effect">
                        <i class="ri-message-2-line"></i>
                        <span>Contact Message</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
