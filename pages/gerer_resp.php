<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Les catégories</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../plugins/iCheck/minimal/blue.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/parametre.css">
     <link href="../assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
          <?php

          include '../php/connexion.php'; 

          $reqresp = $bdd->prepare("SELECT * FROM categorie");
          $reqresp->execute();
        
          ?>

 
     <?php include '../php/profil.php'; ?>
    <div class="wrapper">
      
<header class="main-header">
        <a href="#" class="logo"><b><?= $showprofil['username_admin']; ?></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
               
              </li>
           
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
              
              </li>
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                
              </li>
            
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/admin/<?= $showprofil['image_admin']; ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?= $showprofil['username_admin']; ?></span>
                </a>
             
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/admin/<?= $showprofil['image_admin']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $showprofil['username_admin']; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
          </div>
      
        
          <ul class="sidebar-menu">
          

            <li class="treeview">
              <a href="accueil.php">
                <i class="fa fa-home"></i> <span>Accueil</span>
              </a>
              
            </li>

            <li class="active treeview">
            <a href="#">
              <i class="glyphicon glyphicon-folder-close"></i>
              <span>Gestion des catégories</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="ad_responsable.php"><i class="fa fa-user"></i>Ajouter un catégorie</a></li>
              <li><a href="gerer_resp.php"><i class="fa fa-group"></i>Gérer les catégories</a></li>
            </ul>
          </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i>
                <span>Gestion des livres</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_event.php"><i class="fa fa-globe"></i>Ajouter un livre</a></li>
                <li><a href="gerer_event.php"><i class= "fa fa-star"></i>Gérer les livres</a></li>
              </ul>
            </li>
             
            
           <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Paramètres</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="p_general.php"><i class="glyphicon glyphicon-wrench"></i> General</a></li>
                <li><a href="../php/logout.php"><i class="glyphicon glyphicon-log-out"></i> Deconnexion</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      
      <div class="content-wrapper">
   
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><b>Gérer les responsables</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">

                      <thead>
                      <tr>
                        <th>Noms</th>
                        <th>Option</th>
                     
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($afresp = $reqresp->fetch()){ ?>
                      <tr>
                        <td><?= $afresp['type']; ?></td>
                        <td><div style="margin-top: 16px;"><a class="btn btn-block btn-danger" href="../php/del_resp.php?id=<?= $afresp['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a><br>
                          <a class="btn btn-block btn-primary" href="edit_resp.php?id=<?= $afresp['id']; ?>"><i class="fa fa-edit"></i></a></div></td>
                      </tr>

                      <?php } ?>
                    </tbody>

                
                  </table>

                
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
      <script src="../assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="../assets/js/bootstrap-fileupload.js"></script>
 
  </body>
</html>
