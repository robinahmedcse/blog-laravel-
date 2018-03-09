<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Admin Login| Blog </title>

        <!-- Bootstrap -->
        <link href="{{asset('public/assetBackEnd/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('public/assetBackEnd/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('public/assetBackEnd/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('public/assetBackEnd/')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('public/assetBackEnd/')}}/build/css/custom.min.css" rel="stylesheet">
    </head>

   
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
            
          <section class="login_content">
             {!! Form::open(['url' => 'admin-sign-in-check','method' => 'POST' ]) !!}
                    {{ csrf_field() }}
                    
              <h1>Login Form</h1>
              <h3>
                <div class="">
                    <h4 class="tex text-center text-danger">{{Session::get('exception')}}</h4>
                </div> 
                  <div class="">
                    <h4 class="tex text-center text-success">{{Session::get('massage')}}</h4>
                </div>
                  <?php   Session::put('exception',Null);?>
                  
             
            </h3>
              <div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="adminEmail" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="AdminPassword" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                  
                   <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
              </div>

              <div class="clearfix"></div>
            {!! Form::close()   !!}
              <div class="separator">
               
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> EMS</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
