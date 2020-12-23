
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Work Report Management</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">




<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- properties-->
<link href="{{asset('/properties/front properties')}}/css/front.css" rel="stylesheet" id="bootstrap-css">

<!-- <link href="{{asset('/properties/front properties')}}/css/mobile.css" media="only screen and (min-width: 1140px)" rel="stylesheet" > -->

<script src="{{asset('/properties/front properties')}}/js/front.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

	<div id="login-box" >
		<div class="logo">
			<img src="{{asset('/properties/front properties')}}/image/work.jpg" class="img img-responsive img-circle center-block"/>
			<h1 class="logo-caption"><span class="tweak">W</span>ork  <span class="tweak">R</span>eport <span class="tweak">M</span>anagement</h1>
		</div><!-- /.logo -->
		<div class="controls">
			<!-- <input type="text" name="username" placeholder="Username" class="form-control" />
			<input type="text" name="username" placeholder="Password" class="form-control" /> -->
			<a href="{{ route('user-login') }}"><button type="button" class="btn btn-default btn-block btn-custom">Login</button></a>
			<a href="{{ route('user-register') }}"><button type="button" class="btn btn-default btn-block btn-custom2">Register</button></a>
			<!-- <button type="button" class="btn btn-default btn-block btn-custom2">Register</button> -->
		</div><!-- /.controls -->
	</div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->