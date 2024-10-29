@extends('layouts.app')
@section('content')

<!-- page title -->
<div class="about-bg centered">
    <div class="container">
        <div class="text">FAQ’S</div>
    </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
    <div class="container">
        <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> FAQ’S
            <!-- <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div> -->
        </div>
    </div>
</div>
<!-- bread crumb end -->

<!-- faq sectione -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-10 col-xs-12 faq-colmun">
                <div class="faq-content">
                    <div class="accordion-box">
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">
                                <div class="acc-title">Does it amet ligula vestibulum lorem nec?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn active">
                                <div class="acc-title">What does cras consectetur velit odio vulputate?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content collapsed">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">
                                <div class="acc-title">How are Nam eget sapien enim gravida varius?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">
                                <div class="acc-title">Can you augue massa elementum molestie id felis?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">
                                <div class="acc-title">Do you augue elementum molestie felis turpis?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">
                                <div class="acc-title">Where does Integer sed turpis pulvinar tristique?</div>
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="acc-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laboed ut perspiciatis unde omnis iste natus error sit voluptatem.accusantium doloremque laudantiu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-8 col-xs-12 faq-colmun">
                <div class="faq-sidebar">
                    <div class="title">
                        <h4>Ask Questions?</h4>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="First name">
                        <input type="email" placeholder="Email Address">
                        <textarea placeholder="Message"></textarea>
                        <div class="button"><a href="#" class="btn-one style-one radi">Send Message</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq sectione -->

@endsection