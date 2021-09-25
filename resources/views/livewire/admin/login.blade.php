<div>
    <!DOCTYPE html>
    <html>
    
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Halaman Login></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.cs') }}s">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <br><br>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
    
            <div class="col-md-4 mx-auto">
              <!-- general form elements -->
              <div class="login-logo">
                <img src="{{ asset('template/images/logo_yayasan.png')}}" style="width: 300px; height:150px;">
              </div>
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">FORM LOGIN</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
    
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="submit">
    
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="email" wire:model="email" placeholder="Enter email" autocomplete="off" value="">
                      @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password" wire:model="password" placeholder="Password">
                      @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Masuk</button>
                  </div>
                  <!-- /.card-body -->
                </form>
                <div class="text-center">
                  <a href="">Lupa Password ?</a>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
</div>
