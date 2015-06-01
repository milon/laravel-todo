<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ToDo App</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(\Auth::guest())
                    <li><a href="{{ url('/user/create') }}">Register</a></li>
                    <li><a href="{{ url('/login') }}">Sign In</a></li>
                @else
                    <li><a href="#">Welcome, {{ \Auth::user()->name }}</a></li>
                    <li><a href="{{ route('user.edit', \Auth::user()->id) }}">Profile</a></li>
                    <li><a href="{{ url('/logout') }}">Sign Out</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>