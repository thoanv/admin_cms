<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('dashboard')}}"><img
                style="width: calc(244px - 85px);  height: 50px" src="/assets/images/logo.png" alt="logo"/></a>
        <a class="sidebar-brand brand-logo-mini" href="{{route('dashboard')}}"><img
                style="width: calc(244px - 120px); width: 90%; height: 40px" src="/assets/images/logo-mini.png"
                alt="logo"/></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/assets/images/faces/man.png" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                        <span>Nhân viên</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                     aria-labelledby="profile-dropdown">
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Thay đổi mật khẩu</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </li>
        <li class="nav-item menu-items {{ request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('/aboutUs') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('aboutUs.edit', 1)}}">
          <span class="menu-icon">
            <i class="mdi  mdi-information-outline"></i>
          </span>
                <span class="menu-title">Thông tin chung</span>
            </a>
        </li>
        @canany(['create', 'viewAny'], \App\Models\Employee::class)
        <li class="nav-item menu-items {{ (request()->is('employees/*') || request()->is('role/*')) ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#employees" aria-expanded="false" aria-controls="employees">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
                <span class="menu-title">Nhân viên</span>
                <i class="menu-arrow"></i>
            </a>
            <div
                class="collapse {{ (request()->is('employees') || request()->is('employees/create') || request()->is('role/*')) ? 'show' : '' }}"
                id="employees">
                <ul class="nav flex-column sub-menu">
                    @can('viewAny', \App\Models\Employee::class)
                    <li class="nav-item"><a class="nav-link {{ (request()->is('employees')) ? 'active' : '' }}"
                                            href="{{route('employees.index')}}">Danh sách</a></li>
                    @endcan
                    @can('create', \App\Models\Employee::class)
                    <li class="nav-item"><a class="nav-link {{ request()->is('employees/create') ? 'active' : '' }}"
                                            href="{{route('employees.create')}}">Thêm mới</a></li>
                    @endcan
                </ul>
            </div>
        </li>
        @endcanany
        @canany(['create', 'viewAny'], \App\Models\Permission::class)
            <li class="nav-item menu-items {{ (request()->is('permissions') || request()->is('permissions/create') || request()->is('type-permissions') || request()->is('type-permissions/create')) ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#permission" aria-expanded="false"
                   aria-controls="permission">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">Phân quyền</span>
                    <i class="menu-arrow"></i>
                </a>
                <div
                    class="collapse {{ (request()->is('permissions') || request()->is('permissions/create') || request()->is('type-permissions') || request()->is('type-permissions/create')) ? 'show' : '' }}"
                    id="permission">
                    <ul class="nav flex-column sub-menu">
                        @can('viewAny', \App\Models\Permission::class)
                            <li class="nav-item"><a
                                    class="nav-link {{ (request()->is('permissions')) ? 'active' : '' }}"
                                    href="{{route('permissions.index')}}">Danh sách</a></li>
                        @endcan
                        @can('create', \App\Models\Permission::class)
                            <li class="nav-item"><a
                                    class="nav-link {{ request()->is('permissions/create') ? 'active' : '' }}"
                                    href="{{route('permissions.create')}}">Thêm mới</a></li>
                        @endcan
                        <li class="nav-item"><a class="nav-link {{ request()->is('type-permissions') ? 'active' : '' }}"
                                                href="{{route('type-permissions.index')}}">Loại quyền</a></li>
                    </ul>
                </div>
            </li>
        @endcanany
        <li class="nav-item nav-category  pb-0">
            <span class="nav-link">Cài đặt</span>
        </li>
        <li class="nav-item menu-items {{ (request()->is('categories')||request()->is('categories/*')) ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false"
               aria-controls="categories">
              <span class="menu-icon">
                <i class="mdi mdi-dns"></i>
              </span>
                <span class="menu-title">Danh mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div
                class="collapse {{ (request()->is('categories') || request()->is('categories/create') ||request()->is('categories/*')) ? 'show' : ''}}"
                id="categories">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ (request()->is('categories')) ? 'active' : '' }}"
                                            href="{{route('categories.index')}}"> Danh sách </a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('categories/create') ? 'active' : '' }}"
                                            href="{{route('categories.create')}}"> Thêm mới </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items {{ (request()->is('menus')||request()->is('menus/*')) ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#menus" aria-expanded="false" aria-controls="menus">
              <span class="menu-icon">
                <i class="mdi mdi-dns"></i>
              </span>
                <span class="menu-title">Menu</span>
                <i class="menu-arrow"></i>
            </a>
            <div
                class="collapse {{ (request()->is('menus') || request()->is('menus/create') ||request()->is('menus/*')) ? 'show' : ''}}"
                id="menus">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ (request()->is('menus')) ? 'active' : '' }}"
                                            href="{{route('menus.index')}}"> Danh sách </a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('menus/create') ? 'active' : '' }}"
                                            href="{{route('menus.create')}}"> Thêm mới </a></li>
                </ul>
            </div>
        </li>
        @canany(['create', 'viewAny'], \App\Models\News::class)
            <li class="nav-item nav-category  pb-0">
                <span class="nav-link">Tin tức</span>
            </li>
            @can( 'viewAny', \App\Models\News::class)
                <li class="nav-item menu-items {{ (request()->is('news')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('news.index')}}">
                          <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                          </span>
                        <span class="menu-title">Danh sách</span>
                    </a>
                </li>
            @endcan
            @can( 'create', \App\Models\News::class)
                <li class="nav-item menu-items {{ (request()->is('news/create')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('news.create')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-library-plus"></i>
                        </span>
                        <span class="menu-title">Thêm mới</span>
                    </a>
                </li>
            @endcan
        @endcanany
        @canany(['create', 'viewAny'], \App\Models\Journal::class)
            <li class="nav-item nav-category  pb-0">
                <span class="nav-link">Tạp chí</span>
            </li>
            @can( 'viewAny', \App\Models\Journal::class)
                <li class="nav-item menu-items {{ (request()->is('journals')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('journals.index')}}">
                          <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                          </span>
                        <span class="menu-title">Danh sách</span>
                    </a>
                </li>
            @endcan
            @can( 'create', \App\Models\Journal::class)
                <li class="nav-item menu-items {{ (request()->is('journals/create')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('journals.create')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-library-plus"></i>
                        </span>
                        <span class="menu-title">Thêm mới</span>
                    </a>
                </li>
            @endcan
        @endcanany
        @canany(['create', 'viewAny'], \App\Models\System::class)
            <li class="nav-item nav-category  pb-0">
                <span class="nav-link">Hệ thống Hải Phát Land</span>
            </li>
            @can( 'viewAny', \App\Models\System::class)
                <li class="nav-item menu-items {{ (request()->is('systems')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('systems.index')}}">
                          <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                          </span>
                        <span class="menu-title">Danh sách</span>
                    </a>
                </li>
            @endcan
            @can( 'create', \App\Models\System::class)
                <li class="nav-item menu-items {{ (request()->is('systems/create')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('systems.create')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-library-plus"></i>
                        </span>
                        <span class="menu-title">Thêm mới</span>
                    </a>
                </li>
            @endcan
        @endcanany
        @canany(['create', 'viewAny'], \App\Models\Recruit::class)
            <li class="nav-item nav-category  pb-0">
                <span class="nav-link">Tuyển dụng</span>
            </li>
            @can( 'viewAny', \App\Models\Recruit::class)
                <li class="nav-item menu-items {{ (request()->is('recruits')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('recruits.index')}}">
                          <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                          </span>
                        <span class="menu-title">Danh sách</span>
                    </a>
                </li>
            @endcan
            @can( 'create', \App\Models\Recruit::class)
                <li class="nav-item menu-items {{ (request()->is('recruits/create')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('recruits.create')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-library-plus"></i>
                        </span>
                        <span class="menu-title">Thêm mới</span>
                    </a>
                </li>
            @endcan
            @can( 'viewAny', \App\Models\Candidate::class)
                <li class="nav-item menu-items {{ (request()->is('candidates')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('candidates.index')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-multiple"></i>
                        </span>
                        <span class="menu-title">Ứng viên ứng tuyển</span>
                    </a>
                </li>
            @endcan
        @endcanany
        @canany(['create', 'viewAny'], \App\Models\Contact::class)
            <li class="nav-item nav-category  pb-0">
                <span class="nav-link">Liên hệ</span>
            </li>
            @can( 'viewAny', \App\Models\Contact::class)
                <li class="nav-item menu-items {{ (request()->is('contacts')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('contacts.index')}}">
                          <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                          </span>
                        <span class="menu-title">Danh sách</span>
                    </a>
                </li>
            @endcan

        @endcanany
    </ul>
</nav>