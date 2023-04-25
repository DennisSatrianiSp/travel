<template>
    <div class="body h-full w-full bg-cover">
      <Navbar />
      <About/>
      
    </div>
  </template>
  
  <script>
  import Navbar from '../../../components/Navbar.vue'
  import About from '../../../components/About2.vue'
  
  export default {
    components: {
      Navbar,
      About
       // tambahkan komponen Navbar pada properti components
    },
    data() {
      return {
        
      }
    },
  }
  </script>
  <style>
  .body {
    background-image: url('../../../img/background.jpg');
    color: white;
  }
  </style>
  