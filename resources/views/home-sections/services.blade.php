<!-- Services Section Start -->
<div id="rs-services" class="rs-services style9 shape-bg2 sm-pt-72 sm-pb-72">
    <div class="container">
        <div class="sec-title text-center mb-119 md-mb-80 sm-mb-42">
            <div class="sub-title gray-color">What we do</div>
            <h2 class="title mb-0">{{$heading->service_heading}}<span class="d-block blue-color">{{$heading->service_subheading}}</span></h2>
        </div>
        <div class="row gutter-16">
            @foreach($service_configurations as $service_configuration)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                    <div class="service-wrap text-center">
                        <div class="icon-part">
                            <img src="{{asset('assets/images/services/style9/'.$service_configuration->service_icon)}}" alt="">
                        </div>
                        <h5 class="title">{{$service_configuration->service_title}}</h5>
                        <div class="desc">{{$service_configuration->service_desc}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services Section End -->
