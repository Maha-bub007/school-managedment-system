@extends('frontend.master')
@section('contant')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">About Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="{{url('/about')}}">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">About Us</span>
  </div>
</div>

<div class="container pt-5 mb-5">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline">
              <span>Academics History</span>
            </h2>
          </div>
          <div class="col-lg-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, iure dolorum! Nam veniam tempore tenetur aliquam architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque veritatis numquam placeat?</p>
          </div>
          <div class="col-lg-4">
            <p>Nam veniam tempore tenetur aliquam
            architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque veritatis numquam placeat?</p>
          </div>
        </div>
      </div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <img src="{{asset('frontend/images/course_4.jpg')}}" alt="Image" class="img-fluid"> 
            </div>
            <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Why Academics Works</span>
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{asset('frontend/images/course_5.jpg')}}" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                    <h2 class="section-title-underline mb-5">
                        <span>Personalized Learning</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                    <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                </div>
            </div>
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-mortarboard"></span>
          <h3>Our Philosphy</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-school-material"></span>
          <h3>Academics Principle</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
            Dolore, amet reprehenderit.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-library"></span>
          <h3>Key of Success</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
            Dolore, amet reprehenderit.</p>
        </div>
      </div>
    </div>
  </div>
  

<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>Our Teachers</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 mb-12 mb-lg-12">

        <div class="feature-1 border person text-center">
            <img src="https://scontent.fdac8-1.fna.fbcdn.net/v/t39.30808-6/428707008_7194260333997901_4844654363802640235_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=CB3zIedDyJkAX9u7ZpL&_nc_ht=scontent.fdac8-1.fna&oh=00_AfCx3KDHYndvyLbtRad_SFkoxaE7rOV75wsUWqwSRUCGmQ&oe=66106609" alt="Image" class="img-fluid">
          <div class="feature-1-content">
            <h2>Foyz Ullah</h2>
            <span class="position mb-3 d-block">Hsc Ict Teacher</span>    
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>









<div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h2>Subscribe to us!</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
      </div>
      <div class="col-lg-5">
        <form action="" class="d-flex">
          <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
          <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</div> 
</div>

    
@endsection;