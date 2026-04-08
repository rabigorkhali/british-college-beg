@extends('main')
@section('title', '| Homepage')
@section('stylesheets')
@endsection
@section('content')
<div id="" class="container-fluid" style="background-color:#151515;">
    <div class="padding60" data-bgcolor="#151515">
        <div class="col-md-8"><br><br><br><br><br>
          <h2 class="mb-3">Our Team</h2>
          <p>Meet the Exceptional Minds at British Education Group (BEG): Our Team of Dedicated Educators and Visionaries</p>
          <h3>Member</h3>
          <div class="row g-4 team">
               <div class="col-md-3">
                    <img src="../images/team/rajen.jpg" class="img-fluid" alt="">
                    <p>Rajen Kandel</p>
                    <span>Managing Director</span>
               </div>
               <!-- <div class="col-md-3">
                    <img src="../images/team/mahendra.jpg" class="img-fluid" alt="">
                    <p>Mahendra Raj Kandel</p>
                    <span>Executive Director</span>
               </div> -->
               <div class="col-md-3">
                    <img src="../images/team/mike.jpeg" class="img-fluid" alt="">
                    <p>Mike Griffiths</p>
                    <span>Non-Executive Director</span>
               </div>
               <!-- <div class="col-md-3">
                    <img src="../images/team/MaryBishop.jpg" class="img-fluid" alt="">
                    <p>Mary Bishop</p>
                    <span>Non-Executive Director</span>
               </div> -->
          </div>
          <h3>Advisors</h3>
          <div class="row g-4 team">
               <div class="col-md-3">
                    <img src="../images/team/PaulCleves.jpg" class="img-fluid" alt="">
                    <p>Paul Cleves</p>
               </div>
               <div class="col-md-3">
                    <img src="https://www.thebritishcollege.edu.np/uploads/teams/1431318126Dr._Arjun.jpg" class="img-fluid" alt="">
                    <p>Dr. Arjun Kumar Karki</p>
               </div>
               <div class="col-md-3">
                    <img src="https://www.thebritishcollege.edu.np/uploads/teams/MichaelRutland.jpg" class="img-fluid" alt="">
                    <p>Michael Rutland OBE</p>
               </div>
               <!-- <div class="col-md-3">
                    <img src="https://www.thebritishcollege.edu.np/uploads/teams/PaulCleves.jpg" class="img-fluid" alt="">
                    <p>Paul Cleves MBE</p>
               </div> -->
               <div class="col-md-3">
                    <img src="https://www.thebritishcollege.edu.np/uploads/teams/1431318107chiran.jpg" class="img-fluid" alt="">
                    <p>Dr (H.C.) Chiran S. Thapa</p>
               </div>
          </div>
          <div class="row g-4 team">
               <div class="col-md-3">
                    <img src="https://www.thebritishcollege.edu.np/uploads/teams/1584089178B-and-M20Fergus20Lyon.jpg" class="img-fluid" alt="">
                    <p>Dr Fergus Lyon</p>
               </div>
               <div class="col-md-3">
                    <img src="../images/team/john-park.jpg" class="img-fluid" alt="">
                    <p>John B. Park</p>
                    <span>IT Advisor</span>
               </div>
          </div>
        </div>
    </div>
</div>

<style>
     .team {}
     .team img {width: 100%; height: 300px; object-fit: cover; border-radius: 10px;  border-right: 3px solid transparent; border-bottom: 3px solid transparent;}
     .team img:hover { border-right: 3px solid #c91530; border-bottom: 3px solid #c91530;}
     .team  p {color: white; font-size: 16px; margin: 10px 0;}
</style>

@endsection