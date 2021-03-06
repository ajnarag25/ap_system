<?php include 'connection.php';?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>ALUMNI PLACEMENT SYSTEM - Forms</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <div class="navbar-brand">
                        <a href="index.php" class="logo">
                            <b class="logo-icon">
                                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            </b>
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/QCU_Logo_2019.png" alt="user" class="rounded-circle" width="40">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="logout.php"><i class="ti-shift-right me-1 ms-1"></i>
                                    Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="main.php"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="job.php"
                                aria-expanded="false">
                                <i class="mdi mdi-book"></i>
                                <span class="hide-menu">Jobs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="forms.php"
                                aria-expanded="false">
                                <i class="mdi mdi-note-multiple"></i>
                                <span class="hide-menu">Forms</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="concerns.php"
                                aria-expanded="false">
                                <i class="mdi mdi-message"></i>
                                <span class="hide-menu">Concerns</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="users.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                       
                    </ul>
                </nav>
            
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Form Submitted</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Forms</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <div class="container-fluid">
                                <div class="card-body overflow-auto" >
                                    <table class="table table-hover ">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fullname</th>
                                            <th scope="col">Student no.</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Career</th>
                                            <th scope="col">Field</th>
                                            <th scope="col">Job</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Send Verification</th>
                                            <th scope="col">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $query = "SELECT * FROM tbl_forms ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                            $name = $row['lastname'].' '. $row['firstname'].' '. $row['middlename'];
                                        ?>

                                          <tr>
                                            <th><?php echo $row['id']; ?></th>
                                            <td><?php echo $row['lastname'].' '. $row['firstname'].' '. $row['middlename']; ?></td>
                                            <td><?php echo $row['student_no']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['batch']; ?></td>
                                            <td><?php echo $row['career']; ?></td>
                                            <td><?php echo $row['field']; ?></td>
                                            <td><?php echo $row['job']; ?></td>
                                            <td><a  target="_blank" href="functions.php?file=<?php echo $row['resume']; ?>" ><?php echo $row['resume'] ?></a></td>
                                            <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" style="color:white"  data-bs-target="#sendEmail<?php echo $row['id']?>"> <i class="mdi mdi-message"></i></button>
                                                <button class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#editModal<?php echo $row['id']?>"> <i class="mdi mdi-pencil"></i></button>
                                                <button class="btn btn-danger" style="color:white" data-bs-toggle="modal"  data-bs-target="#deleteModal<?php echo $row['id'] ?>"> <i class="mdi mdi-delete"></i></button>
                                            </td>
                                            <td><button class="btn btn-success" style="color:white" data-bs-toggle="modal"  data-bs-target="#composeModal<?php echo $row['id']?>">Compose</button></td>
                                            <td><?php echo $row['status']; ?></td>
                                          </tr>

                                         <!-- Send email -->
                                         <div class="modal fade" id="sendEmail<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Send Email for User: <?php echo $row['firstname'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="functions.php" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input class="form-check-input" type="hidden" name="name" value="<?php echo $name ?>">
                                                    <h5>File:</h5>
                                                    <input type="text" class="form-control" value="<?php echo $row['resume']; ?>" name="files" readonly>
                                                    <br>
                                                    <h5>Email</h5>
                                                    <input type="text" class="form-control" placeholder="Enter Email" name="emails">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" name="sendEmail" style="color:white">Send</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- Compose Message and Send Verification Status -->
                                         <div class="modal fade" id="composeModal<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Compose Message and Send Verification <br> Status for User: <?php echo $row['firstname'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="functions.php" method="POST">
                                                <div class="modal-body">
                                                <h5>Verify this user?</h5>
                                                    <input class="form-check-input" type="hidden" name="student_no" value="<?php echo $row['student_no']?>">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radios" value="YES" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radios" value="NO" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <h5>Compose Message:</h5>
                                                    <textarea class="form-control" name="msgs" cols="30" rows="5" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" name="sendVerify" style="color:white" name="">Send</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>

                                           <!-- Modal Edit -->
                                         <div class="modal fade" id="editModal<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Details for User: <?php echo $row['firstname'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="functions.php" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                    <label for="">Firstname</label>
                                                    <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname'] ?>">
                                                    <label for="">Middlename</label>
                                                    <input type="text" class="form-control" name="mname" value="<?php echo $row['middlename'] ?>">
                                                    <label for="">Lastname</label>
                                                    <input type="text" class="form-control" name="lname" value="<?php echo $row['lastname'] ?>">
                                                    <label for="">Address</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
                                                    <label for="">Student Number</label>
                                                    <input type="text" class="form-control" name="sno" value="<?php echo $row['student_no'] ?>">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="mail" value="<?php echo $row['email'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="updateForm">Save changes</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- Modal Delete-->
                                        <div class="modal fade" id="deleteModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <form action="functions.php" method="POST">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete User <?php echo $row['firstname'] ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <h4>Are you sure you want to delete this user?</h4>
                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                                                        <input type="hidden" class="form-control" name="student" value="<?php echo $row['student_no'] ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger" name="del" style="color:white" href="">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        </tbody>
                                        <?php }; ?>

                                      </table>
                                      <br>
                                      <?php 
                                        $sql = "SELECT * FROM tbl_forms ";
                                        $result=mysqli_query($conn, $sql);
                                        $row = mysqli_num_rows($result);
                                    ?>
                                    <p>Showing <?php echo $row; ?> entries </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          

            <footer class="footer text-center">
                ALUMNI PLACEMENT SYSTEM
            </footer>
        </div>
    </div>
    
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
</body>

</html>