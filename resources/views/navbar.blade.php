<style>
  #neubar {
    z-index: 1050;
    background: #1c2331;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 4px 6px 12px rgba(0, 0, 0, 0.4)
  }
  
  #neubar .nav-link:hover {
    border-radius: 6px;
    background: linear-gradient(145deg, #484d57, #3e414e);
    box-shadow:  4px 4px 8px #ddc1a000,
                 -4px -4px 8px #f7e5cc00;
    
  }

  .nav-item .active {
    border-radius: 6px;
    background: linear-gradient(145deg, #484d57, #3e414e);
    box-shadow:  4px 4px 8px #a3570000,
                 -4px -4px 8px #f7e5cc00;
  }

  #neubar .dropdown-menu a:hover {
    color: #454545
  }
  #neubar .nav-item {
    margin : auto 4px;
  }
  #neubar a {
    padding-left:12px;
    padding-right:12px;
    color: white;
  }
  #neubar .dropdown-menu {
    background : #545454
  }
  a.navbar-brand {
    color: #454545
  }
  #home::before {
    content: "";
    display: block;
    height: 80px; 
    margin-top: -80px;
    visibility: hidden;
}
@media (max-width: 1024px) and (min-width: 600px) {
  .navbar-toggler {
    display: block; 
  }

  .navbar-collapse {
    display: none; 
  }

  .navbar-toggler-icon {
    display: block; 
  }
}
</style>

<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('asset/hero2.png') }}" height="60" /></a>
    <button class="navbar-toggler" type="button" style="background-color: rgb(192, 192, 192);" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNavDropdown" 
        aria-controls="navbarNavDropdown" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color: rgb(192, 192, 192);"></span>
    </button>

    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2" aria-current="page" href="{{ route('index') }}#home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#news" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="triggerDropdown(event)">
              News
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('news') }}">News Page</a></li>
          </ul>
      </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{ route('products') }}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{ route('bundling') }}">Bundling</a>
        </li>
        <li class="nav-item dropdown">
          
          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('about_team') }}">About Team</a></li>
            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
  function triggerDropdown(event) {
      event.preventDefault(); // Menghentikan navigasi default
      var newsSection = document.getElementById('news');
      if (newsSection) {
          newsSection.scrollIntoView({ behavior: 'smooth' }); // Scroll ke ID #news
      }

      var dropdownElement = document.getElementById('navbarDropdownMenuLink');
      var dropdownInstance = new bootstrap.Dropdown(dropdownElement);
      dropdownInstance.show(); 
  }
</script>