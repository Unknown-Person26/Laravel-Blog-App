 <!-- Sidebar-->
 <div class="border-end bg-primary" id="sidebar-wrapper">
     <div class="sidebar-heading border-bottom bg-primary text-white">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back"
             viewBox="0 0 16 16">
             <path
                 d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
         </svg>
         <div class="ms-4">
             <i class="bi bi-back">Laravel Blog</i>
         </div>
     </div>
     <div class="list-group list-group-flush">
         <a class="list-group-item list-group-item-action list-group-item-primary text-white p-3  {{ Request::routeIs('dashboard') ? 'active' : '' }}"
             href="{{ route('dashboard') }}">Dashboard</a>
         <a class="list-group-item list-group-item-action list-group-item-primary text-white p-3  {{ Request::routeIs('blog.index') ? 'active' : '' }}"
             href="{{ route('blog.index') }}">Topic</a>
         <a class="list-group-item list-group-item-action list-group-item-primary text-white p-3  {{ Request::routeIs('about') ? 'active' : '' }}"
             href="{{ route('about') }}">About</a>
         <a class="list-group-item list-group-item-action list-group-item-primary text-white p-3  {{ Request::routeIs('contact.index') ? 'active' : '' }}"
             href="{{ route('contact.index') }}">Contact</a>
     </div>
 </div>
