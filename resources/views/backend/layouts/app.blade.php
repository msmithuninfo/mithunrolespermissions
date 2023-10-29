<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Bootstrap link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
</head>
<body>
    <div class="main-container" id="fullScreen">
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('backend/images/Sonal Gharti.jpg') }}" alt="">
                <span id="span-text" class="span-text">Admin Dashboard</span>
            </div>
            <div class="sidebar-body">
                <ul class="my-navbar">
                    <li class="my-nav-item ">
                        <a href="{{ route('home') }}" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Dashboard</span>
                        </a>
                    </li>

                    <li class="my-nav-item">
                        <p>Administrator</p>
                    </li>
                    @can('user list')
                    <li class="my-nav-item ">
                        <a href="{{ route('users.index') }}" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Users</span>
                        </a>
                    </li>
                    @endcan

                    @can('role list')
                    <li class="my-nav-item">
                        <a href="{{ route('roles.index') }}" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Roles</span>
                        </a>
                    </li>
                    @endcan

                    @can('permission list')
                    <li class="my-nav-item ">
                        <a href="{{ route('permissions.index') }}" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Permissions</span>
                        </a>
                    </li>
                    @endcan

                    <li class="my-nav-item">
                        <p>Example</p>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Gallery</span>
                        </a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link active">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="span-text">Contact</span>
                        </a>
                    </li>
                    <li class="my-nav-item ">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Dashboard</span>
                        </a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Gallery</span>
                        </a>
                    </li>
                    <li class="my-nav-item ">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Dashboard</span>
                        </a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Gallery</span>
                        </a>
                    </li>
                    <li class="my-nav-item my-dropdown">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span class="span-text">Dashboard</span>
                            <i class="fa-solid fa-angle-down arrow"></i>
                        </a>
                        <ul class="my-dropdown-navbar">
                            <li class="my-nav-item">
                                <a href="" class="my-nav-link">
                                    <i class="fa-regular fa-circle"></i>
                                    <span class="span-text">link 1</span>
                                </a>
                            </li>
                            <li class="my-nav-item">
                                <a href="" class="my-nav-link">
                                    <i class="fa-regular fa-circle"></i>
                                    <span class="span-text">link 2</span>
                                </a>
                            </li>
                            <li class="my-nav-item">
                                <a href="" class="my-nav-link">
                                    <i class="fa-regular fa-circle"></i>
                                    <span class="span-text">link 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="my-nav-item">
                        <p>Example</p>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="span-text">Contact</span>
                        </a>
                    </li>
                    <li class="my-nav-item ">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Dashboard</span>
                        </a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Gallery</span>
                        </a>
                    </li>
                    <li class="my-nav-item ">
                        <a href="#" class="my-nav-link">
                            <i class="fa-solid fa-gauge"></i>
                            <span id="span-text" class="span-text" aria-hidden="true">Dashboard</span>
                        </a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">
                            <i class="fa-regular fa-image"></i>
                            <span class="span-text">Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="full-container">
            <div class="top-navbar">
                
                <div class="top-left-navbar">
                    <ul>
                        <li><i id="btn" class="fa-solid fa-bars"></i></li>
                        
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="top-right-navbar">
                    <ul>
                        <li><i class="fas fa-search"></i></li>
                        <li style="position: relative;">
                            <i onclick="messageFunction();" class="fa-regular fa-comments messageBtn"></i>
                            <div id="messageDropdownContentID" class="messageDropdownContentClass">
                                <a href="#">message 1</a>
                                <a href="#">message 2</a>
                                <a href="#">message 3</a>
                                <a href="#">message 4</a>
                                <a href="#">message 1</a>
                                <a href="#">message 2</a>
                                <a href="#">message 3</a>
                                <a href="#">message 4</a>
                            </div>
                        </li>
                        <li style="position: relative;">
                            <i onclick="notificationFunction();" class="fa-regular fa-bell notificationBtn"></i>
                            <div id="notificationDropdownContentID" class="notificationDropdownContentClass">
                                <a href="#">notification 1</a>
                                <a href="#">notification 2</a>
                                <a href="#">notification 3</a>
                                <a href="#">notification 4</a>
                                <a href="#">notification 1</a>
                                <a href="#">notification 2</a>
                                <a href="#">notification 3</a>
                                <a href="#">notification 4</a>
                            </div>
                        </li>
                        <li id="maxFullScreen"><i class="fa-solid fa-maximize" onclick="openFullscreen();"></i></li>
                        <li id="minFullScreen"><i class="fa-solid fa-maximize" onclick="closeFullscreen();"></i></li>
                        <li style="padding-top: 0px; position: relative;">
                            <img onclick="profileFunction();" class="profileBtn" src="{{ asset('backend/images/Alson GC.jpg') }}" alt="">
                            <div id="profileDropdownContentID" class="profileDropdownContentClass">
                                <a href="#">Name</a>
                                <a href="#">Profile</a>
                                <a href="#">Setting</a>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="myContainer">
                @yield('content')
            </div>
            <div class="myFooter">
                <span>&copy; mithun@gmail.com</span>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap link  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type='text/javascript' src="{{ asset('backend/js/script.js') }}"></script>

</body>
</html>