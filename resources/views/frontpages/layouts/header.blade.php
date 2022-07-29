 <!-- Responsive navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
     <div class="container">
         <a class="navbar-brand" href="#!">Laravel Blog</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                 class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 @guest
                     <li class="nav-item"><a
                             class="nav-link 
                  {{ Request::routeIs('welcome.index') ? 'active' : '' }}"
                             href="{{ route('welcome.index') }}">welcome</a></li>
                 @endguest
                 <li class="nav-item"><a
                         class="nav-link  
                   {{ Request::routeIs('blog.index') ? 'active' : '' }}"
                         href="{{ route('blog.index') }}">Topic</a></li>
                 <li class="nav-item"><a
                         class="nav-link  
                   {{ Request::routeIs('about') ? 'active' : '' }}"
                         href="{{ route('about') }}">About</a></li>
                 <li class="nav-item"><a
                         class="nav-link  
                   {{ Request::routeIs('contact.index') ? 'active' : '' }}"
                         href="{{ route('contact.index') }}">Contact</a></li>
             </ul>
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                 @guest
                     <li class="nav-item  "><a class="nav-link {{ Request::routeIs('login') ? 'active' : '' }}"
                             href="{{ route('login') }}">Login</a></li>
                     <li class="nav-item "><a class="nav-link  {{ Request::routeIs('register') ? 'active' : '' }}"
                             href="{{ route('register') }}">Register</a></li>
                 @endguest
                 @auth
                     <li class="nav-item "><a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                             href="{{ route('dashboard') }}">Dashboard</a></li>
                 @endauth
             </ul>
         </div>
     </div>
 </nav>
