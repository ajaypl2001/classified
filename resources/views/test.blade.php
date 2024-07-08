<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 14.141.82.35/designer/ezstorit/admin/admin-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2017 11:23:54 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/Opulence.png') }}" type="images/favicon-icon.png">

    <title>HabeshaCore</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap.css') }}" rel="stylesheet">
    <script type='text/javascript' src="{{ asset('jquery-1.11.3.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/city_state.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('jquery.dataTables.min.css') }}" />
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chart-line.css') }}" rel="stylesheet">
    <!-- On Off Btn -->
    <link href="{{ asset('css/switchery.min.css') }}" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <!-- Main Css Theme Style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script type="text/javascript">
        function myFunction() {
            $.ajax({
                url: "",
                type: "POST",
                processData: false,
                success: function(data) {
                    $("#notification-count").remove();
                    $("#notification-latest").show();
                    $("#notification-latest").html(data);
                },
                error: function() {}
            });
        }

        $(document).ready(function() {
            $('body').click(function(e) {
                if (e.target.id != 'notification-icon') {
                    $("#notification-latest").hide();
                }
            });
        });
    </script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">



                            <li class="">

                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:void(0);"> Profile</a></li>
                                    <li><a href=""><i class="fa fa-sign-out pull-right"></i>Change Password</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation">
                                <a href="#" id="notification-icon" onclick="myFunction()"
                                    class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>

                                    <span id="notification-count" class="badge bg-green"></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                                    <li>
                                        <a href="">
                                            <span class="image"><img
                                                    src="{{ asset('images/user-1808597_960_720.png') }}"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span style="font-weight: 600;"> New User Registered</span>

                                            </span>
                                            <span class="message">
                                                <span class="time" style="left: 64px;top: 28px;"> </span>
                                            </span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="">
                                            <span class="image"><img src="" alt="Profile Image" /></span>
                                            <span>
                                                <span style="font-weight: 600;"> New Ad Posted</span>

                                            </span>
                                            <span class="message">
                                                <span class="time" style="left: 64px;top: 28px;"></span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="">
                                            <span class="image"><img
                                                    src="{{ asset('images/0d461dd4af76877019784d29aa5e1c14.png') }}"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span style="font-weight: 600;"> New Payment Received</span>

                                            </span>
                                            <span class="message">

                                                <span class="time" style="left: 64px;top: 28px;"> </span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a>
                                            <span class="image"><img src="{{ asset('images/img.jpg') }}"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span style="font-weight: 600;">John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 main_menu_side hidden-print main_menu" id="sidebar-menu">
                <div class="menu_section">
                    
                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{ asset('images/img.jpg') }}" alt="Profile Image"
                                    class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome</span>
                                <h2>Administrator</h2>
                            </div>
                        </div>

                        <h3>Admin</h3>
                        <ul class="nav side-menu">
                            <li><a href="#"><i class="fa fa-home"></i> Dashboard </a></li>
                            <li>
                                <a><i class="fa fa-envelope"></i> Categories <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#"><i class="fa fa-tags"></i> Add and List categories </a></li>
                                    <li><a href="#"><i class="fa fa-tags"></i> Sub Categories </a></li>
                                    <li><a href="#"><i class="fa fa-tags"></i> International Categories </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-user"></i> Users </a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> Contact Us </a></li>
                            <li>
                                <a><i class="fa fa-envelope"></i> Ads <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#"><i class="fa fa-tags"></i> Features </a></li>
                                    <li><a href="#"><i class="fa fa-tags"></i> Posts </a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-clipboard"></i> Payments </a></li>
                            <li>
                                <a><i class="fa fa-rss"></i> Blogs <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#"><i class="fa fa-tags"></i> Blogs category list </a></li>
                                    <li><a href="#"><i class="fa fa-tags"></i> Add Blog </a></li>
                                    <li><a href="#"><i class="fa fa-tags"></i> Blog Listing </a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-envelope"></i> Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#"><i class="fa fa-thumbs-up"></i> Terms And Condition </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-clipboard"></i> About Us </a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-question-circle"></i> Help Desk Pages <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#"><i class="fa fa-question-circle"></i> Safety </a></li>
                                    <li>
                                        <a><i class="fa fa-question-circle"></i> Policies <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i> Posting Policies
                                                </a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-clipboard"></i> Prohibited Items and
                                                    Services </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-question-circle"></i> All About Ads <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i> Managing Accounts
                                                    and Ads </a></li>
                                            <li><a href="#"><i class="fa fa-clipboard"></i> Posting Ads </a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i> Promoting My Ads
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-clipboard"></i> Replies </a></li>
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i> Searching Ads </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-home"></i> Social Icon </a></li>
                            <li><a href="#"><i class="fa fa-sliders"></i> Home Slider </a></li>
                        </ul>
                    </div>
                </div>
                <!-- Dashboard Page Content -->
                <div class="col-md-10 right_col" role="main">
                    <div class="">
                        <div class="page-title" style=" background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);padding: 20px; border-radius: 5px; margin: 20px 0; align-items: center; justify-content: center;">
                            <div class="title_left full-width">
                                <h3>Admin Dashboard</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row dashboard_d">
                            <div class="col-lg-4 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">26</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Total Member</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">12</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Paid Member</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">124</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Total Category</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row top_space">
                            <div class="col-sm-12 top_heading">
                                <h2>Quick Links</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Dashboard Page Content -->
        <!-- Scripts -->
        <script type="text/javascript">
            function myFunction() {
                $.ajax({
                    url: "",
                    type: "POST",
                    processData: false,
                    success: function(data) {
                        $("#notification-count").remove();
                        $("#notification-latest").show();
                        $("#notification-latest").html(data);
                    },
                    error: function() {}
                });
            }

            $(document).ready(function() {
                $('body').click(function(e) {
                    if (e.target.id != 'notification-icon') {
                        $("#notification-latest").hide();
                    }
                });
            });
        </script>

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

        <!-- Confirm Modal -->
        <div id="confirm" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body text-center">
                        <h2>Are you sure you want to delete this?</h2>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/datatable.js') }}"></script>

        <!-- Additional Scripts -->
        <script src="{{ asset('js/raphael.js') }}"></script>
        <script src="{{ asset('js/morris.js') }}"></script>
        <script src="{{ asset('js/chart-line-lib.js') }}"></script>
        <script src="{{ asset('js/chart-line.js') }}"></script>
        <script src="{{ asset('js/jquery.validate-1.16.0.min.js') }}"></script>
        <script src="{{ asset('js/validate-custom-en.min.js') }}"></script>
        <script src="{{ asset('js/city_state.js') }}"></script>
        <script src="{{ asset('js/switchery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>

        <!-- External Script -->
        <script src="http://122.180.20.185:91/classified/assets/js/validate-custom-en.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.actions .btn-danger').on('click', function() {
                    $('#confirm').modal({
                        keyboard: false
                    });
                });

                $('.facility_table').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bInfo": false,
                    "bSort": false,
                    "bAutoWidth": false,
                    "aoColumnDefs": [{
                        'bSortable': false
                    }]
                });

                $("#form").validate({
                    rules: {
                        rej_title: {
                            required: true
                        },
                        rej_message: {
                            required: true
                        }
                    },
                    messages: {
                        rej_title: {
                            required: "Please enter your company name."
                        },
                        rej_message: {
                            required: "Please select job type."
                        }
                    }
                });

                $("#pageDetails").validate({
                    rules: {
                        heading: {
                            required: true
                        }
                    },
                    messages: {
                        heading: {
                            required: "Please page Details for heading."
                        }
                    }
                });

                $("#pagesform").validate({
                    rules: {
                        title: {
                            required: true
                        },
                        description: {
                            required: true
                        }
                    },
                    messages: {
                        title: {
                            required: "Please enter terms & condition Title."
                        },
                        description: {
                            required: "Please enter terms & condition Description."
                        }
                    }
                });

                $("#aboutform").validate({
                    rules: {
                        title: {
                            required: true
                        },
                        description: {
                            required: true,
                            minlength: 10
                        }
                    },
                    messages: {
                        title: {
                            required: "Please enter About Us Title."
                        },
                        description: {
                            required: "Please enter About Us Description."
                        }
                    }
                });

                $("#updateuser").validate({
                    rules: {
                        Uname: {
                            required: true
                        },
                        Umobile: {
                            required: true
                        },
                        Uabout: {
                            required: true
                        },
                        country: {
                            required: true
                        },
                        city_state: {
                            required: true
                        },
                        Uaddress: {
                            required: true
                        }
                    },
                    messages: {
                        Uname: {
                            required: "Please enter name."
                        },
                        Umobile: {
                            required: "Please enter mobile."
                        },
                        Uabout: {
                            required: "Please enter description."
                        },
                        country: {
                            required: "Please select country."
                        },
                        city_state: {
                            required: "Please select state."
                        },
                        Uaddress: {
                            required: "Please enter address."
                        }
                    }
                });

                $("#cateform").validate({
                    rules: {
                        CateName: {
                            required: true
                        },
                        CateNameAmahric: {
                            required: true
                        },
                        CateIcon: {
                            required: true
                        },
                        CateImage: {
                            required: true
                        }
                    },
                    messages: {
                        CateName: {
                            required: "Please enter category name."
                        },
                        CateNameAmahric: {
                            required: "Please enter category name."
                        },
                        CateIcon: {
                            required: "Please enter the Icon class."
                        },
                        CateImage: {
                            required: "Please select Image."
                        }
                    }
                });

                $("#subcateform").validate({
                    rules: {
                        CateName: {
                            required: true
                        },
                        ScateNameAmharic: {
                            required: true
                        },
                        ScateName: {
                            required: true
                        }
                    },
                    messages: {
                        CateName: {
                            required: "Please select name."
                        },
                        ScateName: {
                            required: "Please enter sub category name."
                        },
                        ScateNameAmharic: {
                            required: "Please enter sub category name."
                        }
                    }
                });

                $("#adsform").validate({
                    rules: {
                        AdsCateName: {
                            required: true
                        },
                        AdsCateNameAmharic: {
                            required: true
                        }
                    },
                    messages: {
                        AdsCateName: {
                            required: "Please enter category name."
                        },
                        AdsCateNameAmharic: {
                            required: "Please enter category name."
                        }
                    }
                });

                $("#sliderform").validate({
                    rules: {
                        SliderImage: {
                            required: true,
                            accept: "jpg,png,jpeg,gif"
                        }
                    },
                    messages: {
                        SliderImage: {
                            required: "Please select the image.",
                            accept: "Only image type jpg/png/jpeg/gif is allowed."
                        }
                    }
                });

                $("#form").validate({
                    rules: {
                        Cname: {
                            required: true
                        },
                        Cemail: {
                            required: true
                        },
                        Cmessage: {
                            required: true
                        }
                    },
                    messages: {
                        Cname: {
                            required: "Please enter name."
                        },
                        Cemail: {
                            required: "Please enter email."
                        },
                        Cmessage: {
                            required: "Please enter your message."
                        }
                    }
                });

                $("#socialiconform").validate({
                    rules: {
                        SocialiconName: {
                            required: true
                        },
                        Socialicon: {
                            required: true
                        },
                        SocialiconURL: {
                            required: true,
                            url: true
                        }
                    },
                    messages: {
                        SocialiconName: {
                            required: "Please enter name."
                        },
                        Socialicon: {
                            required: "Please enter the icon class."
                        },
                        SocialiconURL: {
                            required: "Please enter the web URL.",
                            url: "Please enter a valid website."
                        }
                    }
                });

                $("#BlogCateForm").validate({
                    rules: {
                        BlogcategoryEn: {
                            required: true
                        },
                        BlogcategoryAm: {
                            required: true
                        }
                    },
                    messages: {
                        BlogcategoryEn: {
                            required: "Please enter your category name in English."
                        },
                        BlogcategoryAm: {
                            required: "Please enter your category name in Amharic."
                        }
                    }
                });

                $("#helppolicieform").validate({
                    rules: {
                        HelppolicienameEn: {
                            required: true
                        },
                        HelppolicienameAm: {
                            required: true
                        }
                    },
                    messages: {
                        HelppolicienameEn: {
                            required: "Please enter your policie name in English."
                        },
                        HelppolicienameAm: {
                            required: "Please enter your policie name in Amharic."
                        }
                    }
                });

                $("#BlogForm").validate({
                    ignore: [],
                    debug: false,
                    rules: {
                        Bloglang: {
                            required: true
                        },
                        Blogcate: {
                            required: true
                        },
                        BlogTitle: {
                            required: true
                        },
                        BlogDiscription: {
                            required: function() {
                                CKEDITOR.instances.BlogDiscription.updateElement();
                            },
                            minlength: 100
                        },
                        BlogImage: {
                            required: true
                        }
                    },
                    messages: {
                        Bloglang: {
                            required: "Please select language."
                        },
                        Blogcate: {
                            required: "Please select category."
                        },
                        BlogTitle: {
                            required: "Please enter the Blog Title."
                        },
                        BlogDiscription: {
                            required: "Please enter the Blog Description.",
                            minlength: "Description must be at least 100 characters."
                        },
                        BlogImage: {
                            required: "Please select the Blog image."
                        }
                    }
                });

                $("#helpForm").validate({
                    ignore: [],
                    debug: false,
                    rules: {
                        helplang: {
                            required: true
                        },
                        helpsafetitle: {
                            required: true
                        },
                        helpdiscription: {
                            required: function() {
                                CKEDITOR.instances.helpdiscription.updateElement();
                            },
                            minlength: 100
                        }
                    },
                    messages: {
                        helplang: {
                            required: "Please select language."
                        },
                        helpsafetitle: {
                            required: "Please enter Title."
                        },
                        helpdiscription: {
                            required: "Please enter the Description.",
                            minlength: "Description must be at least 100 characters."
                        }
                    }
                });

                $("#policiesform").validate({
                    ignore: [],
                    debug: false,
                    rules: {
                        policielang: {
                            required: true
                        },
                        policienameid: {
                            required: true
                        },
                        policieDiscription: {
                            required: function() {
                                CKEDITOR.instances.policieDiscription.updateElement();
                            },
                            minlength: 100
                        }
                    },
                    messages: {
                        policielang: {
                            required: "Please select language."
                        },
                        policienameid: {
                            required: "Please select policie name."
                        },
                        policieDiscription: {
                            required: "Please enter the Description.",
                            minlength: "Description must be at least 100 characters."
                        }
                    }
                });

                var chart = c3.generate({
                    bindto: d3.select('.chart'),
                    data: {
                        columns: [
                            ['Jan', 5, 10, 11, 15, 30, 25],
                            ['Feb', 10, 11, 26, 5, 15, 20],
                            ['Mar', 11, 15, 40, 18, 26, 5],
                            ['Apr', 15, 22, 22, 20, 22, 26],
                            ['May', 20, 20, 35, 25, 18, 30],
                            ['Jun', 22, 26, 18, 30, 20, 22],
                            ['Jul', 25, 40, 25, 35, 16, 17],
                            ['Aug', 30, 25, 5, 19, 23, 35],
                            ['Sep', 35, 35, 13, 8, 24, 21],
                            ['Oct', 40, 18, 19, 23, 34, 39],
                            ['Nov', 18, 30, 39, 40, 28, 18],
                            ['Dec', 26, 5, 20, 14, 39, 40]
                        ]
                    }
                });
            });
        </script>
</body>

<!-- Mirrored from 14.141.82.35/designer/ezstorit/admin/admin-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2017 11:24:48 GMT -->

</html>
