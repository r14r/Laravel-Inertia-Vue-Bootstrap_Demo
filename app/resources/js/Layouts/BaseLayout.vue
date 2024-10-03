<template>
    <div class="layout">
        <!-- Header Section -->
        <header class="layout-header">
            <slot name="header">
                <h1>Default Header</h1>
            </slot>
        </header>

        <Navigation :navigationItems="navigationItems" :navigationTitle="navigationTitle"></Navigation>

        <div class="layout-main">
            <!-- Sidebar Section -->
            <aside class="layout-sidebar">
                <slot name="sidebar">
                    <p>Default Sidebar Content</p>
                </slot>
            </aside>

            <!-- Content Section -->
            <main class="layout-content">
                <slot>
                    <p>This is the default content.</p>
                </slot>
            </main>
        </div>
        
        <footer class="layout-footer">
            <slot name="footer">
                <p>&copy; 2024 My Website</p>
            </slot>
        </footer>
    </div>
</template>

<script setup>
import Navigation from '@/Components.Bootstrap/Navigation.vue';
</script>

<script>
export default {
    name: 'BaseLayout',
    props: {
        navigationTitle: String,
        navigationItems: {
            type: Array,
            required: true
        }
    },
    data() {
        return {
            isOpen: false,
        };
    },
    mounted() {
        // Log the navigation items to the console
        console.log('BaseLayout: Navigation Items:', this.items);
    },
    methods: {
        toggleOpen() {
            this.isOpen = !this.isOpen;
            console.log(`toggleOpen: this.isOpen=${this.isOpen}`)
        }
    },
}

</script>

<style scoped>
/* Basic layout styling */
.layout {
    margin-top: 50px;

    display: grid;
    grid-template-areas:
        'header header'
        'nav nav'
        'sidebar content'
        'footer footer';
    grid-template-columns: 1fr 3fr;
    grid-template-rows: auto;
    gap: 1rem;
}

.layout-header {
    grid-area: header;
    background-color: #f5f5f5;
    padding: 1rem;
}

.layout-nav {
    grid-area: nav;
    background-color: #e8e8e8;
    padding: 1rem;
}

.layout-sidebar {
    grid-area: sidebar;
    background-color: #f0f0f0;
    padding: 1rem;
}

.layout-content {
    grid-area: content;
    background-color: #fff;
    padding: 1rem;
}

.layout-footer {
    grid-area: footer;
    background-color: #f5f5f5;
    padding: 1rem;
    text-align: center;
}

.layout {
    ul {
        list-style: none;
        padding: 0;
    }

    ul ul {
        padding-left: 20px;
    }

    a {
        text-decoration: none;
        color: white;

    }

    a.dropdown-item {
        color: black
    }

    a:hover {
        text-decoration: underline;
    }
}

ul>li.nav-item.dropdown>ul {
    background-color: lightgray;
    padding-left: 0
}
</style>