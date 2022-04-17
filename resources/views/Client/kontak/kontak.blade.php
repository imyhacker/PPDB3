<x-client.head />

<body>
    <!-- Page Preloder -->
    <!-- {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}} -->

    <!-- header section -->
    <x-client.header :set="$set"/>
    <!-- header section end-->


    <!-- Header section  -->
    <x-client.nav />
    <!-- Header section end -->

    <x-client.kontak.kontak :set="$set"/>
    <!-- Footer section -->
    <x-client.footer :if="$if" :tentang="$tentang"/>
    <!-- Footer section end-->
    <x-client.script />

</body>

</html>
