<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url({{url('images/bg_3.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <p>
                    &copy; <script>document.write(new Date().getFullYear());</script> Gaia Tours | All rights reserved
                </p>
                <p>
                    <a href="{{url('/TermsAndConditions')}}">{{t('terms_and_conditions')}}</a>
                </p>
                <ul class="ftco-footer-social list-unstyled">
                    @if (Session::get('facebook') !== '-')
                        <li class="ftco-animate"><a href="{{Session::get('facebook')}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    @endif
                    @if (Session::get('snapchat') !== '-')
                        <li class="ftco-animate"><a href="{{Session::get('snapchat')}}" target="_blank"><span class="fa fa-snapchat"></span></a></li>
                    @endif
                    @if (Session::get('instagram') !== '-')
                        <li class="ftco-animate"><a href="{{Session::get('instagram')}}" target="_blank"><span class="fa fa-instagram"></span></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
