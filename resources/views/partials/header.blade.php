<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-lg">
        <!-- Brand -->
        <div class="navbar-brand logo">
            <img src="{{ Vite::asset('public/assets/telcorn-logo.png') }}" alt="Telcorn Logo" />
        </div>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li><a href="#">Lab Reservation</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Products Industries</a>
                        <ul class="dropdown-menu p-2 rounded-0" aria-labelledby="dropdownMenuButton1">
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Aerospace</a></li>
                            <li><a href="#">Medical Devices</a></li>
                            <li><a href="#">Automotive</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Services</a>
                        <ul class="dropdown-menu p-2 rounded-0" aria-labelledby="dropdownMenuButton1">
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Testing</a></li>
                            <li><a href="#">Certification</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Store</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Lab Ratings</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Solutions</a>
                        <ul class="dropdown-menu p-2 rounded-0" aria-labelledby="dropdownMenuButton1">
                            <li><a href="#">Enterprise</a></li>
                            <li><a href="#">Small Business</a></li>
                            <li><a href="#">Custom</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
             <!-- Auth buttons -->
             <div class="auth-buttons">
                <a href="#" class="btn btn-theme-g rounded-0">Log in</a>
                <a href="#" class="btn btn-theme-w rounded-0">Sign up</a>
            </div>
        </div>
    </div>
</nav>