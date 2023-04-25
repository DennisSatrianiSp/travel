<template>
    <div class="body h-full w-full bg-cover">
      <Navbar />
      <Hero/>
      
    </div>
  </template>
  
  <script>
  import Navbar from '../../../components/Navbar.vue'
  import Hero from '../../../components/Hero.vue'
  
  export default {
    components: {
      Navbar,
      Hero // tambahkan komponen Navbar pada properti components
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
  