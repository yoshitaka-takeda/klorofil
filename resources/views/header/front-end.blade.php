<header>
    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">
            <div class="mbr-table">
                <div class="mbr-table-cell">
                    <a class="navbar-caption" href="#"> Klorofil </a>
                </div>
                <div class="mbr-table-cell">
                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navBarMenu">
                        <div class="hamburger-icon"></div>
                    </button>
                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="navBarMenu">
                        <li class="nav-item"><a class="nav-link link mbr-editable-menu-item" href="#">Menu 1</a></li>
                        <li class="nav-item"><a class="nav-link link mbr-editable-menu-item" href="#">Menu 2</a></li>
                        <li class="nav-item"><a class="nav-link link mbr-editable-menu-item" href="#">Menu 3</a></li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

@section('script')
<script type="text/javascript" src="{{URL::to('front-end/tether/tether.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('front-end/jarallax/jarallax.js')}}"></script>
<script type="text/javascript" src="{{URL::to('front-end/script.js')}}"></script>
@endsection