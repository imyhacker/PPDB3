<x-client.head />

<body>
    <!-- Page Preloder -->
    <!-- {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}} -->

    <!-- header section -->
    <x-client.header />
    <!-- header section end-->


    <!-- Header section  -->
    <x-client.nav />
    <!-- Header section end -->

    <x-client.tentang.tentang :data="$data"/>
    
    <!-- Footer section -->
    <x-client.footer />
    <!-- Footer section end-->
</body>

</html>