<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-sm">
        <!-- Brand -->
        <div class="navbar-brand logo">
            <img src="{{ Vite::asset('public/assets/telcorn-logo.png') }}" alt="Telcorn Logo" />
        </div>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center justify-content-around" id="navbarNav">
            <ul class="navbar-nav">
                <li><a href="#">Lab Reservation</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Products Industries</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Aerospace</a></li>
                        <li><a href="#">Medical Devices</a></li>
                        <li><a href="#">Automotive</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Consulting</a></li>
                        <li><a href="#">Testing</a></li>
                        <li><a href="#">Certification</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </li>

                <li><a href="#">Store</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Lab Ratings</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Solutions</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Enterprise</a></li>
                        <li><a href="#">Small Business</a></li>
                        <li><a href="#">Custom</a></li>
                    </ul>
                </li>
            </ul>
             <!-- Auth buttons -->
             <div class="auth-buttons">
                <a href="#" class="btn login-btn">Log in</a>
                <a href="#" class="btn signup-btn">Sign up</a>
            </div>
        </div>
    </div>
</nav>