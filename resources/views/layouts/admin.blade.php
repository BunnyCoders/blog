<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TophatSoft</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('fontAwesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/mmc-chat.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/nixon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lobipanel/css/lobipanel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    {{-- <li class="active">
                        <a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>

                        </ul>
                    </li> --}}

                    <li class="active">
                        <a class="sidebar-sub-toggle"> Banner <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('banner.create')}}">Create Banner</a></li>
                            <li><a href="{{route('banner.index')}}">Manage Banner</a></li>
                        </ul>
                    </li>

                    <li class="active">
                        <a class="sidebar-sub-toggle"> Post <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('post.create')}}">Create Post</a></li>
                            <li><a href="{{route('post.index')}}">Manage Post</a></li>
                        </ul>
                    </li>

                    <li class="active">
                        <a class="sidebar-sub-toggle"> Category <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('category.create')}}">Create Category</a></li>
                            <li><a href="{{route('category.index')}}">Manage Category</a></li>
                        </ul>
                    </li>

                    <li class="active">
                        <a class="sidebar-sub-toggle"> Blog <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('blog.index')}}">Landing Page</a></li>
                        </ul>
                    </li>
                    <li class="active">
                            <a href="{{route('blog.deleted')}}">Blog Post Trash</a>
                    </li>

                    {{-- <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                    <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                    <li><a><i class="ti-close"></i> Logout</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="pull-left">
            <div class="logo">
                <a href="index.html">
                    <img id="logoImg" src="logo/logo.png" data-logo_big="logo/logo.png" data-logo_small="logo/logoSmall.png" alt="Nixon" />
                </a>
            </div>
            <div class="hamburger sidebar-toggle">
                <span class="ti-menu"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
                {{-- <li class="header-icon dib">
                    <i class="ti-bell"></i>
                    <div class="note-count">2</div>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Jane</div>
                                            <div class="notification-text">5 members joined today </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mariam</div>
                                            <div class="notification-text">likes a photo of you</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Tasnim</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Roe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib">
                    <i class="ti-email"></i>
                    <div class="note-count">21</div>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">2 New Messages</span>
                            <a href="app-email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Doe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Roe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Doe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Jane Roe</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> --}}
                <li class="header-icon dib chat-sidebar-icon"><i class="ti-comments"></i></li>
                <li class="header-icon dib">
                    <img class="avatar-img" src="{{ asset('images/avatar/1.jpg') }}" alt="" /> <span class="user-avatar"> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="{{ route('logout') }}"><i class="ti-power-off"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- <div class="chat-sidebar">
        <!-- BEGIN chat -->
        <div id="mmc-chat" class="color-default">
            <!-- BEGIN CHAT BOX -->
            <div class="chat-box">
                <!-- BEGIN CHAT BOXS -->
                <ul class="boxs"></ul>
                <!-- END CHAT BOXS -->
                <div class="icons-set">
                    <div class="stickers">
                        <div class="had-container">
                            <div class="row">
                                <div class="s12">
                                    <ul class="tabs" style="width: 100%;height: 60px;">
                                        <li class="tab col s3">
                                            <a href="#tab1" class="active">
                                                <img src="assets/images/1.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="tab col s3"><a href="#tab2">Test 2</a></li>
                                    </ul>
                                </div>
                                <div id="tab1" class="s12 tab-content">
                                    <ul>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                    </ul>
                                </div>
                                <div id="tab2" class="s12 tab-content">Test 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CHAT BOX -->
            <!-- BEGIN SIDEBAR -->
            <div id="sidebar" class="right scroll">
                <div class="had-container">
                    <!-- BEGIN USERS -->
                    <div class="users">
                        <ul class="user-list">
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="1" data-status="online" data-username="Rufat Askerov" data-position="left" data-filter-item data-filter-name="rufat askerov">
                                <!-- BEGIN USER IMAGE-->
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Rufat Askerov" />
                                </div>
                                <!-- END USER IMAGE-->
                                <!-- BEGIN USERNAME-->
                                <span class="user-name">Rufat Askerov</span>
                                <span class="user-show"></span>
                                <!-- END USERNAME-->
                            </li>
                            <!-- END USER-->
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="3" data-status="online" data-username="Alice" data-position="left" data-filter-item data-filter-name="alice">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Alice" />
                                </div>
                                <span class="user-name">Alice</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Michael Scofield" data-position="left" data-filter-item data-filter-name="michael scofield">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Michael Scofield" />
                                </div>
                                <span class="user-name">Michael Scofield</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="5" data-status="online" data-username="Irina Shayk" data-position="left" data-filter-item data-filter-name="irina shayk">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Irina Shayk" />
                                </div>
                                <span class="user-name">Irina Shayk</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="6" data-status="offline" data-username="Sara Tancredi" data-position="left" data-filter-item data-filter-name="sara tancredi">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Sara Tancredi" />
                                </div>
                                <span class="user-name">Sara Tancredi</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Jane" data-position="left" data-filter-item data-filter-name="Jane">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Jane" />
                                </div>
                                <span class="user-name">Jane</span>
                                <span class="user-show"></span>
                            </li>
                        </ul>
                        <div class="chat-user-search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" data-search />
                            </div>
                        </div>
                    </div>
                    <!-- END USERS -->
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END chat -->
    </div> --}}
    <!-- END chat Sidebar-->
    <div class="content-wrap" style="width: 100%;">
       @yield('content')
    </div>
 <!-- /# container-fluid -->
</div>
<!-- /# main -->
</div>
<!-- /# content wrap -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<!-- jquery vendor -->
<script src="{{asset('js/lib/jquery.nanoscroller.min.js')}}"></script>
<!-- nano scroller -->
<script src="{{asset('js/lib/sidebar.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('js/lib/bootstrap.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('js/lib/mmc-common.js')}}"></script>
<script src="{{asset('js/lib/mmc-chat.js')}}"></script>
<!--  Chart js -->
<script src="{{asset('js/lib/chart-js/Chart.bundle.js')}}"></script>
<script src="{{asset('js/lib/chart-js/chartjs-init.js')}}"></script>
<!-- // Chart js -->
<!--  Datamap -->
<script src="{{asset('js/lib/datamap/d3.min.js')}}"></script>
<script src="{{asset('js/lib/datamap/topojson.js')}}"></script>
<script src="{{asset('js/lib/datamap/datamaps.world.min.js')}}"></script>
<script src="{{asset('js/lib/datamap/datamap-init.js')}}"></script>
<script src="{{asset('lib/lobipanel/js/lobipanel.js')}}"></script>
<!-- // Datamap -->
<script src="{{asset('js/scripts.js')}}"></script>
<!-- scripit init-->
<!-- Ckeditor -->
<!--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>-->
<script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js" charset="utf-8"></script>
<!--<script type="text/javscript" src="{{ asset('ckeditor/ckeditor.js') }}" charset="utf-8"></script>-->
<script>
    $(document).ready(function() {
        $('#lobipanel-custom-control').lobiPanel({
            reload: false,
            close: false,
            editTitle: false
        });
    });

</script>
<script>
        CKEDITOR.config.contentsCss = 'mystyles.css';
         CKEDITOR.replace('content', {
    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

<script type="text/javascript">

    $(document).ready(function(){
     $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {

            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                        $('#thumb-output').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

</script>
</body>

</html>
