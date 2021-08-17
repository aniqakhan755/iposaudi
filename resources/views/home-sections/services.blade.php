<!-- Services Section Start -->
<div id="rs-services" class="rs-services style9 shape-bg2 sm-pt-72">
    <div class="container">
        <div class="sec-title text-center mb-119 md-mb-80 sm-mb-42">
            <div class="sub-title gray-color">What we do</div>
            <h2 class="title mb-0">{{$heading->service_heading}}<span class="d-block blue-color">{{$heading->service_subheading}}</span></h2>
        </div>
        <div class="row gutter-16">
            @foreach($service_configurations as $index => $service_configuration)
                <?php $ext = '.png';
                $index = $index +1; ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                    <div class="service-wrap text-center">
                        <div class="icon-part">
                            <img src="assets/images/service-icons/{{$index.$ext}}" alt="{{$service_configuration->service_title}}">
                        </div>
                        <h5 class="title">{{$service_configuration->service_title}}</h5>
{{--                        <div class="desc">{{$service_configuration->service_desc}}</div>--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="bottom-link text-center mt-43 sm-mt-23">
    Looking more better services <a href="{{route('services.read-more')}}">click here</a> to view all services.
</div>
<!-- Services Section End -->
