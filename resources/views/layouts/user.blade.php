@include('user.partials.header')
<body class="front_page promo_popup">
<section id="container">

@include('user.partials.navbar')
@include('user.partials.sidebar')
<section id="main-content">
      @include('user.flash_message.user_flash')
       @yield('content')
</section>
@include('user.partials.footer')
</section>
@include('user.partials.scripts')
@yield('javascript')
<body>
</html>



