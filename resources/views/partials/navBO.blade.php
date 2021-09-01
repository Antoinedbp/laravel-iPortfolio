<header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                
                <a href="index.html" class="site-title yellow-text" style="color:black;">{{env('APP_ENTREPRISE')}}</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu "  id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right d-flex">
                    <li class="active">
                        <a href="{{route('hombo')}}" style="color:black;">Home back-office</a>
                    </li>
                    <li>
                        <a href="{{route('about_bo')}}" style="color:black;">About</a>
                    </li>
                    <li>
                        <a href="{{route('portfolio_bo')}}" style="color:black;">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{route('skill_bo')}}" style="color:black;">Skills</a>
                    </li>
                    <li>
                        <a href="{{route('contact_bo')}}" style="color:black;">Contact</a>
                    </li>
                   
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>
                  
    </nav><!-- /.site-navigation -->
    
</header><!-- /#masthead -->