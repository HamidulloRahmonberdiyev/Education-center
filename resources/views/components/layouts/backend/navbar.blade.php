
<ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">Admin Panel</li>

    <li class="{{ Request::is('admin*') ? 'active' : '' }}">
      <a href="/admin">
        <i class="zmdi zmdi-view-dashboard text-success"></i> <span>Asosiy</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">
      <a href="{{ route('posts.index') }}">
        <i class="zmdi zmdi-paypal"></i> <span>Postlar / Biz haqimizda</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
      <a href="{{ route('categories.index') }}">
        <i class="zmdi zmdi-delicious"></i> <span>Kategoriylar</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/tags*') ? 'active' : '' }}">
      <a href="{{ route('tags.index') }}">
        <i class="zmdi zmdi-windows"></i> <span>Teglar</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/languages*') ? 'active' : '' }}">
      <a href="{{ route('languages.index') }}">
        <i class="zmdi zmdi-flag"></i> <span>Tillar</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/courses*') ? 'active' : '' }}">
      <a href="{{ route('courses.index') }}">
        <i class="zmdi zmdi-home"></i> <span>Kurslar</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/news*') ? 'active' : '' }}">
      <a href="{{ route('news.index') }}">
        <i class="zmdi zmdi-share"></i> <span>Yangiliklar</span>
        <small class="badge float-right badge-primary">New</small>
      </a>
    </li>

    <li class="{{ Request::is('admin/videos*') ? 'active' : '' }}">
      <a href="{{ route('videos.index') }}">
        <i class="zmdi zmdi-tv"></i> <span>Videolar</span>
      </a>
    </li>

     <li class="{{ Request::is('admin/teachers*') ? 'active' : '' }}">
      <a href="{{ route('teachers.index') }}">
        <i class="zmdi zmdi-accounts"></i> <span>Ustozlar</span>
      </a>
    </li>


    <li class="sidebar-header">Qo'shimcha</li>

    <li class="{{ Request::is('admin/joincourses*') ? 'active' : '' }}">
      <a href="{{ route('joincourses.index') }}">
        <i class="fa fa-users text-info"></i> <span>Kursga yozilganlar</span>
      </a>
    </li>

    <li class="{{ Request::is('admin/comments*') ? 'active' : '' }}">
      <a href="{{ route('comments.index') }}">
        <i class="zmdi zmdi-comments text-warning"></i> <span>Izohlar</span>
      </a>
    </li>

    @if (Auth::user()->role_id > 2)
    <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
      <a href="{{ route('users.index') }}"> 
        <i class="zmdi zmdi-account text-success"></i> <span>Adminlar</span>
      </a>
    </li>
    
    <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
      <a href="{{ route('roles.index') }}">
        <i class="zmdi zmdi-chart-donut text-danger"></i> <span>Daraja</span>
      </a>
    </li>
    @endif


  </ul>
 
