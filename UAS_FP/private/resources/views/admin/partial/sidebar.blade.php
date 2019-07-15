<div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>

                    <li class="active ripple">
                      <a href="{{route('beranda')}}"><span class="fa-home fa"></span> Beranda </a>
                    </li>
                    <!-- <li class="active ripple">
                      <a href="{{route('anggota')}}"><span class="fa fa-users"></span> Data User</a>
                    </li> -->
                    <li class="active ripple">
                      <a href="{{route('rumah')}}"><span class="fa fa-area-chart"></span> Data Rumah</a>
                    </li>                    
                    <li class="active ripple">
                      <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </div>
            </div>
