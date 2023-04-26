<template>
    <div class="body h-full w-full bg-cover">
        <Navbar/>
    <kelebihan/>
    </div>
</template>
<script>
import Navbar from '../../../components/Navbar.vue'
import kelebihan from '../../../components/Kelebihan.vue'

export default {
    components:{
        kelebihan,
        Navbar,
    }
}
</script>
<style>
.body {
  background-image: url('../../../img/background.jpg');
  color: white;
}
</style>