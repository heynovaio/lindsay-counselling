@extends('layouts.app')

<div class="above-the-fold">
  <div class="pink"></div>
  @section('content')
    @include('partials.page-header')


  <section class="hero">
    <div class="grid">
      <div class="heading-text grid-item">
        <h3>Councellor and Parenting Coach</h3>
        <h1>Creating Calm Within the Chaos</h1>
        <p>Healping parents, caregivers, and service providers stay calm, connected and in control</p>
        <div class="btn">Book a Free Consult</div>
      </div>
      <div class="grid-item">
        <img class="hummingbird" src="../../assets/images/hummingbird.png" alt="watercolour painting of hummingbird">
      </div>
      <div class="side-nav grid-item">
        <h3>Counselling Services</h3>
        <ul>
          <li>Parents  ></li>
          <li>Caregivers  ></li>
          <li>Service Providers  ></li>
          <li>Indigenous Resources  ></li>
        </ul>
      </div>
    </div>
  </section>
</div>

<section class="what-section">
  <div class="flowers">
    <div class="grid">
      <div class="box-container">
        <h2>Conselling for</h2>
        <h3>Parents, Cargivers, and Service Providers</h3>
        <p> Lindsay Trowell Counselling is a private practice that utilizes a multi-cultural, person-centered approach to counselling and coaching.  Every session is tailored to your individual experiences and desired outcomes.</p>
        <div class="btn">See all Services</div>
      </div>
    </div>
  </div>
</section>

<section class="how-section">
  <div class="">
    <div class="grid">
      <div class="box-container">
        <h2>I can Help</h2>
        <p>I provide a safe and relaxing space for families, caregivers, and service providers to establish a supportive and trusting therapeutic relationship.</p>
        <p>My counseling approach is person-centered; a non-authoritative approach that allows my clients to take the lead and discover their own solutions. I act as a compassionate facilitator, listening without judgement and provide encouraging support.</p>
        <div class="btn">Book a Free Consultation</div>
      </div>

    </div>
  </div>

</section>

<section class="services-section">
  <div class="grid">
    <div class="services-heading">
      <h2>Counselling Services</h2>
      <p>I provide a safe and relaxing place for children, adults, caregivers, and service providers.</p>
    </div>
  </div>

   <div class="grid services-grid">
      <div class="services-box box-1">
        <h3>Caregivers</h3>
        <ul>
          <li>Of individuals with developmental disabilities</li>
          <li>Of children in or from care systems</li>
          <li>Of family members & elders</li>
          <li>Of individuals with Mental Health needs</li>
        </ul>
        <div class="btn">Learn More</div>
      </div>

      <div class="services-box box-2">
        <h3>Caregivers</h3>
        <ul>
          <li>Of individuals with developmental disabilities</li>
          <li>Of children in or from care systems</li>
          <li>Of family members & elders</li>
          <li>Of individuals with Mental Health needs</li>
        </ul>
        <div class="btn">Learn More</div>
      </div>

      <div class="services-box box-3">
        <h3>Caregivers</h3>
        <ul>
          <li>Of individuals with developmental disabilities</li>
          <li>Of children in or from care systems</li>
          <li>Of family members & elders</li>
          <li>Of individuals with Mental Health needs</li>
        </ul>
        <div class="btn">Learn More</div>
      </div>

      <div class="services-box box-4">
        <h3>Caregivers</h3>
        <ul>
          <li>Of individuals with developmental disabilities</li>
          <li>Of children in or from care systems</li>
          <li>Of family members & elders</li>
          <li>Of individuals with Mental Health needs</li>
        </ul>
        <div class="btn">Learn More</div>
      </div>

    </div>
</section>

<section class="about-section">
  <div class="">
    <div class="about-img">
      <img class="" src="" alt="Photo of Lindsay Trowell">
    </div>

    <div class="text-container">
      <h2>Hi, I'm Lindsay</h2>
      <p>I am a counsellor and parent coach. I have been in the helping profession for 18 years, while specializing in working with individuals and children with disabilities and  complex behavioural challenges.</p>
      <p>As a mother, caregiver and service provider myself, I know how challenging it is to be pulled in many directions and I understand, how difficult fitting in self-care, can be.</p>
      <p>Read more about my story, and what makes me unique as a councellor</p>
      <div class="btn">Learn More</div>
    </div>

  </div>
</section>

<section class="contact-section">
  <div class="">
    <img src="" alt="">
    <div class="contact-container">
      <div class="">
        <h2>I'd love to hear from you</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>

      <div class="">
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
          <div class="contact-icon">
            <img src="" alt="">
            <p>385 Noah Place Suite 878</p>
          </div>
          <div class="">
            <img src="" alt="">
            <p>877-255-7945</p>
          </div>
          <div class="">
            <img src="" alt="">
            <p>info@form.com</p>
          </div>
          <div class="btn"><img class="download-icon"src="" alt="">Download intake form</div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- add htm here -->

@endsection
