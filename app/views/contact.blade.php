@extends ('layouts.master')

@section ('content')
<div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">

                        <div class="widget">
                            <h3 class="widget-title style5">Contact</h3>
                            <p>Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Morbi sodales, ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.</p>
                            <ul class="clearfix">
                                <li>
                                    <p><span class="fa fa-envelope-o"></span>Email: <a href="mailto:humanity@gmail.com">humanity@gmail.com</a></p>
                                </li>
                                <li>
                                    <p><span class="fa fa-phone"></span>Phone: (+84) XXX-349-0600</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-fax"></span>Fax: (+84) 740-349-0600</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-map-marker"></span>Address: Technext,Sylhet</p>
                                </li>
                            </ul>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-7 -->

            <div class="contact-form-full col-md-4 col-sm-4 col-xs-11">

              <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />

                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
          </div>

@stop