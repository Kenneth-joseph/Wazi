@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image"
            style="background-image: url(https://bit.ly/38E8lAB);">
        
            <!-- Content -->
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
                <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                <p>The Mental  Health  of a person is what matters  most in life</p>
                <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
            </div>
            </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- *************************************************************** --}}
        <div class="col-md-4">
            <!-- Card -->
            <div class="card">
        
                <!-- Card image -->
                <div class="view overlay">
                <img class="card-img-top" src="https://bit.ly/38ytIUe" alt="Card image cap">
                <a href="{!! url('/images'); !!}">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>
            
                <!-- Button -->
                {{-- <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                    class="fas fa-chevron-right pl-1"></i></a>
             --}}content-image
                <!-- Card content -->
                <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">Image Contents</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            
                </div>
            </div>
          <!-- Card -->
        </div>
    </div>
@endsection
