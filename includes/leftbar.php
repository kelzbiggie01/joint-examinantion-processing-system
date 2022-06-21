<div class="left-sidebar bg-black-300 box-shadow ">
    <div class="sidebar-content">
        <div class="user-info closed">
            <img src="images/user.png" alt="Profile Pic" width="100" height="100" class="img-circle profile-img">
            <h6 class="title"><?php echo $_SESSION['alogin']; ?></h6>
            <small class="info">Administrator</small>
        </div>
        <!-- /.user-info -->

        <div class="sidebar-nav">
            <ul class="side-nav color-gray">
                <li class="nav-header">
                    <span class="">Main Category</span>
                </li>
                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>

                </li>

                                   <!--  <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li> -->
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>School</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-school.php"><i class="fa fa-bars"></i> <span>Add School</span></a></li>
                                            <li><a href="view-school.php"><i class="fa fa fa-server"></i> <span>view school</span></a></li>
                                           
                                        </ul>
                                    </li>
  <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Users</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-users.php"><i class="fa fa-bars"></i> <span>Add User</span></a></li>
                                            <li><a href="view-users.php"><i class="fa fa fa-server"></i> <span>View User</span></a></li>
                                           <!-- <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Add Subject Combination </span></a></li>
                                           <a href="manage-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Manage Subject Combination </span></a></li> -->
                                        </ul>
                                    </li>
   <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-student.php"><i class="fa fa-bars"></i> <span>Add Students</span></a></li>
                                            <li><a href="view-student.php"><i class="fa fa fa-server"></i> <span>View Students</span></a></li>
                                           
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Subject</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-subject.php"><i class="fa fa-bars"></i> <span>Add Subject</span></a></li>
                                            <li><a href="view-subject.php"><i class="fa fa fa-server"></i> <span>View Subject</span></a></li>
                                           
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Define Grade</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="#"><i class="fa fa-bars"></i> <span>Add Grade</span></a></li>
                                            <li><a href="#"><i class="fa fa fa-server"></i> <span>View Grade defined</span></a></li>
                                           
                                        </ul>
                                    </li>

                                      <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Score</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-score.php"><i class="fa fa-bars"></i> <span>Add Score</span></a></li>
                                            <li><a href="view-score.php"><i class="fa fa fa-server"></i> <span>View Score</span></a></li>
                                           
                                        </ul>
                                    </li>
<li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Result Analysis</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Overall Best-ten</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Overall ten-looser</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Subject Performance</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>School Performance</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Mkeka</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Division performance</span></a></li>

                                           
                                        </ul>        </li>


<!-- <li class="has-children">
                                        <a href="#"><i class="fa fa-bell"></i> <span>Notices</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-notice.php"><i class="fa fa-bars"></i> <span>Add Notice</span></a></li>
                                            <li><a href="manage-notices.php"><i class="fa fa fa-server"></i> <span>Manage Notices</span></a></li>
                                           
                                        </ul>        </li> -->



                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li>
                                           
                            
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>