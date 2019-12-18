<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0 p-right-20" href="<?php echo base_url('users'); ?>">Student's Panel</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user_exams'); ?>">Manage exams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('users/stud_view_users'); ?>">Classmates</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url('exams'); ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url('users/change_password'); ?>">Change Password</a>
              <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Logout</a>
            </div>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
