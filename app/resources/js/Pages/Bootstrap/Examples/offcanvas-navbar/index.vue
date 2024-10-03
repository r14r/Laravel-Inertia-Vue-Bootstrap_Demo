<template>

      <div class="bg-body-tertiary">
            <svg class="d-none" xmlns="http://www.w3.org/2000/svg">
                  <symbol id="check2" viewbox="0 0 16 16">
                        <path
                              d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                        </path>
                  </symbol>
                  <symbol id="circle-half" viewbox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                  </symbol>
                  <symbol id="moon-stars-fill" viewbox="0 0 16 16">
                        <path
                              d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                        </path>
                        <path
                              d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                        </path>
                  </symbol>
                  <symbol id="sun-fill" viewbox="0 0 16 16">
                        <path
                              d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                        </path>
                  </symbol>
            </svg>
            <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
                  <button aria-expanded="false" aria-label="Toggle theme (auto)"
                        class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                        data-bs-toggle="dropdown" id="bd-theme" type="button">
                        <svg class="bi my-1 theme-icon-active" height="1em" width="1em">
                              <use href="#circle-half"></use>
                        </svg>
                        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                  </button>

                  <ul aria-labelledby="bd-theme-text" class="dropdown-menu dropdown-menu-end shadow">
                        <li>
                              <button aria-pressed="false" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="light" type="button">
                                    <svg class="bi me-2 opacity-50" height="1em" width="1em">
                                          <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none" height="1em" width="1em">
                                          <use href="#check2"></use>
                                    </svg>
                              </button>
                        </li>
                        <li>
                              <button aria-pressed="false" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark" type="button">
                                    <svg class="bi me-2 opacity-50" height="1em" width="1em">
                                          <use href="#moon-stars-fill"></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none" height="1em" width="1em">
                                          <use href="#check2"></use>
                                    </svg>
                              </button>
                        </li>
                        <li>
                              <button aria-pressed="true" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="auto" type="button">
                                    <svg class="bi me-2 opacity-50" height="1em" width="1em">
                                          <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none" height="1em" width="1em">
                                          <use href="#check2"></use>
                                    </svg>
                              </button>
                        </li>
                  </ul>
            </div>

            <nav aria-label="Main navigation" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">Offcanvas Navbar</a>

                        <div class="navbar-collapse offcanvas-collapse" :class="{ 'hidden': isOpen }"
                              id="navbarsExampleDefault">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a aria-current="page" class="nav-link active" href="#">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#suggestions">Suggestions</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#recent-updates">Recent updates</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#">Switch account</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                          <a aria-expanded="false" class="nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown" href="#">Settings</a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                          <a aria-expanded="false" class="nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown" href="#">Examples</a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>

                                                <li><a class="dropdown-item" href="/bootstrap/examples/album">album</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/badges">badges</a></li>
                                                <li><a class="dropdown-item" href="/bootstrap/examples/blog">blog</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/breadcrumbs">breadcrumbs</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/buttons">buttons</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/carousel">carousel</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/cheatsheet">cheatsheet</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/checkout">checkout</a></li>
                                                <li><a class="dropdown-item" href="/bootstrap/examples/cover">cover</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/dashboard">dashboard</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/dropdowns">dropdowns</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/features">features</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/footers">footers</a></li>
                                                <li><a class="dropdown-item" href="/bootstrap/examples/grid">grid</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/headers">headers</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/heroes">heroes</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/index.vue">index.vue</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/jumbotron">jumbotron</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/jumbotrons">jumbotrons</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/list-groups">list-groups</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/masonry">masonry</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/modals">modals</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/navbar-bottom">navbar-bottom</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/navbar-fixed">navbar-fixed</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/navbar-static">navbar-static</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/navbars">navbars</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/navbars-offcanvas">navbars-offcanvas</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/offcanvas">offcanvas</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/offcanvas-navbar">offcanvas-navbar</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/pricing">pricing</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/product">product</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/sidebars">sidebars</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/sign-in">sign-in</a></li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/starter-template">starter-template</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/sticky-footer">sticky-footer</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                            href="/bootstrap/examples/sticky-footer-navbar">sticky-footer-navbar</a>
                                                </li>
                                          </ul>
                                    </li>

                              </ul>
                              <form class="d-flex" role="search">
                                    <input aria-label="Search" class="form-control me-2" placeholder="Search"
                                          type="search" />
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                        </div>

                        <button aria-label="Toggle navigation" class="navbar-toggler p-0 border-0"
                              id="navbarSideCollapse" type="button" @click="toggleOpen">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                  </div>
            </nav>
            <div class="nav-scroller bg-body shadow-sm">
                  <nav aria-label="Secondary navigation" class="nav">
                        <a aria-current="page" class="nav-link active" href="#">Dashboard</a>
                        <a class="nav-link" href="#">
                              Friends
                              <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
                        </a>
                        <a class="nav-link" href="#">Explore</a>
                        <a class="nav-link" href="#">Suggestions</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                  </nav>
            </div>


            <main class="container">
                  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
                        <img alt="" class="me-3" height="38" src="../assets/brand/bootstrap-logo-white.svg"
                              width="48" />
                        <div class="lh-1">
                              <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
                              <small>Since 2011</small>
                        </div>
                  </div>


                  <div id="recent-updates" class="my-3 p-3 bg-body rounded shadow-sm">
                        <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
                        <div v-for="item, index in Array(20)" class="d-flex text-body-secondary pt-3">
                              <svg aria-label="Placeholder: 32x32" class="bd-placeholder-img flex-shrink-0 me-2 rounded"
                                    focusable="false" height="32" preserveaspectratio="xMidYMid slice" role="img"
                                    width="32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Placeholder</title>
                                    <rect :fill="getFillColor(index)" height="100%" width="100%"></rect>
                                    <text :fill="getFillColor(index)" dy=".3em" x="50%" y="50%">32x32</text>
                              </svg>
                              <p class="pb-3 mb-0 small lh-sm border-bottom">
                                    <strong class="d-block text-gray-dark">@username</strong>
                                    Some representative placeholder content, with some information about this user.
                                    Imagine this being some sort of status update, perhaps?
                              </p>
                        </div>

                        <small class="d-block text-end mt-3">
                              <a href="#">All updates</a>
                        </small>
                  </div>
                  <div id="suggestions" class="my-3 p-3 bg-body rounded shadow-sm">
                        <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
                        <div v-for="item, index in Array(20)" class="d-flex text-body-secondary pt-3">
                              <svg aria-label="Placeholder: 32x32" class="bd-placeholder-img flex-shrink-0 me-2 rounded"
                                    focusable="false" height="32" preserveaspectratio="xMidYMid slice" role="img"
                                    width="32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Placeholder</title>
                                    <rect :fill="getFillColor(index)" height="100%" width="100%"></rect>
                                    <text :fill="getFillColor(index)" dy=".3em" x="50%" y="50%">32x32</text>
                              </svg>
                              <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                          <strong class="text-gray-dark">Full Name</strong>
                                          <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                              </div>
                        </div>
                        <small class="d-block text-end mt-3">
                              <a href="#">All suggestions</a>
                        </small>
                  </div>
            </main>
      </div>
