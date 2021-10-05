 <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="index.php")
            {
             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherSuivis.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherSuivis.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Suivis</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherQuestions.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherQuestions.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Questions</p>
            </a>
          </li>
            <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherCategories.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherCategories.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Categories</p>
            </a>
          </li>
          <?php 
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
            if($curPageName=="AfficherForums.php")
            {

             ?>
            <li class="active ">
            <?php  
            }
            else
            {
              ?>
              <li>    
              <?php
            }
            ?>
            <a href="AfficherForums.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Gestion Forums</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>