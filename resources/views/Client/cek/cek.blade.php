<x-client.header />

<body>
    <div class="container-scroller">
        <x-client.navbar />
        <div class="container-fluid page-body-wrapper">
            <x-client.sidebar />
            <div class="content-wrapper">
            <x-client.ucapan :title="$title" :desk="$desk"/>

                <x-client.cek.cek :data="$data"/>
                <x-client.footer />
            </div>
        </div>
    </div>




    <x-client.script />
    
</body>

</html>
