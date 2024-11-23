@extends('users.pages.template')

@section('content')
<div class="mapouter">
    <div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14477.256537922056!2d67.1518249!3d24.8872643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1729225161500!5m2!1sen!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
            href="https://www.emojilib.com/"></a></div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 350px;
            width: 100%;
        }
    </style>
</div>
<section class="contact-section">
    <div class="map"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>Get in touch with us & <br>send us message today!</h2>
                    <p>Saasbiz is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an
                        employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
                    <h3>Aptech Metro Star Gate Shah Faisal Karachi</h3>
                    <h4><span>Email:</span> aptechmetrostargate@gmail.com <br> <span>Phone:</span> (021) 34580415 <br>
                        <span>Fax:</span> (21) 34580425</h4>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <form action="https://html.dynamiclayers.net/dl/barbershop/contact.php" method="post"
                        id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5"
                                    class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default_btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
