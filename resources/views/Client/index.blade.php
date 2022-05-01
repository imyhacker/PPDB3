<x-client.header />

<body>
    <div class="container-scroller">
        <x-client.navbar />
        <div class="container-fluid page-body-wrapper">
            <x-client.sidebar />
            <div class="content-wrapper">
                <x-client.ucapan />
                <x-client.card :slider="$slider" :pbm="$pbm" :pendaftar="$pendaftar" :lk="$lk" :pr="$pr"/>
                <!-- BATAS INDEX -->
                <x-client.index.index :counter="$counter" :pendaftar="$pendaftar" :vid="$vid"/>
                <!-- BATAS INDEX -->

                <x-client.footer />
            </div>
        </div>
    </div>
    <x-client.script />
</body>

</html>
