      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group"></div>
          </form>
          <!-- /.sear ch form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <?php
                    if($_SESSION["currPage"]==1)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="index.php">
                        <i class="fa fa-files-o"></i> <span>Aim</span>

                    </a>
                </li>
                <?php
                    if($_SESSION["currPage"]==2)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="theory.php">
                        <i class="fa fa-files-o"></i>
                        <span>Theory</span>
                    </a>
                </li>
                <?php
                    if($_SESSION["currPage"]==3)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="pretest.php">
                        <i class="fa fa-files-o"></i> <span>Pre Test</span>

                    </a>
                </li>

                <?php
                    if($_SESSION["currPage"]==4)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="procedure.php">
                        <i class="fa fa-files-o"></i> <span>Procedure</span>
                    </a>
                </li>
                <?php
                    if($_SESSION["currPage"]==5)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="simulation.php">
                        <i class="fa fa-laptop"></i>
                        <span>Simulation</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <!--
                <?php
                    /*if($_SESSION["currPage"]==6)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';*/
                ?>
                    <a href="result.php">
                        <i class="fa fa-laptop"></i>
                        <span>Result</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>-->

                <?php
                    if($_SESSION["currPage"]==7)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="posttest.php">
                        <i class="fa fa-files-o"></i>
                        <span>Post Test</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <?php
                    if($_SESSION["currPage"]==8)
                        echo '<li class="active treeview">';
                    else
                        echo '<li class="treeview">';
                ?>
                    <a href="references.php">
                        <i class="fa fa-files-o"></i>
                        <span>References</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
