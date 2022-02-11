   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{!is_null(global_setting()) ? global_setting()->address : '123 Street, New York, USA'}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{!is_null(global_setting()) ? global_setting()->contact_number : '+012 345 67890'}} </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{!is_null(global_setting()) ? global_setting()->contact_number : 'info@example.com'}} </p>
                <div class="d-flex pt-2">
                    @if (!is_null(global_setting()) && global_setting()->facebook != null)
                    <a class="btn btn-outline-light btn-social" href="{{global_setting()->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if (!is_null(global_setting()) && global_setting()->facebook != null)
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    @endif
                    @if (!is_null(global_setting()) && global_setting()->facebook != null)
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    @endif
                    @if (!is_null(global_setting()) && global_setting()->facebook != null)
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>

            <div class="col-lg-4">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Footer End -->
