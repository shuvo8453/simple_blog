<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <h2>Stand Blog<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @php
                $navs = [
                    'home' => [
                        'name' => 'Home',
                        'url' => '/',
                    ],
                    'about' => [
                        'name' => 'About Us',
                        'url' => 'about',
                    ],
                    'blogs' => [
                        'name' => 'Blog Entries',
                        'url' => 'blog',
                    ],
                    'single_blog' => [
                        'name' => 'Post Details',
                        'url' => 'post-details',
                    ],
                    'contact' => [
                        'name' => 'Contact Us',
                        'url' => 'contact',
                    ],
                ];
                $navbars = [
                    '/' => 'Home' ,
                    'about' => 'About Us',
                    'blog' =>  'Blog Entries',
                    'post-details' => 'Post Details',
                    'contact' => 'Contact Us',
                ];
                //{{ Request::is($key) ? 'active' : '' }}
            @endphp
            <ul class="navbar-nav ml-auto" id="navmenu">
                @foreach ($navbars as $key=>$nav)

                    <li class="nav-item ">
                        <a class="nav-link "
                            href="{{ url($key) }}">{{ $nav }}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let currentUrl = window.location.href;
        //console.log(currentUrl);

        if(currentUrl.endsWith("/")){
            currentUrl = currentUrl.slice(0, -1);
        }

        let navLinks = $('.navbar-nav li a');

        navLinks.each(function() {
            if ($(this).attr('href') == currentUrl) {
                link.parent().addClass('active');
            }
        });
    });
</script>
