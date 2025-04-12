
@extends('layouts.web-app')
@section('web-main')
<!--===== CONTACT AREA STARTS =======-->
<div class="contact-inner-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-inner-boxarea">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="contact-input-section">
                                <h3>Send us a Message</h3>
                                <div class="space16"></div>
                                <p>Contact us today and let's start your journey to urban living excellence. <br> Our team at Hosue is here answer your questions, schedule viewings.</p>
                                <div class="space12"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <input type="number" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <select name="country"  class="nice-select">
                                                <option value="1" data-display="Subject*">Subject*</option>
                                                <option value="">Option 01</option>
                                                <option value="">Option 02</option>
                                                <option value="">Option 03</option>
                                                <option value="">Option 04</option>
                                                <option value="">Option 05</option>
                                                <option value="">Option 06</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <textarea placeholder="Your Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="space32"></div>
                                        <div class="input-area text-end">
                                           <button type="submit" class="header-btn4">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="{{ asset('public') }}/front-assets/img/icons/contact-icon1.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Call</p>
                                    <a href="tel:+91 7026600000">+91-7026600000</a>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="{{ asset('public') }}/front-assets/img/icons/contact-icon2.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Email</p>
                                    <a href="mailto:info@hosuevilla.com">info@nldinfra.com</a>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="{{ asset('public') }}/front-assets/img/icons/contact-icon3.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Schedule Time</p>
                                    <a href="#">24/7 Anytime All Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space80"></div>
    </div>
</div>

@endsection
