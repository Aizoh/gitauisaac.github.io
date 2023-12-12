@extends('layouts.app')
@section('content')
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
    
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 sticky-lg-top vh-100">
                        <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                            <img class="w-100 img-fluid mb-4" src="img/isaac.png" alt="Image">
                            <h1 class="text-primary mt-2">Gitau Isaac</h1>
                            <div class="mb-4" style="height: 22px;">
                                <h4 class="typed-text-output d-inline-block text-light"></h4>
                                <div class="typed-text d-none">System Designer, Web Developer, Full stack Developer, Apps Designer, Apps Developer</div>
                            </div>
                            <div class="d-flex justify-content-center mt-auto mb-3">
                                <a class="btn btn-secondary btn-square mx-1" href="https://twitter.com/gitau_isaac_" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square mx-1" href="https://www.linkedin.com/in/gitau-isaac-maina/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square mx-1" href="https://www.instagram.com/gitau_zack/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="d-flex align-items-end justify-content-between border-top">
                                <a href="https://drive.google.com/file/d/1u-xj9BP43K80z9hznyk7yH0Xmc5jFeba/view?usp=sharing" class="btn w-50 border-end" target="_blank">Download CV</a>
                                <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- About Start -->
                        <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="title pb-3 mb-5">About Me</h1>
                            <p>I bring a wealth of experience in the dynamic realms of IT, encompassing mobile app development, web development, software engineering,
                                database administration, network management, and leading technical support teams. 
                                My diverse expertise spans across multiple domains, ensuring a comprehensive understanding of the technological landscape. 
                                This breadth of skills allows me to navigate complexities with agility and precision, delivering innovative solutions
                                 and robust support in every facet of IT development and maintenance.</p>
                            <div class="row mb-4">
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Name:</span> Gitau Isaac
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Birthday:</span> Everyday
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Degree:</span> Bsc IT
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Experience:</span> 5 Years
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Phone:</span> +254 718582904
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Email:</span> gitauisaacmaina@gmail.com
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Address:</span> Nairobi, Kenya
                                </div>
                                <div class="col-sm-6 py-1">
                                    <span class="fw-medium text-primary">Available for Business:</span> Yes
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-4 col-lg-6 col-xl-4">
                                    <div class="d-flex bg-secondary p-4">
                                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                                        <div class="ps-3">
                                            <p class="mb-0">Years of</p>
                                            <h5 class="mb-0">Experience</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6 col-xl-4">
                                    <div class="d-flex bg-secondary p-4">
                                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                        <div class="ps-3">
                                            <p class="mb-0">Happy</p>
                                            <h5 class="mb-0">Clients</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6 col-xl-4">
                                    <div class="d-flex bg-secondary p-4">
                                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">20</h1>
                                        <div class="ps-3">
                                            <p class="mb-0">Complete</p>
                                            <h5 class="mb-0">Projects</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- About End -->
    
                        <!-- Skills Start -->
                        <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="title pb-3 mb-5">Skills</h1>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">PHP</p>
                                            <p class="mb-2">95%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">CSS</p>
                                            <p class="mb-2">85%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Python</p>
                                            <p class="mb-2">85%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Database Administration</p>
                                            <p class="mb-2">90%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Java</p>
                                            <p class="mb-2">95%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Git</p>
                                            <p class="mb-2">85%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Skills End -->
    
                        <!-- Expericence Start -->
                        <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="title pb-3 mb-5">Expericence</h1>
                            <div class="border-start border-2 border-light pt-2 ps-5">
                                <div class="position-relative mb-4">
                                    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                    <h5 class="mb-1">Systems and Database Administrator</h5>
                                    <p class="mb-2">Quest Holdings Ltd | <small>2023 - Currently</small></p>
                                    <p>I specialize in system development, administration, and maintenance across software, databases, networks, and hardware. 
                                        My expertise ensures seamless integration between software innovation and robust hardware reliability,
                                         fostering operational efficiency and technological resilience within organizations.</p>
                                </div>
                                <div class="position-relative mb-4">
                                    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                    <h5 class="mb-1">Solution Analyst</h5>
                                    <p class="mb-2">Novel Technologies E.A Ltd | <small>March 2023 - July 2023</small></p>
                                    <p>Delivering integrated software, network, and hardware solutions for diverse client needs at Novel Technologies. 
                                        My focus is on creating tailored, effective solutions to drive technological excellence and client satisfaction.</p>
                                </div>
                                <div class="position-relative mb-4">
                                    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                    <h5 class="mb-1">Web Designer</h5>
                                    <p class="mb-2">Acewells Technologies | <small>June 2020 – Jan 2023 </small></p>
                                    <p>I contributed to a versatile technical team managing both software development and hardware maintenance for our diverse clientele. </p>
                                </div>
                            </div>
                        </section>
                        <!-- Expericence End -->

                        <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="title pb-3 mb-5">Education</h1>
                            <div class="border-start border-2 border-light pt-2 ps-5">
                                <div class="position-relative mb-4">
                                    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                    <h5 class="mb-1">Bsc IT</h5>
                                    <p class="mb-2">Jomo Kenyatta University of Agriculture and Technology | <small>2015 - 2019</small></p>
                                    <p>Programming languages, software development methodologies, networking principles, database management, 
                                    cybersecurity fundamentals, and information systems analysis.</p>
                                </div>
                            </div>
                        </section>

                        <!-- Education End -->
                        
                        <!-- Services Start -->
                        <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="title pb-3 mb-5">Services</h1>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="service-item">
                                        <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                        <h5 class="mb-2">Web Design</h5>
                                        <p class="mb-0">Crafting visually stunning and user-friendly websites that resonate with audiences. 
                                            From conceptualizing layout designs to ensuring seamless functionality,</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-item">
                                        <i class="fab fa-2x fa-android mx-auto mb-4"></i>
                                        <h5 class="mb-2">Apps Development</h5>
                                        <p class="mb-0">Bespoke app development, crafting tailored solutions that blend intuitive design with seamless functionality. 
                                            From concept to deployment, I create user-centric apps that stand out in today's competitive digital landscape.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-item">
                                        <i class="fa fa-2x fa-cog mx-auto mb-4"></i>
                                        <h5 class="mb-2">Systems Development</h5>
                                        <p class="mb-0">Combine innovation, adaptability, and a keen understanding of evolving technologies to deliver top-tier systems that drive operational excellenc</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-item">
                                        <i class="fa fa-2x fa-credit-card mx-auto mb-4"></i>
                                        <h5 class="mb-2">Payments Integrations</h5>
                                        <p class="mb-0">Seamless payment integration solutions. I bring expertise in integrating various payment gateways into websites or applications, 
                                            ensuring secure and user-friendly transactions.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Services End -->
    
                        <!-- Contact Start -->
                        {{-- <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                            <h1 class="title pb-3 mb-5">Contact Me</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-secondary" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0 bg-secondary" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-secondary" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </section> --}}
                        <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                            <h1 class="title pb-3 mb-5">Get in Touch</h1>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <p><i class="fas fa-phone-alt"></i> Phone: +254 718582904</p>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fas fa-envelope"></i> Email: gitauisaacmaina@gmail.com</p>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Contact End -->
@endsection