<?php


    if(isset($_POST['contact'])){
        $contact = $obj->send_mail();
    }




?>
    
    <body class=" bg-primary">
        <?php if(isset($contact)){ echo $contact; }?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div style="top: 72px;" class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Contact Us</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="name">Enter Your Name</label>
                                                <input class="form-control py-4" id="name" type="text" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Enter Your Email</label>
                                                <input class="form-control py-4" id="email" type="email" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="subject">Enter Subject</label>
                                                <input name = "subject" class="form-control py-4" id="subject" type="text" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="message">Enter Your Message</label>
                                                <br>
                                                <textarea style="outline:none;" name="message" id="message" cols="48" rows="0" placeholder=""></textarea>
                                            </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-center">
                                            <input type="submit" name="contact" class=" btn btn-primary" value="Contact Now">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </body>