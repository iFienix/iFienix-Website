@extends("frontend.layout.master")

@section('hero')
    @include('frontend.layout.includes.hero')
@stop

@section('content')

<main>
  <section id="our_services" class="our-works">
    <div class="container">
      <h2 class="head-color font-jav">Our Services</h2>
      <p class="text-color">Discover how <span class="ifieniex">IFieniex</span> can help your business succeed with our range of expert services, from web design and marketing to branding and visual identity.</p>
      <div class="our-work">
        <div>
          <div class="work">
            <a href="#design">
              <div class="work-img">
                <img src="{{ asset('assets/images/web-design.svg')}}" alt="" srcset="" />
              </div>
              <small class="text-color">Web Designing </small>
            </a>
          </div>
          <div class="work">
            <a href="#progrmming">
            <div class="work-img">

                <img src="{{asset('assets/images/work-3.png')}}" alt="" srcset="" />

            </div>
            <small class="text-color">Web Progrmming</small>
          </a>
          </div>

          <div class="work">
            <a href="#blogs">
            <div class="work-img">
                <img src="{{ asset('assets/images/blogs.svg')}}" alt="" srcset="" />
            </div>
            <small class="text-color">Writing Blogs</small>
          </a>
          </div>
          <div class="work">
            <a href="#visual">
            <div class="work-img">

                <img src="{{ asset('assets/images/visualidentityicon.svg')}}" alt="" srcset="" />

            </div>
            <small class="text-color">Visual Identity</small>
          </a>
          </div>


          <div class="work">
            <a href="#markting">
            <div class="work-img">

                <img src="{{ asset('assets/images/web-markting.svg')}}" alt="" srcset="" />

            </div>
            <small class="text-color">Web Marketing</small>
          </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="figma" id="design">
    <div class="container">
      <div class="figma-img even-col">
        <img src="{{ asset('assets/images/figma.png') }}" alt="" srcset="" />
        <img src="{{ asset('assets/images/figmaa.png')}}" alt="" srcset="" />
        <img src="{{ asset('assets/images/figmaa.png')}}" alt="" srcset="" />
        <img src="{{ asset('assets/images/figmaa.png')}}" alt="" srcset="" />
        <small class="font-jav head-color">Figma</small>
      </div>
      <div class="figma-text even-col" >
        <h3 class="font-jav head-color">Web Designing</h3>
        <p class="text-color">
          On our designs we are using the most recent version of Figma, it's known as the most efficient in the design world, that's why we guarantee high quality with modern designs made only for you
        </p>
        <button class="head-color">Learn More</button>
      </div>
    </div>
    <div class="our-projects">
      <div class="project-img-left">
        <img class="pro-1" src="{{ asset('assets/images/flower-site.svg')}}" alt="" />
        <img class="pro-2" src="{{ asset('assets/images/istwird.svg')}}" alt="" />
        <img class="pro-3" src="{{ asset('assets/images/istwird2.svg')}}" alt="" />
      </div>
      <div class="project-img-right">
        <img src="{{asset('assets/images/labtop.svg')}}" alt="" srcset="" />
        <button class="head-color">See all</button>
      </div>
    </div>
  </section>
  <section class="Programming" id="progrmming">
    <img src="{{ asset('assets/images/programming.png')}}" alt="" srcset="" />
    <div class="prog-text">
      <h2 class="head-color font-jav">Web Programming</h2>
      <p class="text-color">
        At <span class="ifieniex">IFieniex</span>, we create custom web applications using the latest programming languages and frameworks. Our team follows agile development methodologies and delivers high-quality, well-documented code that is scalable and secure.
      </p>
      <div class="programming-list text-color">
        <h3>Languages and Frameworks:</h3>
        <ul>
          <li>HTML5, CSS3, JavaScript</li>
          <li>PHP, Python, Ruby</li>
          <li>React, Angular, Vue, Node.js</li>
        </ul>
      </div>
      <button class="head-color">Learn More</button>
    </div>
  </section>
  <section class="blog" id="blogs">
    <div class="container">
      <div class="blog-left even-col">
        <h2 class="font-jav head-color">Writing Blogs</h2>
        <p class="text-color">
          At <span class="ifieniex">IFieniex</span>, we specialize in creating engaging blog content that attracts and engages potential customers, builds brand awareness, and drives conversions. Our team of experienced writers follows best practices for blog writing, such as structuring posts for readability, optimizing headlines and visuals, and incorporating keywords for SEO.
          </p>
          <p class="text-color">
          Whether you're launching a new blog, improving an existing one, <span class="ifieniex">IFieniex</span> can help. Contact us today to learn more about our blog writing services.
        </p>
        <button class="head-color">Learn More</button>
      </div>
      <div class="blog-right even-col">
        <img src="{{ asset('assets/images/blog.png')}}" alt="" srcset="" />
      </div>
    </div>
  </section>
  <section class="business-cards" id="visual">
    <img src="{{ asset('assets/images/cards.png')}}" alt="" srcset="" />
    <div class="card-text">
      <h2 class="head-color font-jav">Visual Identity</h2>
      <p class="text-color">
        At <span class="ifieniex">IFieniex</span>, we specialize in designing eye-catching logos, business cards, and brochures that help businesses establish a strong brand identity. We work closely with clients to understand their unique needs and develop designs that reflect their values and resonate with their target audience. Contact us today to learn how we can help your business stand out from the competition.
      </p>
      <button class="head-color">Learn More</button>
    </div>
  </section>
  <section class="marketting" id="markting">
    <div class="container">
      <img class="d-in-mob" src="{{ asset('assets/images/call.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/facebook.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/global.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/insta.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/like.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/lines.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/love100.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/share.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/target.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/twitt.png')}}" alt="" />
      <img class="d-in-mob" src="{{ asset('assets/images/whats.png')}}" alt="" />
      <div class="market">
        <h2 class="head-color font-jav">Marketting</h2>
        <p class="text-color">
          Our marketing services are designed to help businesses of all sizes connect with their target audience and achieve their marketing goals. From developing a comprehensive marketing strategy to executing targeted campaigns, we offer a range of services to help our clients succeed.
        </p>
        <button class="head-color">Learn More</button>
      </div>
    </div>
  </section>

  <section class="about-us" id="about-us">
    <img src="{{ asset('assets/images/about-us.png')}}" alt="">
    <div class="container">
      <div class="about-us-content">
        <div class="about-cont-header">
          <h3>About Us</h3>
          <p>IFIENIX is your all-in-one digital partner.</p>
        </div>
        <div class="about-us-card">
          <div class="about-cont-body">
            <div class="card-about-us">
              <div class="card-img">
                <img src="{{ asset('assets/images/team.svg')}}" alt="team">
              </div>
              <div class="card-content">
                <p>Our experienced team includes talented web designers, skilled developers, and marketing experts.</p>
              </div>
            </div>
          </div>
          <div class="about-cont-body">
            <div class="card-about-us">
              <div class="card-img">
                <img src="{{ asset('assets/images/new-computer.svg')}}" alt="team">
              </div>
              <div class="card-content">
                <p>Our team specializes in creating custom websites, innovative solutions, and effective marketing strategies.</p>
              </div>
            </div>
          </div>
          <div class="about-cont-body">
            <div class="card-about-us">
              <div class="card-img">
                <img src="{{ asset('assets/images/clipboard.svg')}}" alt="team">
              </div>
              <div class="card-content">
                <p>Our personalized approach begins with a thorough consultation to understand your unique needs and goals.</p>
              </div>
            </div>
          </div>
          <div class="about-cont-body">
            <div class="card-about-us">
              <div class="card-img">
                <img src="{{ asset('assets/images/clipboard.svg')}}" alt="team">
              </div>
              <div class="card-content">
                <p>We develop a custom plan tailored to your specific requirements..</p>
              </div>
            </div>
          </div>
          <div class="about-cont-body">
            <div class="card-about-us">
              <div class="card-img">
                <img src="{{ asset('assets/images/happy.svg')}}" alt="team">
              </div>
              <div class="card-content">
                <p>We're passionate about delivering exceptional results that exceed your expectations.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section class="next-level">
    <div class="next-level-content">
      <div class="img-left">
        <img src="{{ asset('assets/images/next-level-img-left.svg')}}" alt="contect-us">
      </div>
      <div class="text">
        <h3>Ready to take your business to the next level? </h3>
        <p>Contact us today to schedule a consultation and learn how we can help you achieve your digital objectives</p>
      </div>
      <div class="img-right">
        <img src="{{ asset('assets/images/next-level-img-right.svg')}}" alt="social-media">
      </div>
    </div>
  </section>

  <section id="contact_Us" class="contact-us">
    <img src="{{ asset('assets/images/contact.png')}}" alt="" />
    <div class="container">
      <div class="contact">
        <h2 class="head-color font-jav">Get in Touch</h2>
        <form action="#">
          <div class="group-form">
            <label class="text-color" for="">Name</label>
            <input type="text" />
          </div>
          <div class="group-form">
            <label class="text-color" for="">Email</label>
            <input type="email" />
          </div>
          <div class="group-form">
            <label class="text-color" for="">Message</label>
            <textarea></textarea>
          </div>
          <button type="submit" class="head-color">Contact Us</button>
        </form>
        <div class="social">
          <a href=""><i class="fa-brands fa fa-whatsapp"></i></a>
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-telegram"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>

@stop
