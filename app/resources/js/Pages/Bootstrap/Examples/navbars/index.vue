<script setup lang="ts">
import ExampleLayout from '@/Layouts/ExampleLayout.vue';
</script>


<template>
    <ExampleLayout>

        <main>
            <nav aria-label="First navbar example" class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Never expand</a>
                    <button aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample01" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample01">
                        <ul class="navbar-nav me-auto mb-2">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Second navbar example" class="navbar navbar-expand navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Always expand</a>
                    <button aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample02" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample02">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Third navbar example" class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Expand at sm</a>
                    <button aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample03" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Fourth navbar example" class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Expand at md</a>
                    <button aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample04" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Fifth navbar example" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Expand at lg</a>
                    <button aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample05" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample05">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Sixth navbar example" class="navbar navbar-expand-xl navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Expand at xl</a>
                    <button aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample06" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample06">
                        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Seventh navbar example" class="navbar navbar-expand-xxl navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Expand at xxl</a>
                    <button aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExampleXxl" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExampleXxl">
                        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Eighth navbar example" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Container</a>
                    <button aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample07" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <nav aria-label="Ninth navbar example" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-xl">
                    <a class="navbar-brand" href="#">Container XL</a>
                    <button aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample07XL" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form role="search">
                            <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container-xl mb-4">
                <p>Matching .container-xl...</p>
            </div>
            <nav aria-label="Tenth navbar example" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarsExample08" data-bs-toggle="collapse"
                        type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link active" href="#">Centered nav only</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <nav aria-label="Eleventh navbar example" class="navbar navbar-expand-lg bg-body-tertiary rounded">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler" data-bs-target="#navbarsExample09" data-bs-toggle="collapse"
                            type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample09">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a aria-current="page" class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form role="search">
                                <input aria-label="Search" class="form-control" placeholder="Search" type="search" />
                            </form>
                        </div>
                    </div>
                </nav>
                <nav aria-label="Twelfth navbar example" class="navbar navbar-expand-lg bg-body-tertiary rounded">
                    <div class="container-fluid">
                        <button aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler" data-bs-target="#navbarsExample10" data-bs-toggle="collapse"
                            type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a aria-current="page" class="nav-link active" href="#">Centered nav only</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav aria-label="Thirteenth navbar example" class="navbar navbar-expand-lg bg-body-tertiary rounded">
                    <div class="container-fluid">
                        <button aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler" data-bs-target="#navbarsExample11" data-bs-toggle="collapse"
                            type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                            <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
                            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                                <li class="nav-item">
                                    <a aria-current="page" class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a aria-disabled="true" class="nav-link disabled">Disabled</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        href="#">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                                <button class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div>
                    <div class="bg-body-tertiaryp-5 rounded">
                        <div class="col-sm-8 mx-auto">
                            <h1>Navbar examples</h1>
                            <p>This example is a quick exercise to illustrate how the navbar and its contents work. Some
                                navbars extend the width of the viewport, others are confined within a
                                <code>.container</code>. For positioning of navbars, checkout the <a
                                    href="../examples/navbar-static/">top</a> and <a
                                    href="../examples/navbar-fixed/">fixed top</a> examples.
                            </p>
                            <p>At the smallest breakpoint, the collapse plugin is used to hide the links and show a menu
                                button to toggle the collapsed content.</p>
                            <p>
                                <a class="btn btn-primary" href="../components/navbar/" role="button">View navbar docs
                                    »</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </ExampleLayout>
</template>

<style>
.collapse {
    visibility: visible;
}

body {
    padding-bottom: 20px;
}

.navbar {
    margin-bottom: 20px;
}
</style>