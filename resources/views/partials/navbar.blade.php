<nav>
   <div class="nav-content">
     <div class="logo">
     <img src="img/logo/laptop.png" alt="" style="width:60px;height:60px;">
     <a href="/" style="color:#00214d">ASL Comp</a>
     </div>
     <form class="search-box">
       <input type="text" placeholder=" Cari produk....">
       <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
     </form>
     <ul class="nav-links">
       <li><a href="/cart"><lord-icon
         src="https://cdn.lordicon.com/rmzhcgbh.json"
         trigger="hover"
         style="width:40px;height:40px">
         </lord-icon></a></li>
         @guest
         <li class="link"><a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Login</a></li>
         @endguest
        
         @auth
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle account" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/bg/avataritem.png" width="30px" height="30px" style="border-radius: 100%" alt="Avatar" class="avatar me-2">{{ Auth::user()->name }}
          </a>
          {{-- variasi styling saja --}}
          {{-- @include('partials.popup') --}}
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
         <li class="link"><a href="{{ url('category') }}">kategori</a></li>
         <li class="link"><a href="{{ url('product') }}">product</a></li>
         @endauth   
        
       
     </ul>
   </div>
  </nav>
  


 
