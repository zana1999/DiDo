<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> DiDo Students</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />







    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/DiDo/public/"><img src="dido.png" width="100px" style="margin-top: 40px;margin-left: 40px;;" alt=""></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for Student" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>




                </li>


            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/DiDo/public/">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home Page
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{Auth::user()->name}}

            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Students</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                @can('isadmin')
                <div class="row">
                    <div class="col-xl-3 col-md-6" id="addstd">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Add Student</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#mymodal">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6" id="regcard">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Re-Group</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#regroup-modal">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    @endcan
                    <style>
                        #adstrr{
                            background-color: #445ef2;
                            color:white;
                        }
                        #regstr{
                            background-color: #e6ab07;
                            color:white;
                        }
                        #addstd:hover{
                            cursor: pointer;
                        }
                        #regcard:hover{
                            cursor: pointer;
                        }
                        input[type=file]::file-selector-button{
                            background-color: royalblue;
                            border: none;
                            color: white;
                            padding: 9px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border-radius: 4px;
                            margin-left: 40px;
                        }

                    </style>
                    <?php

                    $students=0;

                    ?>
                    @foreach(\App\Student::all() as $student)


                        <?php
                        $students++;
                        ?>

                    @endforeach

                    <div class="modal" id="regroup-modal">
                        <div class="modal-dialog" >
                            <div class="modal-content" style="width: 600px;">
                                <div class="modal-header" id="regstr">
                                    <h5 class="modal-title">Add Student</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">    <!--         modal body     -->
                                    <form action="/DiDo/public/Regroup" method="GET"  id="textform">
                                        @csrf
                                        <h4> Choose Grouping Method ..</h4>
                                        <div class="form-check form-switch">


                                            <div class="md-5">
                                                <input type="radio" class="btn-check"value="maxstd" onclick="mama()" name="choice" id="ch1" checked >
                                                <label class="btn btn-outline-warning"  for="ch1">Max Students</label>
                                                <input type="radio" class="btn-check"value="grpnum" onclick="grp()" name="choice" id="ch2" >
                                                <label class="btn btn-outline-warning"  for="ch2">Group Number</label>
                                                <input type="hidden" value="{{$students}}" name="max">

                                            </div>

                                        </div>
                                        <div class="md-5" id="oooo">
                                            <br>

                                            <label for="maxstd" class="form-label"> Max students in each group :</label>
                                            <input type="number"  class="form-control-sm" name="maxstd">
                                        </div>
                                        <div class="md-5" id="pppp" style="display: none">
                                            <br>
                                            How many Groups you need :
                                            <input type="radio" class="btn-check"value="2" name="maxgrp" id="option2" autocomplete="off">
                                            <label class="btn btn-warning"  for="option2">2</label>
                                            <input type="radio" class="btn-check"value="3" name="maxgrp" id="option3" autocomplete="off">
                                            <label class="btn btn-warning"  for="option3">3</label>
                                            <input type="radio" class="btn-check"value="4" name="maxgrp" id="option4" autocomplete="off">
                                            <label class="btn btn-warning"  for="option4">4</label>
                                            <input type="radio" class="btn-check"value="5" name="maxgrp" id="option5" autocomplete="off">
                                            <label class="btn btn-warning"  for="option5">5</label>
                                            <input type="radio" class="btn-check"value="6" name="maxgrp" id="option6" autocomplete="off">
                                            <label class="btn btn-warning"  for="option6">6</label>
                                            <input type="radio" class="btn-check"value="7" name="maxgrp" id="option7" autocomplete="off">
                                            <label class="btn btn-warning"  for="option7">7</label>
                                            <input type="radio" class="btn-check"value="8" name="maxgrp" id="option8" autocomplete="off">
                                            <label class="btn btn-warning"  for="option8">8</label>
                                            <input type="radio" class="btn-check"value="9" name="maxgrp" id="option9" autocomplete="off">
                                            <label class="btn btn-warning"  for="option9">9</label>
                                            <input type="radio" class="btn-check"value="10" name="maxgrp" id="option10" autocomplete="off">
                                            <label class="btn btn-warning"  for="option10">10</label>





                                        </div>


                                        <div class="md-5">
                                            <input type="submit" class="btn btn-warning" value="Regroup">

                                        </div>




                                    </form>
                                    <br><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>



                  <div class="modal" id="mymodal">
                      <div class="modal-dialog" >
                          <div class="modal-content" style="width: 800px;">
                              <div class="modal-header" id="adstrr">
                                  <h5 class="modal-title">Add Student</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                              <div class="modal-body">



                                      <form action="/DiDo/public/Students" method="POST" style="float: left" id="textform">
@csrf

                                          <div class="mb-1">
                                              <label class="form-label" for="name">Student Name :</label>
                                              <input required type="text" name="name" class="form-control" >
                                          </div>
                                          <div class="md-2">
                                              <div class="row">
                                                  <label class="form-label" for="password">Password :</label>
                                                  <input required type="text" id="pass"  name="password" class="form-control">
                                                  <button type="button" class="btn btn-secondary" onclick=" getElementById('pass').value =Math.random().toString(36).substring(2, 10) ;">Random</button>
                                              </div>
                                              <br>
                                          </div>
                                          <div class="md-5">
                                              <label for="gpa">GPA :</label>
                                              <input required type="number" name="gpa" class="form-control">
                                          </div>
                                          <input type="hidden" name="Group" value="A">
                                          <br>


                                          <div class="md-5">
                                              <div class="form-control">
                                                  <label><input required type="radio" value="Male" name="gender" checked>&nbsp;Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  <label><input required type="radio" value="Female" name="gender" >&nbsp;Female</label>
                                              </div>
                                          </div>
                                          <br>
                                          <button type="submit" class="btn btn-primary">Save</button>



                                      </form>
                                  <style>
                                      .vl {
                                          border-left: 2px dotted black;
                                          height: 300px;
                                          margin-left: 450px;
                                      }
                                  </style>


                                  <br><br>




                                  <div class="vl">
                                      <br><br><br><br>
                                      <form action="/DiDo/public/Studentsfile" method="POST" id="fileform" enctype="multipart/form-data">
                                          @csrf
                                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Or Choose Exel File ...</p>

                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="efile" required >
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Add File" class="btn btn-primary">


                                      </form>
                                  </div>


                              </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                            </div>

                          </div>


                      </div>

                  </div>



                </div>
                <div class="row">


                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                There are {{$students}} Students
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart" width="100%" height="40">



                                    <var id="var1">{{$students}}</var>
                                    <br>
                                    <var id="var2">{{count($groups)}}</var>
                                    @foreach($groups as $k => $c)
                                        {{"Group ".$k." = ".$c}}
                                        <var id="{{$k}}">{{$c}}</var>

                                    @endforeach




                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Students
                    </div>
                    <div class="card-columns">


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Group</th>
                                <th>GPA</th>
                                <th>Gender</th>

                            </tr>
                            </thead>

                            <tbody class="table-active">
                            @foreach(\App\Student::all() as $student)
                                <tr>

                                    <td>{{$student->name}}</td>
                                    <td>{{$student->Group}}</td>
                                    <td>{{$student->gpa}}</td>
                                    <td>{{$student->gender}}</td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>


                    </div>
                    <br>
                    <br>
                    <br>




                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script type="text/javascript">

    var max_group=document.getElementById('oooo');
    var max_student=document.getElementById('pppp');


    function mama()
    {
        max_group.style.display='block';
        max_student.style.display='none';
    }
    function grp()
    {
        max_group.style.display='none';
        max_student.style.display='block';

    }

</script>




</body>
</html>
