<template>
    <nav aria-label="Main navigation" class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container-fluid">
            <div class="navbar-collapse offcanvas-collapse" :class="{ 'hidden': isOpen }" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="/bootstrap">{{ navigationTitle }}</a>
                    </li>

                    <li class="nav-item dropdown" v-for="(item, index) in navigationItems" :key="index">
                        <a v-if="item.items && item.items.length" aria-expanded="false" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown" :href="item.url">{{ item.name }}</a>
                        <a v-else class="nav-link" :href="item.url">{{ item.name }}</a>

                        <ul class="dropdown-menu" v-if="item.items && item.items.length">
                            <li v-for="(subitem, subIndex) in item.items" :key="subIndex">
                                <a class="dropdown-item" :href="subitem.url">{{ subitem.name }}</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
const theme = {
    "menu": {
        "background": 'black',
        "item": {
            "background": "transparent"
        },
        "subitem": {
            "color": "white",
            "background": "black"
        }
    }
}
</script>

<script>
export default {
    props: {
        navigationTitle: String,
        navigationItems: {
            type: Array,
            required: true
        }
    },
    data() {
        return {
            isOpen: false
        }
    },
    mounted() {
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
.navbar {
    background-color: v-bind('theme.menu.background');

    ul {
        background-color: transparent;

        &>li {
            &>a {
                background-color: v-bind("theme.menu.item.background");
                margin-top: 0;
            }


            &>ul {
                border: 0px solid transparent;
                &>li>a {
                    color: v-bind("theme.menu.subitem.color");
                    background-color: v-bind("theme.menu.subitem.background");
                    border: 0px solid transparent;
                }
            }
        }
    }
}
</style>