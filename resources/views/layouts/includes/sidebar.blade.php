<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">

        @php
            if (Auth::check()) {
            $userName = Auth::user()->name;
    } else {
            $userName = 'Guest';
    }
        @endphp

        <a class="sidebar-brand"  href="" style="text-align: center">
            <span class="align-middle">Hello <e style="color: #1ab7ea">{{$userName}}</e> !!</span>
        </a>

        <ul class="sidebar-nav">


{{--            <li class="sidebar-item @if($activePage == 'dashboard') active @endif start-loading">--}}
{{--                <a class="nav-link sidebar-link" href="#">--}}
{{--                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Dashboard</span>--}}
{{--                </a>--}}
{{--            </li>--}}


            <li class="nav-item sidebar-item  @if($activePage == 'client-logo') active @endif start-loading">
                <a class="nav-link sidebar-link" href="">
                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Clients Logos</span>
                </a>
            </li>
            <li class="nav-item sidebar-item  @if($activePage == 'category') active @endif start-loading">
                <a class="nav-link sidebar-link" href="">
                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Category</span>
                </a>
            </li>
            <li class="nav-item sidebar-item  @if($activePage == 'subcategory') active @endif start-loading">
                <a class="nav-link sidebar-link" href="">
                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Sub-category</span>
                </a>
            </li>
            <li class="nav-item sidebar-item  @if($activePage == 'product') active @endif start-loading">
                <a class="nav-link sidebar-link" href="">
                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Product</span>
                </a>
            </li>
            <li class="nav-item sidebar-item  @if($activePage == 'quotation') active @endif start-loading">
                <a class="nav-link sidebar-link" href="">
                    <i class="bi bi-arrow-right"></i> <span class="align-middle">Quotation</span>
                </a>
            </li>
        </ul>

    </div>
</nav>


