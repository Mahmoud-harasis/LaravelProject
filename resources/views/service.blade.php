@extends('layout.master')
@section('title', 'Contact')

@section('Services_active', 'active')

@section('content')
  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        {{-- ///////////////////////////// --}}

        @foreach ($collection as $item)
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="{{URL::asset("storage/serviceimage/$item->Service_Image")}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                {{$item->Service_Name}}
              </h5>
              <h6>
                {{$item->Service_Price}} JD
              </h6>
              <h6>
                {{$item->Service_Duration}} Hours
              </h6>
              <p>
                {{$item->Service_Description}}
              </p>
            </div>
            <div class="btn-box">
              {{-- create ---------edit --}}
              @if (Route::has('login'))
              @auth
              <a href="{{route('Reservation.show',$item->id)}}">
              @else
              <a href="{{route('Reservation.show',$item->id)}}">
                Book Now
              </a>
              @endif
              @endif
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Electrical
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
            <div class="btn-box">
              <a href="">
                View More
              </a>
            </div>
          </div>
        </div>
{{-- /////////////////////////////////////////////////// --}}
    </div>
  </section>
@endsection
<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                    class="w-100" />
                <a href="#!">
                    <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                    </div>
                    <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                </a>
                </div>
                <div class="card-body">
                <a href="" class="text-reset">
                    <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                    <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
                </div>
            </div>
            </div>
        </div>
    </div>
  </section>
