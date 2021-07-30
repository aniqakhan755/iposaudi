<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="rs-contact" class="rs-contact style1 inner">
            <form id="contact-form" class="contact-form" method="post" action="{{route('iposaudi.contact')}}">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-lg-12 white-bg">
                        <div class="sec-title mb-45">
                            <h2 class="title mb-0">Get In Touch</h2>
                        </div>
                        <div id="form-messages"></div>

                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" id="submit" class="btn btn-primary primary btn-submit" value="Submit">
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
