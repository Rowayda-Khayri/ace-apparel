



@extends('adminLayout')


@section('adminPageContent')


<h1> Add Contact Info </h1>

</br>


<form method="POST" action="/admin/contactInfo/store">
    
    
    
    <label> Address :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="address"  required></textarea>
                  
        
    </br></br>
    
    <label> Phone :</label>
    <input  type="text" name="phone" value="" required>
    
    </br></br>
    
    <label> Email :</label>
    <input  type="text" name="email" value="" required>
    
    </br></br>
    
     <label> Facebook :</label>
    <input  type="text" name="facebook" value="" required>
    
    </br></br>
    
     <label> Twitter :</label>
    <input  type="text" name="twitter" value="" required>
    
    </br></br>
    
    <label> Bussiness Hours :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="hours" placeholder="Monday - Friday - 9am to 5pm / Sunday - Closed" required></textarea>
    <!--<input  type="text" name="postBody" value="" required>-->
    </br></br>
    
    
    
    
    
    
    <input  type="submit" name="add" value="Store" class="btn btn-primary" />
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!--<button type="submit">ADDDD</button>-->
    
</form>
    





<!--<div class="container">
        
    <div class="col-md-6">

            <h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.</p>

            <p>Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.</p>

            <hr>

            <h4 class="heading-primary">The <strong>Office</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
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
                    <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
            </ul>

    </div>
</div>-->






   
@stop

