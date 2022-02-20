<x-client.head />

<body>

    <x-client.header />
    <!-- ======= Hero Section ======= -->
    <x-client.hero />
    <main id="main">

        <!-- ======= About Section ======= -->
        <x-client.about />
        <!-- ======= Why Us Section ======= -->

        <!-- ======= Counts Section ======= -->
        <x-client.count  :pendaftar="$pendaftar" :jurusan="$jurusan" :cs="$cs"/>
        <!-- ======= Services Section ======= -->
        <x-client.service :info="$info"/>
        <!-- ======= Features Section ======= -->
        <x-client.feature />
        <!-- ======= Portfolio Section ======= -->
        <x-client.port />
        <!-- ======= Team Section ======= -->
        <!-- ======= Pricing Section ======= -->
        <x-client.price />
        
        <x-client.testi />
        <!-- ======= Frequently Asked Questions Section ======= -->
        <x-client.faq />
        <x-client.contact />
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-client.footer />
    <x-client.script />
