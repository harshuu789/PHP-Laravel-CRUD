<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <!--header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/showLoan') }}">Request Loan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/showLoan') }}">Loan</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <!--header section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
      <div class="container-fluid">
        <h1 class="what_taital">Request for Loan</h1>
        <p class="amet_text"> </p>
        <div class="contact_section2">
          <div class="row">
            <div class="col-md-10 padding_left_0">
              <div class="mail_section">
                <form  id="loanForm">
                  @csrf
                <input type="text" class="mail_text_1" placeholder="Name" name="name">
                <input type="email" class="mail_text_1" placeholder="Email " name="email">
                <input type="number" class="mail_text_1" placeholder="Enter Loan Amount" name="amount">
                <p id="message"></p>
                <button type="submit" class="send_bt" ><a>Submit</a></button>
               </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->
    <!--footer section start -->
    
    <!--footer section end -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- javascript --> 
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
    <script>
      $(document).ready(function() {
          $('#loanForm').on('submit', function(e) {
              e.preventDefault(); // Prevent the default form submission
              let formData = $(this).serialize(); // Serialize form data
  
              $.ajax({
                  url: "{{ route('loanForm') }}",
                  type: "POST",
                  data: formData,
                  success: function(response) {
                      $('#message').text('Form submitted successfully!').css('color', 'green');
                      $('#loanForm')[0].reset(); // Reset form fields
                  },
                  error: function(response) {
                      $('#message').text('There was an error submitting the form.').css('color', 'red');
                  }
              });
          });
      });
  </script>
</body>
</html>