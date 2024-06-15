<template>
    <v-app>
      <!-- App Bar (Top Navigation) -->
      <v-app-bar app color="deep-purple accent-4" dark>
        <v-toolbar-title>My Vue App</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn text @click="sayHello">Click Me</v-btn>
      </v-app-bar>
  
      <!-- Main Content Area -->
      <v-main>
        <v-container>
          <h1>Welcome to Your Vue.js + Vuetify Application!</h1>
          <p>This template includes basic components like a navigation bar, content area, and a footer.</p>
        </v-container>
      </v-main>
  
      <!-- Footer -->
      <v-footer color="indigo" app>
        <span class="white--text">&copy; {{ currentYear }}</span>
      </v-footer>
    </v-app>
  </template>
  
  <script>
  export default {
    name: 'App',
    data() {
      return {
        currentYear: new Date().getFullYear()
      };
    },
    methods: {
      sayHello() {
        alert('Hello from Vue + Vuetify!');
      }
    }
  }
  </script>
  
  <style>
  /* Add your CSS styles here */
  </style>
  