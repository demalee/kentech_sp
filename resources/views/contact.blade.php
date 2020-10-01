@extends('layouts.app')
@section('content')
    <div class="clearfix"></div>
<section class="section-side-image clearfix">
    <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(images/header-inner-1.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt=""/> </div>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                <div class="header-inner less-height">
                    <div class="overlay">
                        <div class="text text-center">
                            <h3 class="uppercase text-white less-mar-1 title"></h3>
                            <h6 class="uppercase text-white sub-title">Leave us your contact details and we’ll get back to you shortly.

                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=" clearfix"></div>
<!--end header section -->

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="current"><a href="#">Contact Classic</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end section-->


<section class="sec-padding section-light">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-sm-12 col-xs-12">




                <div class="text-box white padding-4">
                    <div class="one_half">


                        <div class="cforms_sty3">


                            <div id="form_status"></div>
                            <form type="POST" id="gsr-contact" onSubmit="return valid_datas( this );">
                                <label class="label">Name <em>*</em></label>
                                <label class="input">
                                    <input type="text" name="name" id="name">
                                </label>

                                <div class="clearfix"></div>

                                <label class="label">E-mail <em>*</em></label>
                                <label class="input">
                                    <input type="email" name="email" id="email">
                                </label>

        <div class="clearfix"></div>


                                <label class="label">Phone <em>*</em></label>
                                <label class="input">
                                    <input type="text" name="phone" id="phone">
                                </label>

                                <div class="clearfix"></div>

                                <label class="label">Country <em>*</em></label>
                                <label class="input">
                                    <input type="text" name="subject" id="subject">
                                </label>

                                <div class="clearfix"></div>

                                <label class="label">Commentary <em>*</em></label>
                                <label class="textarea">
                                    <textarea rows="5" name="message" id="message"></textarea>
                                </label>

                                <div class="clearfix"></div>
                                <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                <button type="submit" class="button">Send Message</button>

                            </form>


                        </div>

                    </div></div><!-- end .smart-wrap section -->
                <!-- end .smart-forms section -->
            </div>
            <!--end item-->



        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection
