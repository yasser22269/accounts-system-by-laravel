
@extends('layouts.admin')
@section('title','home')

@section('style')
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<style>
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
@endsection

@section('content')
  <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- eCommerce statistic -->
     <div class="row">
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="info">{{$Userscount}}</h3>
                  <h6>Students</h6>
                </div>
                <div>
                  <i class="icon-user info font-large-2 float-right"></i>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">6</h3>
                  <h6>Buses</h6>
                </div>
                <div>
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">12</h3>
                  <h6>Drivers</h6>
                </div>
                <div>
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="danger">10</h3>
                  <h6>Appointment Count</h6>
                </div>
                <div>
                  <i class="icon-clock danger font-large-2 float-right"></i>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>



    </div>
  
    <div class="row">
        <div class="col-12">
            <div id="map" class="mapboxgl-map"></div>
        </div>
    </div>

@endsection


@section('js')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>



<script>
		mapboxgl.accessToken = 'pk.eyJ1IjoieWFzc2VyMjIyNjkiLCJhIjoiY2t6ZDI1MzhvMDNtdTJvb2NvMjQ1NmRhMyJ9.AVRj1hdqbXC1ihGCU1Kc2Q';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [ 31.816319,31.1803793], // starting position [lng, lat]
        zoom: 10 // starting zoom
    });

    const marker2 = new mapboxgl.Marker({ color: 'black' })
.setLngLat([31.816319, 31.1803793])
.addTo(map);

</script>
@endsection
{{-- c9312c5541374681 --}}