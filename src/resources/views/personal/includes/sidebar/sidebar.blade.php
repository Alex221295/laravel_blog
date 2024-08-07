<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-5 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-is-opening menu-open">
                <a href="{{route('personal.index')}}" class="nav-link">
                    <i class="fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            <li class="nav-item menu-is-opening menu-open">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="far fa-heart"></i>
                    <p>
                        Liked post
                    </p>
                </a>
            </li>
            <li class="nav-item menu-is-opening menu-open">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="far fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
