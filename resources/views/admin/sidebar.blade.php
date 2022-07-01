<!-- PAGE SIDEBAR
        ================================================== -->
<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <span>Fabrex</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="">
                    <a href="{{route('admin.index')}}" :active="request()->routeIs('admin.index')">
                        <i class="menu-icon icon-home4"></i><span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.category.index')}}" :active="request()->routeIs('category')">
                        <i class="fas fa-layer-group menu-icon"></i><span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.post.index')}}">
                        <i class="fas fa-blog menu-icon"></i><span>Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.services.index')}}">
                        <i class="fas fa-file-alt menu-icon"></i></i><span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.message.index')}}">
                        <i class="fas fa-envelope menu-icon"></i></i><span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="menu-icon icon-code"></i><span>Forms</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="form-elements.html">Elements</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-file-upload.html">File Upload</a></li>
                        <li><a href="form-image-crop.html">Image Crop</a></li>
                        <li><a href="form-image-zoom.html">Image Zoom</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#!">
                        <i class="menu-icon icon-format_list_bulleted"></i><span>Tables</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="table-static.html">Static</a></li>
                        <li><a href="table-responsive.html">Responsive</a></li>
                        <li><a href="table-data.html">Data Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-users menu-icon"></i></i><span>Users</span>
                    </a>
                </li>
                <li class="menu-divider"></li>
                <li>
                    <a href="{{route('admin.setting')}}">
                        <i class="far fa-sun menu-icon"></i></i><span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
