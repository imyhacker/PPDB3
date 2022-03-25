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


    <!-- Hero section -->
    <x-client.hero :slider="$slider"/>
    <!-- Hero section end -->


    <!-- Counter section  -->
    <x-client.counter :counter="$counter"/>
    <!-- Counter section end -->


    <!-- Services section -->
    <x-client.services />
    <!-- Services section end -->


    <!-- Enroll section -->
    <x-client.fact :pendaftar="$pendaftar" :jurusan="$jurusan" :cs="$cs" :ib="$ib"/>

    <!-- Enroll section end -->


    <!-- Courses section -->
    <x-client.courses :info="$info"/>
    <!-- Courses section end-->


    <!-- Gallery section -->
    <x-client.gallery :vid="$vid"/>
    <!-- Gallery section -->



    <!-- Newsletter section -->
    <x-client.newsletter />
    <!-- Newsletter section end -->


    <!-- Footer section -->
    <x-client.footer />
    <!-- Footer section end-->



    <x-client.script :counter="$counter"/>
</body>
</html>
