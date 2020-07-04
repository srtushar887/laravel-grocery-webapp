<div class="col-md-4">
    <div class="card account-left">
        <div class="user-profile-header">
            @if (!empty(Auth::user()->photo))
                <img alt="logo" src="{{asset(Auth::user()->photo)}}">
            @else
                <img alt="logo" src="https://ih1.redbubble.net/image.1046392292.3346/st,small,845x845-pad,1000x1000,f8f8f8.jpg">
            @endif

            <h5 class="mb-1 text-secondary"><strong>Hi </strong> {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
            <p> {{Auth::user()->email}}</p>
        </div>
        <div class="list-group">
            <a href="{{route('home')}}" class="list-group-item list-group-item-action active"><i aria-hidden="true" class="mdi mdi-account-outline"></i>  My Profile</a>
            <a href="{{route('user.order.history')}}" class="list-group-item list-group-item-action"><i aria-hidden="true" class="mdi mdi-format-list-bulleted"></i>  Order List</a>
            <a href="{{route('user.change.pass')}}" class="list-group-item list-group-item-action"><i aria-hidden="true" class="mdi mdi-map-marker-circle"></i>  Change Password</a>
            <a  class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i aria-hidden="true" class="mdi mdi-lock"></i>  Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
