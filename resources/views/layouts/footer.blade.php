<footer class="footer">
    <div class="container">

        <div class="row footer-content ">
            <div class="col-4 offset-4 col-xl-4 offset-xl-4 navigation text-center"><img src="{{asset('img/footer-logo.png')}}" alt=""></div>
            <div class="col-xl-8 offset-xl-2 navigation">
                <nav class="nav-list">
                    <a href="/" class="nav-link">{{__('menu.main')}}</a>
                    <a href="{{route('about')}}" class="nav-link">{{__('menu.aboutUs')}}</a>
                    <a href="{{route('faq')}}" class="nav-link">Faq</a>
{{--                    <a href="{{route('partners')}}" class="nav-link">Партнерам</a>--}}
{{--                    <a href="{{route('news')}}" class="nav-link">Новости</a>--}}
{{--                    <a href="{{route('reviews')}}" class="nav-link">Отзывы</a>--}}
                    <a href="{{route('contacts')}}" class="nav-link">{{__('menu.contacts')}}</a>
                    <a href="{{route('docs')}}" class="nav-link">{{__('menu.docs')}}</a>
                </nav>
            </div>

        </div>
        <p class="copyright">© 2019 GDC Invest. All rights reserved.</p>
    </div>
</footer>
<script src="{{asset('js/jquery.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/fontawesome.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/myCarousel.js')}}"></script>
</body>
</html>

