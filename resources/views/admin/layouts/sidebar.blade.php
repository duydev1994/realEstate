<section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="treeview">
            <a href="#">
                <i class="fa fa-fw fa-folder-o"></i> <span>Danh Mục</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="{{route('admin.categories.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>
    </ul>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="treeview">
            <a href="#">
                <i class="fa fa-fw fa-newspaper-o"></i> <span>Bài Viết</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('admin.articles.index')}}"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="{{route('admin.articles.create')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>
    </ul>

</section>