<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
  <base href="../../../">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="{{asset('dashlite-v2.3/demo2/images/favicon.png')}}">
  
  <!-- Page Title  -->
  <title>@yield('title') | {{ config('app.name', 'SmartSchool') }}</title>
  
  {{-- Include Styles of Template and SkinTheme --}}
  @include('panels.styles')
  
</head>

<body class="nk-body bg-white npc-default pg-auth no-touch nk-nio-theme ui-bordered">
<div class="nk-app-root">
  <!-- main @s -->
  <div class="nk-main ">
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar">
      <!-- content @s -->
      <div class="nk-content ">
        
        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
          <div class="brand-logo pb-4 text-center">
            <a href="html/index.html" class="logo-link">
              <img class="logo-light logo-img logo-img-lg" src="{{asset('dashlite-v2.3/demo2/images/logo.png')}}" srcset="{{asset('dashlite-v2.3/demo2/images/logo2x.png')}} 2x" alt="logo">
              <img class="logo-dark logo-img logo-img-lg" src="{{asset('dashlite-v2.3/demo2/images/logo-dark.png')}}" srcset="{{asset('dashlite-v2.3/demo2/images/logo-dark2x.png')}} 2x" alt="logo-dark">
            </a>
          </div>
          
          @yield('content')
          
        </div>
        
        @include('layouts.authFooter')
        
      </div>
      <!-- wrap @e -->
    </div>
    <!-- content @e -->
  </div>
  <!-- main @e -->
</div>
<!-- app-root @e -->
@include('panels.scripts')
</body>
</html>