</template>


<style lang="css" scoped>
html,
body {
      overflow-x: hidden;
      /* Prevent scroll on narrow devices */
}

body {
      padding-top: 56px;
}

@media (max-width: 991.98px) {
      .offcanvas-collapse {
            position: fixed;
            top: 56px;
            /* Height of navbar */
            bottom: 0;
            left: 100%;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            visibility: hidden;
            background-color: #343a40;
            transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      }

      .offcanvas-collapse.open {
            visibility: visible;
            transform: translateX(-100%);
      }
}

.nav-scroller {
      .nav {
            color: rgba(255, 255, 255, .75);
      }

      .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
            color: #6c757d;
      }

      .nav-link:hover {
            color: #007bff;
      }

      .active {
            font-weight: 500;
            color: #343a40;
      }
}

.navbar-toggler {
      display: contents;
}

.hidden {
      visibility: hidden
}

.bg-purple {
      background-color: #6f42c1;
}
</style>

<script>


export default {
      data() {
            return {
                  isOpen: false,
            };
      },
      methods: {
            toggleOpen() {
                  this.isOpen = !this.isOpen;
                  console.log(`toggleOpen: this.isOpen=${this.isOpen}`)
            },
            getFillColor(index) {
                  const colors = ['007bff', '#e83e8c', '#6f42c1', '#20c997']; // Define colors for items 1, 2, and 3
                  return colors[index % colors.length]; // Cycle through colors if more items than colors
            }

      },
};
</script>