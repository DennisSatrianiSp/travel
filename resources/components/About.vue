<template>
    <div class="container">
        <div class="container flex">
        <div class="kanan w-2/4 h-full">
            <h1 class="text-6xl ms-20 mt-5">Tentang Keliling Kuy</h1>
            <p class="ms-20 mt-2 tulisan">Keliling Kuy adalah sebuah perusahaan yang bergerak di bidang travel agency yang menawarkan berbagai layanan untuk perjalanan wisata di dalam dan luar negeri. Perusahaan ini didirikan dengan tujuan untuk memberikan pengalaman perjalanan yang berbeda dan menyenangkan bagi pelanggan yang menggunakan layanan mereka. Keliling Kuy menawarkan paket wisata yang lengkap dengan harga yang terjangkau dan sesuai dengan kebutuhan dan keinginan pelanggan.</p>
            <p class="ms-20 mt-2 tulisan">Perusahaan ini memiliki tim yang berpengalaman dan profesional dalam mengatur perjalanan wisata. Tim Keliling Kuy dapat membantu pelanggan dalam merencanakan perjalanan wisata mulai dari akomodasi, transportasi, tiket masuk tempat wisata, hingga panduan wisata yang berpengetahuan luas dan ramah. Dengan demikian, pelanggan tidak perlu repot-repot dalam mengatur perjalanan mereka dan dapat fokus untuk menikmati pengalaman perjalanan yang menyenangkan.
</p>
<a href="/about2"><button class="tombol bg-stone-900 p-2 rounded-lg">Next Page</button></a>
        </div>
        <div class="kiri w-2/4 h-full">
            <img src="../img/logo.png" class="gambar" alt="">
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name:'About',
}
</script>
<style>
.tulisan {
    -webkit-text-stroke: 0.5px black;
    font-size: 16px;
}
.gambar {
    margin-left: 150px;
    background-color: white;
    padding: 10px;
    border-radius: 20px;
}
.tombol {
    margin-left: 250px;
    width: 150px;
}
.tombol:hover {
    background-color: white;
    color: black;
}
</style>