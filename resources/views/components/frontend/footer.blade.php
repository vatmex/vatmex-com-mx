<footer class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top" style="background-image: url('/frontend/images/demo-hosting-footer-bg.jpg')">
    <div class="container">
        <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
            <!-- start footer column -->
            <div class="col-6 col-lg-3 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                <a href="demo-hosting.html" class="footer-logo mb-15px d-inline-block"><img src="/frontend/images/logo-white.png" data-at2x="/frontend/images/logo-white.png" alt=""></a>
                <p class="w-90 lg-w-100">{{ __('footer.description') }}</p>
                <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                    <ul class="small-icon light">
                        <li class="my-0"><a class="discord" href="https://community.vatsim.net/" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
                        <li class="my-0"><a class="kofi" href="https://ko-fi.com/vatmex" target="_blank"><i class="fa-solid fa-mug-hot"></i></a></li>
                        <li class="my-0"><a class="twitter" href="https://x.com/VATMEX_com_mx" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="my-0"><a class="instagram" href="https://www.instagram.com/vatmex.com.mx" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-17 fw-500 d-block text-white mb-5px">{{ __('footer.about.title') }}</span>
                <ul>
                    <li><a href="demo-hosting-about.html">{{ __('footer.about.staff') }}</a></li>
                    <li><a href="demo-hosting-hosting.html">{{ __('footer.about.roster') }}</a></li>
                    <li><a href="demo-hosting-domain.html">{{ __('footer.about.airspace') }}</a></li>
                    <li><a href="demo-hosting-pricing.html">{{ __('footer.about.donate') }}</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                <span class="fs-17 fw-500 d-block text-white mb-5px">{{ __('footer.vatsim.title') }}</span>
                <ul>
                    <li><a href="demo-hosting-support.html">{{ __('footer.vatsim.site') }}</a></li>
                    <li><a href="demo-hosting-support.html">{{ __('footer.vatsim.join') }}</a></li>
                    <li><a href="demo-hosting-about.html">{{ __('footer.vatsim.amas') }}</a></li>
                    <li><a href="demo-hosting-contact.html">{{ __('footer.vatsim.regulations') }}</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-17 fw-500 d-block text-white mb-5px">{{ __('footer.hello.title') }}</span>
                <span class="d-inline-flex w-100">{{ __('footer.hello.message') }}</span>
                <a href="mailto:hello@vatmex.com.mx" class="text-white lh-22 text-decoration-line-bottom d-inline-block mb-20px">hello@vatmex.com.mx</a>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-lg-3 col-sm-6 ps-30px sm-ps-15px md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                <span class="fs-17 fw-500 d-block text-white mb-5px">{{ __('footer.newsletter.title') }}</span>
                <p class="mb-20px">{{ __('footer.newsletter.message') }}</p>
                <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                    <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                        <input class="input-small bg-transparent-white-light border-color-transparent w-100 form-control pe-50px ps-20px lg-ps-15px required" type="email" name="email" placeholder="{{ __('footer.newsletter.placeholder') }}" />
                        <input type="hidden" name="redirect" value="">
                        <button class="btn pe-20px submit" aria-label="submit"><i class="icon bi bi-envelope icon-small text-white"></i></button>
                        <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                    </form>
                </div>
                <div class="footer-card">
                    <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                    <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                    <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                    <a href="#" class="d-inline-block me-5px xxl-me-0 align-middle"><img src="https://via.placeholder.com/55x20" alt=""></a>
                </div>
            </div>
            <!-- end footer column -->
        </div>
        <div class="border-top border-color-transparent-white-light pt-35px pb-35px text-center">
            <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22">The contents of this website are intended to be used within the <a href="https://vatsim.net/" target="_blank" class="text-white text-decoration-line-bottom">VATSIM network</a> and must not be used for real world aviation. VATMEX is a division of VATSIM and is governed by their <a href="https://vatsim.net/docs/policy/air-traffic-control-frequency-and-information-management-policy" target="_blank" class="text-white text-decoration-line-bottom">policies and regulations</a>.</span>
        </div>
    </div>
</footer>
