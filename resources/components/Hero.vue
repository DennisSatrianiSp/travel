<template>
    <div class="container">
        <div class="container flex">
        <div class="kanan w-2/4 h-full">
            <h1 class="text-6xl ms-20 mt-5">TRAVEL ENJOY AND LIVE A NEW AND FULL LIFE</h1>
            <p class="ms-20 mt-2 tulisan">Travel dapat memikat dan mengajak orang untuk menjelajahi tempat-tempat baru yang menarik.</p>
            <p class="ms-20 mt-2 tulisan">Travel membawa kesempatan untuk petualangan yang menarik dan tidak terlupakan.</p>
            <p class="ms-20 mt-2 tulisan">Travel dapat disesuaikan dengan kebutuhan dan preferensi individu, sehingga pengalaman menjadi lebih fleksibel dan mudah diakses.</p>
            <button class="tombol bg-stone-900 p-2 rounded-lg">Get Started</button>
        </div>
        <div class="kiri w-2/4 h-full">
            <img src="../img/hero2.png" class="gambar" alt="">
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name:'Hero',
}
</script>
<style>
.tulisan {
    -webkit-text-stroke: 0.5px black;
    font-size: 20px;
}
.gambar {
    margin-left: 150px;
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