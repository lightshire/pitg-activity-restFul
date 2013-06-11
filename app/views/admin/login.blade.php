<!DOCTYPE html>
<html lang="en">
    
		<!-- start: Meta -->
	    <meta charset="utf-8">
	    <title>Activity Site | Login</title>
   		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- end: Meta -->

    	<!-- start: CSS -->
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/bootstrap/css/bootstrap-responsive.css">   
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/font-awesome/font-awesome.html">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/fullcalendar/fullcalendar.css">
	    <link rel="stylesheet" type="text/css" href='{{ URL::to('admin') }}/assets/lib/fullcalendar/fullcalendar.print.css' media='print'>
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-fileupload.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/pnotify/jquery.pnotify.default.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/pnotify/jquery.pnotify.default.icons.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/todo/css/base.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/todo/css/app.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/icheckcss.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/masonry.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/wizard.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/bootstrap-wysihtml5.css" >
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/jquery.spellchecker.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/slider.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/style.css">
	    <!-- end: CSS -->

	    <!-- start: JS -->
	    <script src="http://www.html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery-1.9.1.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/bootstrap/js/bootstrap.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/fullcalendar/fullcalendar.min.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/pnotify/jquery.pnotify.min.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-fileupload.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-inputmask.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-typeahead.js"></script>   
	    <script src="{{ URL::to('admin') }}/assets/lib/todo/js/bootstrap.html"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/todo/js/todocharts.html"></script> 
	    <script src="{{ URL::to('admin') }}/assets/lib/justgage/justgage.1.0.1.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/justgage/raphael.2.1.0.min.js"></script> 
	    <script src="{{ URL::to('admin') }}/assets/lib/flot/jquery.flot.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/flot/excanvas.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/flot/jquery.flot.pie.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/flot/jquery.flot.stack.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/responsive-tables.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.sparkline.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/bootstrap-slider.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/icheckdemo.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/charts.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/date.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/daterangepicker.js"></script>   
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.icheck.js"></script>    
	    <script src="{{ URL::to('admin') }}/assets/js/wizard.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/wysihtml5-0.3.0.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/bootstrap-wysihtml5.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/prettyprint.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.spellchecker.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/parsley.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.masonry.min.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/custom.js"></script>
	    <!-- end: JS -->
	    
	    <!-- Le fav and touch icons -->
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('admin') }}//assets/ico/apple-touch-icon-144-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('admin') }}//assets/ico/apple-touch-icon-114-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('admin') }}//assets/ico/apple-touch-icon-72-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" href="{{ URL::to('admin') }}//assets/ico/apple-touch-icon-57-precomposed.html">
	    
	    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
	    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
	    <!--[if IE 8 ]> <body class="ie ie8 "> 
	    <style type="text/css">
	    	.navbar form.search input,.sidebar-nav form.search input,.sidebar-label,.thumb-account{border: none;}
	    	.thumb-account span {width: 2px;}
	    	.sidebar-nav .form-inline { display: none;}
	    </style>
	    <![endif]-->

	    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->

	    <!--[if gte IE 9]>
	     <style type="text/css">.gradient {filter: none;}</style>
	    <![endif]-->

</head><!--end: head -->

<body> 

    <div class="login">

      <div class="wrapper">
        	@if(Session::get('error'))
	      		<div class="alert alert-error">
				  <strong><i class='icon-warning-sign'></i>&nbsp;Error!</strong> The username and password combination have failed. Or you don't
				  have the right authorization to access the admin panel.
				</div>
			@endif
          <div class="block-dark sign-block">

            <h3>Login to your account</h3>

            <hr class="hr-dark">

            <div class="row-fluid">
              <div class="span12 open-id">
                  <a href="index.html" class="modern sign-facebook"><span class="mordern-id">Facebook</span></a>
                  <a href="index.html" class="modern sign-google"><span class="mordern-id">Google +</span></a>
              </div>          
            </div> 

            <hr class="hr-dark">

            <form data-validate="parsley" action="{{ URL::to('login.php') }}" id="sign-form" class="form-dark" method="POST">
              <div class="input-prepend">      
                <span class="add-dark"><i class="icon-user"></i></span>
                <input type="text" name="username" data-required="true" placeholder="Username">
              </div> 
              <div class="input-prepend">      
                <span class="add-dark"><i class="icon-lock"></i></span>
              <input type="password" data-required="true" name="password" placeholder="Password">
              </div>                                
    
              <span id="sign-form-valid" onclick="javascript:$('#sign-form').parsley('validate');">
                <input type="submit" class="btn btn-inverse pull-right" value="Log In">
              </span>        

            </form> 

            <form action="#">
              <div class="remember">      
                <input type="checkbox"><span>Remember me</span>
              </div>               

            </form>


            <div class="clearfix"></div>

            <hr class="hr-dark">    

            <p><a href="password.html">Forgot your password?</a></p> 

            <p class="para-account">Don't have an account yet ?<a href="sign-up.html"> Create an account</a></p>
            
         


          </div>
        
      </div>

    </div>



<script>
        $(document).ready(function(){
        $('input').iCheck({
          checkboxClass: 'icheckbox_polaris',
          radioClass: 'iradio_polaris',
          increaseArea: '-10' // optional
        });
      });
</script>
 	


</body>
</html>

