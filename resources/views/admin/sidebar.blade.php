<!-- PAGE SIDEBAR
        ================================================== -->
<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <span>Pengona Admin</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="{{route('admin.index')}}">
                        <i class="menu-icon icon-home4"></i><span>Anasayfa</span>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/category*')) ? 'active' : '' }}">
                    <a href="{{route('admin.category.index')}}">
                        <i class="fas fa-layer-group menu-icon"></i><span>Katigoriler</span>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/post*')) ? 'active' : '' }}">
                    <a href="{{route('admin.post.index')}}">
                        <i class="fas fa-blog menu-icon"></i><span>Postlar</span>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/services*')) ? 'active' : '' }}">
                    <a href="{{route('admin.services.index')}}">
                        <i class="fas fa-file-alt menu-icon"></i><span>Ürünler ve Hizmetler</span>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/message*')) ? 'active' : '' }}">
                    <a href="{{route('admin.message.index')}}">
                        <i class="fas fa-envelope menu-icon"></i><span>Mesajlar</span>
                    </a>
                </li>
                <li class="">
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
                <li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-users menu-icon"></i><span>Kullanıcılar</span>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/users*')) ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-users menu-icon"></i><span>Aboneciler</span>
                    </a>
                </li>
                <li class="menu-divider"></li>
                <li class="{{ (request()->is('admin/setting')) ? 'active' : '' }}">
                    <a href="{{route('admin.setting')}}">
                        <i class="far fa-sun menu-icon"></i><span>Ayarlar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
