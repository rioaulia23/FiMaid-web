<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FiMaid || Web
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL('assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{URL('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Fi</b>MAID</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a onclick="logout(0)" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="{{URL('assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Logout</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      
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
          <img src="{{$foto}}" style="width:50px;height:50px;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$nama}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{$role}}</a>
        </div>
      </div>
      <!-- search form -->
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Verification
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-md-12">
    <div class="card card-default">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <strong>All Order Listing</strong>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="table_data" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Picture</th>
                        <th width="250px" class="text-center">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Delete Model -->
<form action="" method="POST" class="users-remove-record-model">
    <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
                        data-dismiss="modal">Close</button>
                    <button type="button"
                        class="btn btn-danger waves-effect waves-light deleteMatchRecord">Reject</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Update Model -->
<form action="" method="POST" class="users-update-record-model form-horizontal">
    <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Update Record</h4>
                    <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="updateBody">
                    <h4>Are you sure want to approve this order?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success waves-effect waves-light updateUserRecord">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdons Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.bootstrap.min.js')}}"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
  // Your web app's Firebase configuration
  function openImage(url){
    Swal.fire({
    title: 'Zoom Image!',
    imageUrl: url,
    imageWidth: 600,
    imageHeight: 300,
    animation: false
  })
  }
  var firebaseConfig = {
    apiKey: "AIzaSyBL0K2guX0Ezw49bc5o5E28eb81ZgOR0vo",
    authDomain: "tugasakhir-1e056.firebaseapp.com",
    databaseURL: "https://tugasakhir-1e056.firebaseio.com",
    projectId: "tugasakhir-1e056",
    storageBucket: "tugasakhir-1e056.appspot.com",
    messagingSenderId: "988086244761",
    appId: "1:988086244761:web:f8ae72037d71906802ef08",
    // measurementId: "G-PXPYTPPNTH"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // firebase.analytics();

  $(function () {
    var obj = [];
    var obj2 = [];
    var no = 0;
    firebase.database().ref('/user').orderByChild('verified').equalTo("Sedang di proses").on('value', function(snapshot) {    
      var order = snapshot.val();
        
    obj = [];
    no++;
    $.each(order, function(index ,order){
        if(order) {
            obj2 = [no++,order.name,order.age,order.alamat,order.verified,'<img id="myImg" height="125" width="125" src='+ order.verification +' onclick=\'openImage("'+order.verification+'")\'></img>','<a data-toggle="modal" data-target="#update-modal" class="btn btn-success updateData" data-id="'+index+'">Approve</a>\
        		<a data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="'+index+'">Reject</a>'];
            obj.push(obj2);
            }       
        });
    addTable(obj);
    function addTable(data){
    $('#table_data').DataTable().clear().draw();
    $('#table_data').DataTable().rows.add(data).draw();
    }
});
});

// var modal = document.getElementById("myModal");
// var img = document.getElementById("myImg");
// alert(img)
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

var database = firebase.database();

var database = firebase.database();
var lastIndex = 0;

// Update Data
var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('user/'+updateID).update({
                verified: "Verified",
            });
});
var rejectID = 0;
$('body').on('click', '.removeData', function() {
	rejectID = $(this).attr('data-id');
	firebase.database().ref('user/'+rejectID).update({
                verified: "Not Verified",
            });
});
$('.updateUserRecord').on('click', function() {
    firebase.database().ref('user/' +updateID).on('value', function(snapshot) {
    var data = snapshot.val();
	var postData = {
        orderid:data.orderid,
        endTime:data.endTime,
        startTime:data.startTime,
        image:data.image,
        phone:data.phone,
        userid:data.userid,
        note:data.note,
        name:data.name,
        time:data.time,
        status:"In Proccess"
    };
    
	var updates = {};
	updates['user/' + updateID] = postData;
	firebase.database().ref().update(updates);
	$("#update-modal").modal('hide');
});
});

function logout($id) {
  // alert('afs')
            firebase.auth().signOut();
                $.ajax({
                    type: "get",
                    url: "{{ url('logout') }}",
                    data: {
                        _token: "{{csrf_token()}}",
                        id_logout: $id
                    },
                    success: function (data) {
                        if(data == 1){
                    //       alert('logout Berhasil')
						        // window.location.href = "{{url('/home')}}";
                        }else{
                            alert("error");
                        }
                    }
                });
                alert('logout Berhasil')
                location.reload();
	    }
</script>
</body>
</html>
