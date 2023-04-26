<template>
    <div class="container">
        <div class="container flex">
        <div class="kanan w-2/4 h-full">
            <h1 class="text-6xl ms-20 mt-5">Kenapa Memilih Kami menjadi Teman Perjalanan mu?</h1>
            <p class="ms-20 mt-2 tulisan">Pengalaman dan keahlian dalam industri perjalanan. Keliling Kuy telah beroperasi selama bertahun-tahun dan memiliki tim yang berpengalaman dalam menyediakan layanan perjalanan yang berkualitas. Perusahaan ini memiliki pengetahuan yang luas tentang industri perjalanan dan selalu berusaha untuk memberikan pengalaman terbaik kepada pelanggan.</p>
            <p class="ms-20 mt-2 tulisan">Beragam pilihan paket perjalanan. Keliling Kuy menawarkan berbagai pilihan paket perjalanan yang sesuai dengan kebutuhan dan anggaran pelanggan. Mulai dari perjalanan keluarga, rombongan sekolah, hingga perjalanan solo, Keliling Kuy memiliki paket yang dapat disesuaikan dengan kebutuhan dan minat pelanggan.</p>        


<a href="/about2"><button class="tombol1 bg-stone-900 p-2 rounded-lg">Previous Page</button></a>
            <a href="/kelebihan"><button class="tombol bg-stone-900 p-2 rounded-lg">Next Page</button></a>
        </div>
        <div class="kiri w-2/4 h-full">
            <img src="../img/stars.png" class="bintang" alt="">
            <img src="../img/hero.png" class="gambar" alt="">
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name:'Kelebihan',
}
</script>
<style>
.tulisan {
    -webkit-text-stroke: 0.5px black;
    font-size: 16px;
}
.gambar {
    margin-left: 150px;
    padding: 10px;
    border-radius: 20px;
}
.tombol {
    margin-left: 250px;
    width: 150px;
}
.tombol1 {
    margin-top: 20px;
    margin-left: 90px;
    width: 150px;
}
.tombol:hover {
    background-color: white;
    color: black;
}
.tombol1:hover {
    background-color: white;
    color: black;
}
.bintang {
    width: 150px;
    position: absolute;
    right: 240px;
    top: -10px;
}
</style>