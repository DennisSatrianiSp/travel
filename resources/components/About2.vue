<template>
    <div class="container">
        <div class="container flex">
        <div class="kanan w-2/4 h-full">
            <h1 class="text-6xl ms-20 mt-5">Tentang Keliling Kuy</h1>
            <p class="ms-20 mt-2 tulisan">Selain itu, Keliling Kuy juga memberikan layanan khusus bagi pelanggan yang ingin merencanakan perjalanan khusus seperti perjalanan bulan madu, perjalanan keluarga, perjalanan rombongan, dan lain sebagainya. Perusahaan ini akan membantu pelanggan dalam memilih destinasi wisata yang sesuai dengan keinginan mereka dan mengatur perjalanan secara detail sehingga pelanggan dapat menikmati perjalanan mereka tanpa adanya kendala.</p>
            <p class="ms-20 mt-2 tulisan">Terakhir, Keliling Kuy juga memberikan pelayanan terbaik dan ramah kepada pelanggan selama perjalanan berlangsung. Tim Keliling Kuy selalu siap membantu pelanggan dalam mengatasi masalah yang terjadi selama perjalanan dan memberikan solusi yang terbaik untuk kepuasan pelanggan. Dengan demikian, pelanggan akan merasa aman dan nyaman selama 
</p>
            <button class="tombol bg-stone-900 p-2 rounded-lg">Next Page -></button>
        </div>
        <div class="kiri w-2/4 h-full">
            <img src="../img/logo.png" class="gambar" alt="">
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name:'About2',
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