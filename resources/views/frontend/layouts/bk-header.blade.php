   <div class="top_bar">
   <div class="top-header">
       <div class="menu-pages-menu-container">
           <ul id="menu-pages-menu" class="menu">
               <li id="menu-item-19"
                   class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-15 current_page_item menu-item-19">
                   <a href="https://thehvacservice.ca/" aria-current="page">Home</a></li>
               <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a
                       href="https://thehvacservice.ca/services/">Services</a></li>
               <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a
                       href="https://thehvacservice.ca/advantages/">Advantages</a></li>
               {{-- <li id="menu-item-288"
                   class="menu-item menu-item-type-post_type_archive menu-item-object-review menu-item-288"><a
                       href="https://thehvacservice.ca/reviews/">Reviews</a></li>
               <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a
                       href="https://thehvacservice.ca/blog/">Blog</a></li>
               <li id="menu-item-852"
                   class="menu-item menu-item-type-post_type_archive menu-item-object-location menu-item-852"><a
                       href="https://thehvacservice.ca/locationsAll/">Find a Location</a></li>
               <li id="menu-item-1654" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1654"><a
                       href="https://thehvacservice.ca/?page_id=1609">Special Offer for Schools</a></li> --}}

           </ul>
       </div>
   </div>

   </div>


   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
       <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
           <h2 class="m-0 text-primary">{{ !is_null(global_setting()) ? global_setting()->title : 'DEMO' }}</h2>
       </a>
       <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       {{-- <div class="collapse navbar-collapse mr-4" id="navbarCollapse" style="margin-left: 255px;"> --}}
       <div class="collapse navbar-collapse mr-4" id="navbarCollapse">
           <div class="navbar-nav  ms-auto  p-4 p-lg-0">
               <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
               <a href="about.html" class="nav-item nav-link">About</a>
               <div class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                   <div class="dropdown-menu fade-down m-0">
                       <a href="team.html" class="dropdown-item">Our Team</a>
                       <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                       <a href="404.html" class="dropdown-item">404 Page</a>
                   </div>
               </div>
               <a href="contact.html" class="nav-item nav-link">Contact</a>
           </div>
           <div></div>

       </div>

   </nav>
<div class="notice">
<p class="text-center pt-3 text-white" style="font-size: 15px;">this is notice</p>
</div>
