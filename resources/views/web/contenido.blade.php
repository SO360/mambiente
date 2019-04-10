@extends('layouts.principal')

@section('meta')
@php
  $hre = route('contenido', [$value->slug]);
@endphp
   <title>{{ $value->title }}</title>
      <meta name="description" content="{{ strip_tags($value->description) }}" />




      <meta property="og:locale" content="es_PE" />
      <meta property="og:site_name" content="http://www.juntosporelmedioambiente.com/" />
      <meta property="og:description" content="{{ strip_tags($value->description) }}" />
      <meta property="og:title" content="{{ strip_tags($value->title) }}"  />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="{{ url($value->imagenDepotTitle_link->path) }}" />
      <meta property="og:image:secure_url" content="{{ url($value->imagenDepotTitle_link->path) }}" />
      <meta property="og:url" content="{{ url($hre) }}" />





<!-- <meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="A Beginner's Guide to Website Speed Optimization (WordPress-Friendly)" />
<meta property="og:description" content="In-depth website speed optimization guide that shows you how important it is to have a snappy website. DIY instructions and tricks to improve load times." />
<meta property="og:url" content="https://kinsta.com/learn/page-speed/" />
<meta property="og:site_name" content="Kinsta Managed WordPress Hosting" />
<meta property="article:publisher" content="https://www.facebook.com/kinstahosting" />
<meta property="article:author" content="https://www.facebook.com/mark.gavalda" />
<meta property="article:tag" content="webdev" />
<meta property="article:tag" content="webperf" />

<meta property="og:image" content="https://kinsta.com/wp-content/uploads/2016/03/website-speed-optimization-2.png" />
<meta property="og:image:secure_url" content="https://kinsta.com/wp-content/uploads/2016/03/website-speed-optimization-2.png" />
<meta property="fb:app_id" content="2389355594711327" /> -->

@endsection
@section('content')
    <style type="text/css">

      .heading-section{
         padding-bottom: 0.5em;
         margin-bottom: 0.5em;
      }
    </style>
    <div class="fh5co-hero fh5co-hero-2">
      <div class="fh5co-overlay"></div>


    </div>
    <!-- end:header-top -->
    <div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

          </div>
        </div>
      </div>
            <style type="text/css">
              #imgH{
                width: 800px;
              }
            </style>
            <div class="container animate-box">
                @php
                  $change= str_replace("\\", "/", $value->imagenDepotContent_link->path);
                  $url2 = url($change);
                @endphp
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8" >
                    <img src="{{ $url2 }}" class="img-responsive" id="imgH">

                  </div>
                </div>


            </div>
    </div>
    <!-- fh5co-blog-section -->
@endsection



