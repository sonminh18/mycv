<header id="header" class="bg-primary">

    <!-- Top Bar -->
    <div id="top-bar">
        <div class="container">
            <nav class="menu module left">
            </nav>
            <nav class="language menu module right hidden-xs">
                @if($Setting=='en')
                    <span>Language version:</span>
                @else
                    <span>Ngôn Ngữ:</span>
                @endif

                @foreach($language as $value)
                    @if($Setting == $value->vLink)
                        <a href="#" class="active" onclick="setLanguage('{{$value->vLink}}');">{{$value->vLanguage}}</a>
                    @else
                        <a href="#" onclick="setLanguage('{{$value->vLink}}');">{{$value->vLanguage}}</a>
                    @endif
                @endforeach
            </nav>
        </div>
    </div>

    <!-- Navigation Bar -->
    <div id="nav-bar" class="container">
        <nav>
            <ul id="nav-primary" class="nav nav-primary">
                <li class="icon-link"><a href="#home"><i class="fa fa-home"></i></a></li>
                @foreach($menu as $menu)
                    <li><a href="{{$menu->vLink}}">{{$menu->vTitle}}</a></li>
                @endforeach

                {{--<li><a href="#skills">Skills</a></li>--}}
                {{--<li><a href="#experience">Education &amp; Jobs</a></li>--}}
                {{--<li><a href="#works">Works</a></li>--}}
                {{--<li><a href="#references">References</a></li>--}}
                {{--<li><a href="#latest-posts">Latest Posts</a></li>--}}
                {{--<li><a href="#contact">Contact</a></li>--}}
                <li class="icon-link"><a href="#" class="panel-toggle" data-toggle="panel"><span><span></span></span></a></li>
            </ul>
        </nav>

        <div class="mobile-nav clearfix">
            <div class="owner">
                <img src="assets/img/avatars/avatar2.jpg" alt="">
                <span class="name">Son</span>
            </div>
            <a href="#" class="panel-toggle" data-toggle="panel"><span><span></span></span></a>
        </div>
    </div>

</header>
<section id="navigation">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-table">

                <!-- NAVIGATION CONTROLS -->
                <div class="navbar-cell tight">
                    <div class="navbar-header">
                        <div>

                            <!-- #NAVIGATION HIRE BUTTON -->
                            <a href="#contact" class="btn btn-hire btn--main-inverted">
                                <i class="fa fa-briefcase"></i><!--
										--><span>hire me</span>
                            </a>

                            <!-- #NAVIGATION TOGGLE BUTTON -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars normal"></span>
                            </button>

                        </div>
                    </div>
                </div>

                <!-- #NAVIGATION MENU -->
                <div class="navbar-cell stretch">
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <div class="navbar-cell">
                            <ul class="nav navbar-nav navbar-right text-uppercase bold small">
                                {{--@foreach($menu as $menu)--}}
                                    {{--<li><a href="{{$menu->vLink}}">{{$menu->vTitle}}</a></li>--}}
                                    {{--<li>--}}
                                        {{--<a href="{{$menu->vLink}}">--}}
                                            {{--<i class="fa fa-home fa-fw"></i>--}}
                                            {{--<span>{{$menu->vTitle}}</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                                <li>
                                    <a href="#home">
                                        <i class="fa fa-home fa-fw"></i>
                                        <span>home</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#profile">
                                        <i class="fa fa-female fa-fw"></i>
                                        <span>profile</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#resume">
                                        <i class="fa fa-book fa-fw"></i>
                                        <span>resume</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#skills">
                                        <i class="fa fa-pie-chart fa-fw"></i>
                                        <span>skills</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#services">
                                        <i class="fa fa-cog fa-fw"></i>
                                        <span>services</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#portfolio">
                                        <i class="fa fa-briefcase fa-fw"></i>
                                        <span>work</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#pricing">
                                        <i class="fa fa-dollar fa-fw"></i>
                                        <span>pricing</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#news">
                                        <i class="fa fa-comment fa-fw"></i>
                                        <span>news</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#testimonials">
                                        <i class="fa fa-pencil fa-fw"></i>
                                        <span>testimonials</span>
                                    </a>
                                </li><!--
									--><li>
                                    <a href="#contact">
                                        <i class="fa fa-envelope fa-fw"></i>
                                        <span>contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </div>

            </div>
        </div>
    </nav>
</section>
<script type="text/javascript" src="{{ Module::asset('core:core.js') }}"></script>