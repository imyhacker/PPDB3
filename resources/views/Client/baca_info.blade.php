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


    <!-- Courses section -->
    <x-client.baca_info :data="$data" :tag="$tag" :terbaru="$terbaru" :acak="$acak"/>
    <!-- Courses section end-->


    <!-- Footer section -->
    <x-client.footer />
    <!-- Footer section end-->



    <x-client.script />
</body>
</html>