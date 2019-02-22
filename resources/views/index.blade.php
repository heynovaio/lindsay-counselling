@extends('layouts.app')
@section('content')

<div class="above-the-fold">
  <div class="pink"></div>
  <section class="hero">
    <div class="grid">
      <div class="heading-text grid-item">
        <p class="title">Counsellor and Parenting Specialist</p>
        <h1>Creating Calm Within the Chaos</h1>
        <p>Healping parents, caregivers, and service providers stay calm, connected and in control</p>
        <a href="#" class="btn">Book a Free Consult</a>
      </div>
      <div class="grid-item bird-img">
        <img class="hummingbird" src="@asset('images/hummingbird.png')" alt="watercolour painting of hummingbird">
      </div>
      <div class="side-nav grid-item">
        <h3>Counselling Services</h3>
        <ul>
          <li><a href="/services/families">Parents<i class="arrow right"></i></a></li>
          <li><a href="#">Caregivers<i class="arrow right"></i></a></li>
          <li><a href="#">Service Providers<i class="arrow right"></i></a></li>
          <li><a href="#">Indigenous Resources<i class="arrow right"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
</div>

<section class="what-section">
  <div class="container">
    <div class="flowers">
      <div class="grid">
        <div class="box-container">
          <h2>Conselling for</h2>
          <p class="subtitle">Parents, Cargivers, and Service Providers</p>
          <p>I am a Registered Therapeutic Counsellor and Parenting Specialist that utilizes a multi-cultural, person-centered approach to counselling and coaching.  Every session is tailored to your individual experiences and desired outcomes.</p>
          <a href="#" class="btn">See all Services</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="how-section">
  <div class="container">
    <div class="grid">
      <div class="box-container">
        <h2>I Can Help</h2>
        <p>I provide a safe and relaxing space for families, caregivers, and service providers to establish a supportive and trusting therapeutic relationship.</p>
        <p>My counselling approach is person-centered; a  strengths-based approach that allows my clients to take the lead and discover their own solutions. I act as a compassionate facilitator, listening without judgement and providing encouraging support.</p>
        <a href="#" class="btn">Book a Free Consultation</a>
      </div>
    </div>
  </div>

</section>

<section class="services-section">
  <div class="container">
    <div class="grid">
      <div class="services-heading">
        <h2>Counselling Services</h2>
        <p>I provide a safe and relaxing place for children, adults, caregivers, and service providers.</p>
      </div>
    </div>

     <div class="grid services-grid">
        <div class="services-box box-1">
          <h3>Parents</h3>
          <ul>
            <li>Family relationships</li>
            <li>Blended families</li>
            <li>Teen depression & anxiety</li>
            <li>ADHD, FASD & autism</li>
            <li>Divorce, separation, and co-parenting</li>
            <li>Trauma & attachment difficulties</li>
            <li>Managing challenging behaviours</li>
            <li>Self-care strategies</li>
          </ul>
          <div class="btn">View Parents</div>
        </div>

        <div class="services-box box-2">
          <h3>Caregivers</h3>
          <ul>
            <li>Of individuals with developmental disabilities</li>
            <li>Of children in or from  out-of-home care</li>
            <li>Of family members & elders</li>
            <li>Of individuals with mental health needs</li>
          </ul>
          <div class="btn">View Cargivers</div>
        </div>

        <div class="services-box box-3">
          <h3>Service Providers</h3>
          <ul>
            <li>Frontline workers</li>
            <li>Police, fire, and ambulance professionals</li>
            <li>Nurses & social workers</li>
            <li>Military personnel</li>
            <li>Teachers & education Assistants</li>
          </ul>
          <div class="btn">View Service Providers</div>
        </div>

        <div class="services-box box-4">
          <h3>Indigenous Perspectives</h3>
          <ul>
            <li>Cultural identity</li>
            <li>Teachers & education assistants</li>
            <li>Kiyawow Peer Parenting Métis Online Program</li>
            <li>1:1 Indigenous Parenting Program</li>
            <li>Counselling & coaching for parents of children at risk of being removed</li>
            <li>Youth cultural connections, in office or outreach</li>
          </ul>
          <div class="btn">View Indigenous Perspectives</div>
        </div>
      </div>
  </div>

</section>

<section class="about-section">
  <div class="container">
    <div class="grid about-grid">
      <div class="about-img">
        <img class="lindsay-pic" src="@asset('images/about.jpg')" alt="Photo of Lindsay Trowell">
      </div>
      <div class="text-container">
        <h2>Hi, I'm Lindsay</h2>
        <p>I am a Registered Therapeutic Counsellor and Parenting Specialist.</p>
        <p>I have been working with children, families, caregivers, and service providers in various health settings for the past 18 years, on the South Vancouver Island lands of the Lekwungen and WSÁNEĆ Peoples including T’Sooke and Scia’New Nations in which, I live work and play.</p>
        <p>I believe that, given the appropriate tools and resources, coupled with an unwavering support network, all of us have the capacity to foster resilience, calmness, and positive connections.</p>
        <div class="btn">Read More</div>
      </div>
    </div>
  </div>
</section>

<section class="testimonial-section">
  <div class="container">
    <div class="text-container">
      <h2>A few words from others...</h2>
      <p>“I found Lindsay to be professional, a good listener, trustworthy, straightforward and extremely knowledgeable on the subject I was dealing with. She shared her wealth of information and experience, freely and professionally which enabled and empowered me and my daughter towards intelligent direction.  Lindsay's experience and support is continuously highly beneficial to me and my family."</p>
      <p class="quote-name">- J.B.</p>
    </div>
  </div>
</section>

<section class="contact-section">
  <div class="container">
    <div class="contact-container">
      <div class="grid">
        <div class="text-container">
          <h2>I'd love to hear from you</h2>
          <p>Taking the first step can feel daunting, but you deserve to feel safe and be heard. I invite you to contact me for a no-obligation phone consultation.</p>
        </div>
      </div>

      <div class="grid contact-info">
        <div class="form-container">
          <form class="" action="index.html" method="post">
            <label for="name">Email</label>
            <input type="text" id="name" name="Email" value="">
            <label for="email">First Name</label>
            <input type="email" id="email" name="" value="">
            <label for="message">Your Message</label>
            <textarea id="message" name="textarea"></textarea>
            <input type="submit" class="btn">
          </form>
        </div>

        <div class="contact-info-container">
          <div class="contact-details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="address">
              <p>Located in the Westshore Area</p>
              <p>102-3212 Jacklin Road</p>
              <p>In the Stillpoint Acupuncture Clinic</p>
            </div>
          </div>
          <div class="contact-details">
            <i class="fas fa-phone"></i>
            <p>250-217-4536</p>
          </div>
          <div class="contact-details">
            <i class="fas fa-envelope"></i>
            <p>Lindsay.trowell@gmail.com</p>
          </div>
          <div class="btn"><i class="fas fa-download"></i>Download intake form</div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- add htm here -->

@endsection
