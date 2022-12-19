<header class="header">

    <div class="header-wrap">

        <div class="logo plain logo-left">
            <div class="site-title">
                <a href="index.html" title="Go to Home">Ahsan Ali Rehmani</a>
            </div>
        </div><!-- /logo -->


        <nav id="nav" role="navigation">
            <div class="table">
                <div class="table-cell">
                    <ul id="menu-menu-1">
                        <li class="menu-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('blogs') }}">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{ route('blogs.show') }}">Single</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="menu-inline menu-item">
                            <a title="Linkedin" href="http://twitter.com/fh5co">
                                <i class="fa fa-linkedin"></i><span class="i">Twitter</span>
                            </a>
                        </li>
                        {{-- <li class="menu-inline menu-item">
                            <a title="Facebook" href="http://www.facebook.com/fh5co">
                                <i class="fa fa-facebook"></i><span class="i">Facebook</span>
                            </a>
                        </li>
                        <li class="menu-inline menu-item">
                            <a title="Flickr" href="#"><i class="fa fa-flickr"></i><span
                                    class="i">Flickr</span></a>
                        </li> --}}
                        <li class="menu-inline menu-item">
                            <a title="Instagram" href="#">
                                <i class="fa fa-instagram"></i><span class="i">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <a href="#nav" class="menu-trigger"><i class="fa fa-bars"></i></a>

        <a href="#topsearch" class="search-trigger"><i class="fa fa-search"></i></a>

    </div>

</header>
