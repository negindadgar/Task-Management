
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Forgot-Password</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <!-- Favicons -->
   <link href="/img/favicon.png" rel="icon">
   <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

   <link href="{{url('/css/app.css')}}" rel="stylesheet">

   <link href="{{url('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


   <!-- =======================================================
     Theme Name: Rapid
     Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
     Author: BootstrapMade.com
     License: https://bootstrapmade.com/license/
   ======================================================= -->
 </head>

 <body  id="intro">

    <section  class="clearfix">
<nav aria-label="breadcrumb">



</nav>



 <div class="container"   class="d-flex justify-content-center">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <div class="card">
                 <div class="card-header">{{ __('Forgot your password?') }}</div>

                 <div class="card-body">
                     <form method="POST" action="{{route('password.email')}}">
                         @csrf

                         <div class="form-group row">
                              <div class="col-md-12">
                             <label for="email">E-Mail Address</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                 @error('email')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>



                         <div class="form-group row">
                             <div class="col-md-6" style="text-align: center;margin: 0 auto;">
                                 <div class="form-check">
                                 </div>
                             </div>
                         </div>

                         <div class="form-group row mb-0">
                             <div class="col-md-8" style="text-align: center;margin: 0 auto;">
                                 <button type="submit" class="btn btn-success" style="width: 100%;border-radius: 35px;">
                                     {{ __('Email Password Reset Link') }}
                                 </button>


                             </div>
                         </div>

                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
   </section><!-- #intro -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
   <script src="{{url('/js/app.js')}}"></script>

</body>
</html>