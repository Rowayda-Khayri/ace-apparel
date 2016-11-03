

@extends('layout')


@section('pageContent')



<div role="main" class="main">

<!--        <section class="page-header">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <ul class="breadcrumb">
                                                <li><a href="#">Home</a></li>
                                                <li class="active">Contact Us</li>
                                        </ul>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                        <h1>Contact Us Advanced</h1>
                                </div>
                        </div>
                </div>
        </section>-->

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map"></div>

        <div class="container">

                <div class="row">
                        <div class="col-md-6">

                              

                                

                                <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
                                <form id="contactFormAdvanced" action="#contact-sent" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="true" name="emailSent" id="emailSent">
                                        <div class="row">
                                                <div class="form-group">
                                                        <div class="col-md-6">
                                                                <label>Your name *</label>
                                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <label>Your email address *</label>
                                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="form-group">
                                                        <div class="col-md-12">
                                                                <label>Subject</label>
                                                                <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required>
                                                                        <option value="">...</option>
                                                                        <option value="Option 1">Option 1</option>
                                                                        <option value="Option 2">Option 2</option>
                                                                        <option value="Option 3">Option 3</option>
                                                                        <option value="Option 4">Option 4</option>
                                                                </select>
                                                        </div>
                                                </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                                                </div>
                                        </div>
                                </form>
                        </div>
                        <div class="col-md-6">



                                <hr>

                                <h4 class="heading-primary">The <strong>Office</strong></h4>
                                <ul class="list list-icons list-icons-style-3 mt-xlg">
                                        <li><i class="fa fa-map-marker"></i> <strong>{{$contact->address}}</strong> </li>
                                        <li><i class="fa fa-phone"></i> <strong>Phone:</strong> {{$contact->phone}}</li>
                                        <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">{{$contact->email}}</a></li>
                                </ul>

                                <div class="row lightbox mt-xl" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                                        <div class="col-md-4">
                                                <a class="img-thumbnail" href="img/office/our-office-1.jpg" data-plugin-options='{"type":"image"}'>
                                                        <img class="img-responsive" src="img/office/our-office-1.jpg" alt="Office">
                                                        <span class="zoom">
                                                                <i class="fa fa-search"></i>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="col-md-4">
                                                <a class="img-thumbnail" href="img/office/our-office-2.jpg" data-plugin-options='{"type":"image"}'>
                                                        <img class="img-responsive" src="img/office/our-office-2.jpg" alt="Office">
                                                        <span class="zoom">
                                                                <i class="fa fa-search"></i>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="col-md-4">
                                                <a class="img-thumbnail" href="img/office/our-office-3.jpg" data-plugin-options='{"type":"image"}'>
                                                        <img class="img-responsive" src="img/office/our-office-3.jpg" alt="Office">
                                                        <span class="zoom">
                                                                <i class="fa fa-search"></i>
                                                        </span>
                                                </a>
                                        </div>
                                </div>

                                <hr>

                                <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                                <ul class="list list-icons list-dark mt-xlg">
                                        <li><i class="fa fa-clock-o"></i> {{$hours->content}}</li>
                                        
                                </ul>

                        </div>
                </div>

        </div>

</div>



@stop
