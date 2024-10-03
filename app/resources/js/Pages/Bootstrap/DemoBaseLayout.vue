<template>
    <BaseLayout :navigationItems="navigationItems" navigationTitle="Demo">
      <!-- Custom Header Slot -->
      <template v-slot:header>
        <h1>Welcome to My Site</h1>
      </template>
  
      <!-- Custom Sidebar Slot -->
      <template v-slot:sidebar>
        <ul>
          <li>Recent Posts</li>
          <li>Popular Topics</li>
          <li>Categories</li>
        </ul>
      </template>
  
      <!-- Main Content -->
      <p>This is the main content of the home page!</p>
  
      <!-- Custom Footer Slot -->
      <template v-slot:footer>
        <p>&copy; 2024 My Custom Website</p>
      </template>
    </BaseLayout>
  </template>
  
  <script>
  import BaseLayout from '@/Layouts/BaseLayout.vue';

  export default {
    components: {
      BaseLayout
    },
    data() {
      return {
        // Array of navigation items, some with subitems
        navigationItems: [
          { name: 'Home', url: '/' },
          { name: 'Services', url: '/services', items: [
            { name: 'Consulting', url: '/services/consulting' },
            { name: 'Development', url: '/services/development' },
          ]},
          { name: 'Portfolio', url: '/portfolio', items: [
            { name: 'Web Projects', url: '/portfolio/web' },
            { name: 'Mobile Apps', url: '/portfolio/mobile' }
          ]},
          { name: 'Contact', url: '/contact' }
        ]
      };
    }
  }
  </script>
  