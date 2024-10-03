<template>

    <nav aria-label="Main navigation" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-collapse offcanvas-collapse" :class="{ 'hidden': isOpen }" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="/bootstrap">Dashboard</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            href="#">Examples</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/bootstrap/examples/album">album</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/badges">badges</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/blog">blog</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/breadcrumbs">breadcrumbs</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/buttons">buttons</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/carousel">carousel</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/cheatsheet">cheatsheet</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/checkout">checkout</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/cover">cover</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/dashboard">dashboard</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/dropdowns">dropdowns</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/features">features</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/footers">footers</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/grid">grid</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/headers">headers</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/heroes">heroes</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/index.vue">index.vue</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/jumbotron">jumbotron</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/jumbotrons">jumbotrons</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/list-groups">list-groups</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/masonry">masonry</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/modals">modals</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/navbar-bottom">navbar-bottom</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/navbar-fixed">navbar-fixed</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/navbar-static">navbar-static</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/navbars">navbars</a></li>
                            <li><a class="dropdown-item"
                                    href="/bootstrap/examples/navbars-offcanvas">navbars-offcanvas</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/offcanvas">offcanvas</a></li>
                            <li><a class="dropdown-item"
                                    href="/bootstrap/examples/offcanvas-navbar">offcanvas-navbar</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/pricing">pricing</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/product">product</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/sidebars">sidebars</a></li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/sign-in">sign-in</a></li>
                            <li><a class="dropdown-item"
                                    href="/bootstrap/examples/starter-template">starter-template</a>
                            </li>
                            <li><a class="dropdown-item" href="/bootstrap/examples/sticky-footer">sticky-footer</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="/bootstrap/examples/sticky-footer-navbar">sticky-footer-navbar</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</template>

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
        }
    },
};
</script>