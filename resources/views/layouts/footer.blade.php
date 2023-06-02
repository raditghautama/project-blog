<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
            <p class="text-white"><i class="fa fa-map-marker-alt mr-2 me-2"></i>123 Street, New York, USA</p>
            <p class="text-white"><i class="fa fa-phone-alt mr-2 me-2"></i>+62 8122 2400 511</p>
            <p class="text-white"><i class="fa fa-envelope mr-2 me-2"></i>InfoBlog@gmail.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start gap-1">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 ">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 text-decoration-none"
                        href="">Business</a>
                    <a class="text-decoration-none" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small  text-uppercase text-white font-weight-medium text-decoration-none" href="">Lorem
                    ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 text-decoration-none"
                        href="">Business</a>
                    <a class="text-decoration-none" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small  text-uppercase text-white font-weight-medium text-decoration-none" href="">Lorem
                    ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
            <div class="">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 text-decoration-none"
                        href="">Business</a>
                    <a class="text-decoration-none" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small  text-uppercase text-white font-weight-medium text-decoration-none" href="">Lorem
                    ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
            <div class="m-n1">
                @foreach ($provinces as $province)
                    <a href="{{ route('artikel.provinsi', $province->slug) }}"
                        class="btn btn-sm btn-secondary m-1">{{ $province->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flickr Photos</h5>
            <div class="row">
                @foreach ($articles as $item)
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="{{ url('storage/' . $item->cover) }}"
                                alt=""></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#" class="text-decoration-none">BlogKuliner</a>. All Rights
        Reserved.

</div>
<!-- Footer End -->
