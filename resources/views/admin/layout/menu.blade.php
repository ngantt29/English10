
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            {{-- <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li> --}}
            <li>
                <a href="admin/book/list"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a class style="cursor: pointer"><i class="fa fa-book fa-fw"></i> Unit<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li>
                        <a href="admin/unit/list">List Unit</a>
                    </li>
                    <li>
                        <a href="admin/unit/add">Add Unit</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a><i class="fa fa-database fa-fw"></i> Lesson<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li>
                        <a href="admin/lesson/list">List Lesson</a>
                    </li>
                    <li>
                        <a href="admin/lesson/add">Add Lesson</a>
                    </li>
                    {{-- <li>
                        <a class style="cursor: pointer"><i class="fa fa-database fa-fw"></i> Topic Book<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level ">
                            <li>
                                <a href="admin/Topic/list">List Topic</a>
                            </li>
                            <li>
                                <a href="admin/Topic/add">Add Topic</a>
                            </li>
                            <li>
                                <a class style="cursor: pointer"><i class="fa fa-database fa-fw"></i> Content Book<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level ">
                                    <li>
                                        <a href="admin/Content/list">List Content</a>
                                    </li>
                                    <li>
                                        <a href="admin/Content/add">Add Content</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a class style="cursor: pointer"><i class="fa fa-book fa-fw"></i> Exercise<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li>
                        <a href="admin/book/list">List Exercise</a>
                    </li>
                    <li>
                        <a href="admin/book/add">Add Exercise</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a class style="cursor: pointer"><i class="fa fa-shopping-cart fa-fw"></i> Question<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li>
                        <a href="admin/shoppingcart/list">List Question</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            {{-- <li>
                <a style="cursor: pointer"><i class="fa fa-users fa-fw"></i> Admin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('users.index') }}">List Admin</a>
                    </li>
                    <li>
                        <a href="{{ route('users.create') }}">Add Admin</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}
            {{-- <li>
                <a style="cursor: pointer"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('customer.index') }}">List User</a>
                    </li>
                    <li>
                        <a href="{{ route('customer.create') }}">Add User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}
            <li>
                <a class style="cursor: pointer"><i class="fa fa-comments fa-fw"></i> Comment<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li>
                        <a href="#">List Comment</a>
                    </li>
                    <li>
                        <a href="#">Add Comment</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>