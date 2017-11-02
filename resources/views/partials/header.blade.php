<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome to the World of Delicious Coffee!</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-coffee" aria-hidden="true"></i> My Orders</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true"></i> Account Management <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user.signup') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</a></li>
                        <li><a href="{{ route('user.signin') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('user.logout') }}">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>