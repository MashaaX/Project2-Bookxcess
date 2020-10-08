<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bookxcess Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('style/apple-icon.png') }}">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('styleassets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="style/images/logo-mini.png" alt="Logo" sizes="60px"><br></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-book"></i>Ebooks </a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-money"></i>Transaction </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">1</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 Available.</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-id"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Admins</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Status</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>xxAlixx</td>
                              <td>Ali Hussein</td>
                              <td>Active</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>EnggarR</td>
                              <td>Enggar Rahayu</td>
                              <td>Active</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Mashaa</td>
                            <td>Herlangga Satria MP</td>
                            <td>Active</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Ukhti</td>
                            <td>Salsabila Firdausy</td>
                            <td>Active</td>
                          </tr>
                        </tr>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Head</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div> --}}
                </div>
            </div><!-- .animated -->
                <div class="animated fadeIn"></div>
            <div class="content mt-3">

            </div>

        </div><!-- .content -->


    </div><!-- /#right-panel -->

</body>
</html>
