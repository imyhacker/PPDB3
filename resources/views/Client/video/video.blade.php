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

    <x-client.video.video :vid="$vid" />
    <!-- Footer section -->
    <x-client.footer :if="$if"/>
    <!-- Footer section end-->
</body>

</html>
