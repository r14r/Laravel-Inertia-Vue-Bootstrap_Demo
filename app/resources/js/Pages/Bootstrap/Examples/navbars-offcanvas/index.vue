<script setup lang="ts">
import ExampleLayout from '@/Layouts/ExampleLayout.vue';
</script>


<template>
  <ExampleLayout>

    <main>
      <nav aria-label="Dark offcanvas navbar" class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dark offcanvas navbar</a>
          <button aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#offcanvasNavbarDark" data-bs-toggle="offcanvas" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div aria-labelledby="offcanvasNavbarDarkLabel" class="offcanvas offcanvas-end text-bg-dark"
            id="offcanvasNavbarDark" tabindex="-1">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Offcanvas</h5>
              <button aria-label="Close" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                type="button"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a aria-current="page" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                    role="button">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <nav aria-label="Light offcanvas navbar" class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Light offcanvas navbar</a>
          <button aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#offcanvasNavbarLight" data-bs-toggle="offcanvas" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div aria-labelledby="offcanvasNavbarLightLabel" class="offcanvas offcanvas-end" id="offcanvasNavbarLight"
            tabindex="-1">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Offcanvas</h5>
              <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a aria-current="page" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                    role="button">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <nav aria-label="Offcanvas navbar large" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Responsive offcanvas navbar</a>
          <button aria-controls="offcanvasNavbar2" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#offcanvasNavbar2" data-bs-toggle="offcanvas" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div aria-labelledby="offcanvasNavbar2Label" class="offcanvas offcanvas-end text-bg-dark"
            id="offcanvasNavbar2" tabindex="-1">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
              <button aria-label="Close" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                type="button"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a aria-current="page" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                    role="button">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3 mt-lg-0" role="search">
                <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <div class="container my-5">
        <div class="bg-body-tertiary p-5 rounded">
          <div class="col-sm-8 py-5 mx-auto">
            <h1 class="display-5 fw-normal">Navbar with offcanvas examples</h1>
            <p class="fs-5">This example shows how responsive offcanvas menus work within the navbar. For positioning of
              navbars, checkout the <a href="../examples/navbar-static/">top</a> and <a
                href="../examples/navbar-fixed/">fixed top</a> examples.</p>
            <p>From the top down, you'll see a dark navbar, light navbar and a responsive navbar—each with offcanvases
              built in. Resize your browser window to the large breakpoint to see the toggle for the offcanvas.</p>
            <p>
              <a class="btn btn-primary" href="../components/navbar/#offcanvas" role="button">Learn more about offcanvas
                navbars »</a>
            </p>
          </div>
        </div>
      </div>
    </main>

  </ExampleLayout>
</template>

<style>
body {
  padding-bottom: 20px;
}

.navbar {
  margin-bottom: 20px;
}
</style>