<div class="nk-footer nk-auth-footer-full">
  <div class="container wide-lg">
    <div class="row g-3">
      <div class="col-lg-6 order-lg-last">
        <ul class="nav nav-sm justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Terms & Condition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
          <li class="nav-item dropup">
            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown"
               data-offset="0,10">
              @if(App::isLocale('en'))
                <span>English</span>
              @else
                <span>Spanish</span>
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <ul class="language-list">
                <li>
                  <a href="#" class="language-item">
                    <img src="{{asset('dashlite-v2.3/demo2/images/flags/english.png')}}" alt="" class="language-flag">
                    <span class="language-name">English</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="language-item">
                    <img src="{{asset('dashlite-v2.3/demo2/images/flags/spanish.png')}}" alt="" class="language-flag">
                    <span class="language-name">Spanish</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="nk-block-content text-center text-lg-left">
          <p class="text-soft">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>