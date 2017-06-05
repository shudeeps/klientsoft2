<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      

      @if(Auth::guard('admin')->user())
      <a class="navbar-brand" href="{{ url('/admin') }}">KlientSpace</a>
      @else
        <a class="navbar-brand" href="{{ url('/') }}">KlientSpace</a>
      @endif
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    

    @if(Auth::user()||Auth::guard('admin')->user())


     <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('client.index')}}">Client <span class="sr-only">(current)</span></a></li>
      @if(Auth::guard('admin')->check())
       <li><a href="{{route('admin.show_user_list')}}">Users <span class="sr-only">(current)</span></a></li>
       @endif
      </ul>
      <form action="{{ route('client.search') }}" method="GET" class="navbar-form navbar-left">
        <div class="form-group">
    <input type="text" name="s" class="form-control" placeholder="Search client" value="{{isset($s) ? $s : ''       
          }}">
        </div>
        <button type="submit" class="btn btn-default">search </button>
      </form>


      <ul class="nav navbar-nav navbar-right">
                         
        @if(Auth::guard('admin')->user())
        <li><a href="{{ route('admin.register') }}">Register new user</a></li>
        @endif
      
       <a href="#"> <li>@if(Auth::guard('web')->check())
       <strong>User-</strong> 
         @endif
         @if(Auth::guard('admin')->check())
        <strong>Admin-</strong> 
         @endif
       </a>
     </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          @if(Auth::user())
              {{Auth::user()->user_name}}
             @endif   

            @if(Auth::guard('admin')->user())
            {{Auth::guard('admin')->user()->username}}
            @endif
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">
             profile

            </a></li>
            <li role="separator" class="divider"></li>
            <li>
              
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                                        
                </li>
          </ul>
        </li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  @endif
  </div><!-- /.container-fluid -->
</nav>