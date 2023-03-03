<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->
<div id="nav-anker"></div>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top px-4 px-lg-5 bg-success">
    <a href="/" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0 text-white">Tropisianimal</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/"        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">HOME</a>
            <a href="/tentang" class="nav-item nav-link {{ Request::is('') ? 'active' : '' }}">TENTANG</a>
            <a href="/beritaa" class="nav-item nav-link {{ Request::is('beritaa*') ? 'active' : '' }}">BERITA</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="/galerii" class="nav-item nav-link {{ Request::is('galerii*') ? 'active' : '' }}">FOTO</a>
            <a href="/kontak"  class="nav-item nav-link {{ Request::is('kontak*') ? 'active' : '' }}">KONTAK</a>
        </div>
    </div>
</nav>

<!-- Navbar End -->


