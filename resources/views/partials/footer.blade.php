<footer class="bg-light py-5 border-top">
    <div class="container-lg">
        <div class="row footer-row">
            <!-- Logo + Description + Email -->
            <div class="col-lg-4">
                <img src="{{ Vite::asset('public/assets/footer.png') }}" alt="Telcorn Logo" />
                <p class="footer-description text-muted m-0">
                    There's a 50% chance that products fail electromagnetic compatibility (EMC) tests the first
                    time, according to at least one leading industry expert.
                </p>
                <form class="d-flex" role="subscribe">
                    <input type="email" class="form-control me-3 rounded-0" placeholder="Enter your email" />
                    <button type="submit" class="btn rounded-0 fw-bold text-light subscribe-btn">Subscribe</button>
                </form>
            </div>

            <div class="col-lg-7 col-12">
                <div class="row">
                    <!-- Footer Links -->
                    <div class="col-3 mb-4">
                        <h6 class="fw-bold mb-4">Lab Reservation</h6>
                        <ul class="list-unstyled pl-0">
                            <li><a href="#" class="text-muted text-decoration-none">Schedule Testing</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Submit Lab Review</a></li>
                        </ul>
                    </div>

                    <div class="col-3 mb-4">
                        <h6 class="fw-bold mb-4">Services</h6>
                        <ul class="list-unstyled pl-0">
                            <li><a href="#" class="text-muted text-decoration-none">Store</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Compliance Management</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Consulting</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Esource</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Resource</a></li>
                        </ul>
                    </div>

                    <div class="col-3 mb-4">
                        <h6 class="fw-bold mb-4">About</h6>
                        <ul class="list-unstyled pl-0">
                            <li><a href="#" class="text-muted text-decoration-none">Capabilities</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Our Team</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Our Partners</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                        </ul>
                    </div>

                    <div class="col-3 mb-4">
                        <h6 class="fw-bold mb-4">Schedule Now</h6>
                        <ul class="list-unstyled pl-0">
                            <li><a href="#" class="text-muted text-decoration-none">Submit RFQ for certification</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Test</a></li>
                            <li><a href="#" class="text-muted text-decoration-none">Reserve lab for precertification Testing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="second-footer">
    <div class="container-lg">
        <div class="footer-wrapper">
            <div class="policy">
                <p class="mb-0">Privacy Policy | Terms & Conditions</p>
            </div>
            <div class="copyirght">
                <p class="mb-0">© Copyright Telcron |  All Rights Reserved</p>
            </div>
            <div class="social-wrapper">
                <div>
                    <img src="{{ Vite::asset('public/assets/fb.svg') }}" alt="fb">
                </div>
                <div>
                    <img src="{{ Vite::asset('public/assets/insta.svg') }}" alt="insta">
                </div>
                <div>
                    <img src="{{ Vite::asset('public/assets/in.svg') }}" alt="in">
                </div>
            </div>
        </div>
    </div>
</section>