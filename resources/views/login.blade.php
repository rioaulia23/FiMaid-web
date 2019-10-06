<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FiMaid | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Fi</b>Maid</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
      
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" onclick="login()" class="btn btn-primary btn-block btn-flat">Sign In</button>
          <a href="https://drive.google.com/open?id=1MhRvWKhmS91JJbtLS3e5_QuoTTwmn8Nc"><p class="login-box-msg">click here to get FiMaid.apk</p></a>

        </div>
        <!-- /.col -->
      </div>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('assets/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
        // Initialize Firebase
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
            $( document ).ready(function() {
                $('#loading').hide();
            });

            function login(){
                var userEmail = $('#email').val();
                var userPass = $('#password').val();
                // alert(userEmail+" "+userPass)
                if (userEmail == "" && userPass == "") {
                    alert('Email dan Password harus di isi!!')
                }else if(userEmail == ""){
                    alert('Email harus di isi!!')
                }else if (userPass == "") {
                    alert('Password harus di isi!!')
                }else{

                firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    window.alert("Error : " + errorMessage);
                    
                });
                firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    var user = firebase.auth().currentUser;
                    firebase.database().ref('/user/' + user.uid).once('value').then(function(snapshot) {
                        console.log(snapshot.val());
                    var Nama = (snapshot.val() && snapshot.val().nama) || 'Anonymous';
                    var Foto = (snapshot.val() && snapshot.val().foto) || 'Anonymous';
                    var Email = (snapshot.val() && snapshot.val().email) || 'Anonymous';
                    var Role = (snapshot.val() && snapshot.val().role) || 'Anonymous';
                    if (Role == "admin") {
                        $.ajax({
                            type: "post",
                            url: "{{url('loginPost')}}",
                            data: {
                                _token: "{{csrf_token()}}",
                                userid: user.uid,
                                nama: Nama,
                                foto: Foto,
                                email: Email,
                                role: Role
                            },
                            success: function (data) {
                                // console.log(data);
                                if(data == 1){
                                    alert("Berhasil Login");
                                    window.location.href = "{{url('/')}}";
                                }else{
                                    alert("error");
                                }
                            }
                        });
                    }else{

                    }
                    });
                }
                });
            }
            }
    </script>
</body>
</html>
