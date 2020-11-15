
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body,
button {
  font-family: "Poppins", sans-serif;
}

.container {

  min-height: 100vh;
  width: 100%;
  background-image: {{ asset("assets/secre.jpg") }} ;
  background-image: linear-gradient(135deg, #485461 0%, #28313b 74%);
  overflow-x: hidden;
  transform-style: preserve-3d;
}

.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10;
  height: 3rem;
}

.menu {
  max-width: 72rem;
  width: 100%;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
}

.logo {
  font-size: 1.1rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  line-height: 4rem;
}

.logo span {
  font-weight: 300;
}

.hamburger-menu {
  height: 4rem;
  width: 3rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.bar {
  width: 1.9rem;
  height: 1.5px;
  border-radius: 2px;
  background-color: #eee;
  transition: 0.5s;
  position: relative;
}

.bar:before,
.bar:after {
  content: "";
  position: absolute;
  width: inherit;
  height: inherit;
  background-color: #eee;
  transition: 0.5s;
}

.bar:before {
  transform: translateY(-9px);
}

.bar:after {
  transform: translateY(9px);
}

.main {
  position: relative;
  width: 100%;
  left: 0;
  z-index: 5;
  overflow: hidden;
  transform-origin: left;
  transform-style: preserve-3d;
  transition: 0.5s;
}

header {
  min-height: 100vh;
  width: 100%;
  background: url("secre.jpg") no-repeat top center / cover;
  position: relative;
}

.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  /*background-color: rgba(43, 51, 59, 0.8);*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.inner {
  width: 100%;
  text-align: center;
  color: #fff;
  padding: 25rem 2rem  ;
}

.title {
  font-size: 2.7rem;
}

.btn {
  margin-top: 1rem;
  padding: 0.6rem 1.8rem;
  background-color: #1179e7;
  border: none;
  border-radius: 25px;
  color: #fff;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none;
}

.container.active .bar {
  transform: rotate(360deg);
  background-color: transparent;
}

.container.active .bar:before {
  transform: translateY(0) rotate(45deg);
}

.container.active .bar:after {
  transform: translateY(0) rotate(-45deg);
}

.container.active .main {
  animation: main-animation 0.5s ease;
  cursor: pointer;
  transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
}

@keyframes main-animation {
  from {
    transform: translate(0);
  }

  to {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }
}

.links {
  position: absolute;
  width: 30%;
  right: 0;
  top: 0;
  height: 100vh;
  z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
}

ul {
  list-style: none;
}

.links a {
  text-decoration: none;
  color: #eee;
  padding: 0.7rem 0;
  display: inline-block;
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: 0.3s;
  opacity: 0;
  transform: translateY(10px);
  animation: hide 0.5s forwards ease;
}

.links a:hover {
  color: #fff;
}

.container.active .links a {
  animation: appear 0.5s forwards ease var(--i);
}

@keyframes appear {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0px);
  }
}

@keyframes hide {
  from {
    opacity: 1;
    transform: translateY(0px);
  }
  to {
    opacity: 0;
    transform: translateY(10px);
  }
}

.shadow {
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  transform-style: preserve-3d;
  transform-origin: left;
  transition: 0.5s;
  background-color: white;
}

.shadow.one {
  z-index: -1;
  opacity: 0.15;
}

.shadow.two {
  z-index: -2;
  opacity: 0.1;
}

.container.active .shadow.one {
  animation: shadow-one 0.6s ease-out;
  transform: perspective(1300px) rotateY(20deg) translateZ(215px) scale(0.5);
}

@keyframes shadow-one {
  0% {
    transform: translate(0);
  }

  5% {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }

  100% {
    transform: perspective(1300px) rotateY(20deg) translateZ(215px) scale(0.5);
  }
}

.container.active .shadow.two {
  animation: shadow-two 0.6s ease-out;
  transform: perspective(1300px) rotateY(20deg) translateZ(120px) scale(0.5);
}

@keyframes shadow-two {
  0% {
    transform: translate(0);
  }

  20% {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }

  100% {
    transform: perspective(1300px) rotateY(20deg) translateZ(120px) scale(0.5);
  }
}

.container.active .main:hover + .shadow.one {
  transform: perspective(1300px) rotateY(20deg) translateZ(230px) scale(0.5);
}

.container.active .main:hover {
  transform: perspective(1300px) rotateY(20deg) translateZ(340px) scale(0.5);
}

.single-search{
  margin-bottom: auto;
  margin-top: auto;
  height: 40px;
  background-color: #262626;
  width: 0;
  border-radius: 30px;
  padding: 30px;
  position: relative;
}
.c-height{
  height: 100%;
}

.custom-input{
  border: 0;
  outline: 0;
  width: 0;
  line-height: 40px;
  transition: width 0.5s linear;
  background: #262626;
  margin-left: 25px;
  position: relative;
    bottom: 20px;
    color: white;

}
input::-moz-placeholder{
  color: #fff;
  font-size: 20px;
}
.single-search:hover > .custom-input{
padding: 0 10px;
width: 500px;
transition: width 0.5s linear;
}
.single-search > .icon-area{
  background: #fff;
  color: #262626;
  opacity: 1;

}
.icon-area{
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  height: 40px;
  width: 40px;
  float: right;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  text-decoration: none;
  position: absolute;
  top: 0px;
  left: 10px;
}
.fa-search{
  padding-left: 12px;
  font-weight: 900;
  font-family: "Font Awesome 5 Free";

}
    </style>

    <div class="container">
      <div class="navbar">
        <div class="menu">
          <h3 class="logo">Dream <span>Team</span></h3>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">
          <header>

            <div class="overlay">
              <div class="inner">
@include('formprofil')

              </div>
            </div>

          </header>
        </div>

        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>

      <div class="links">
        <ul>

            <li>
              <a href="@route('/')" style="--i: 0.15s;">Welcome</a>
            </li>

            <li>
                <a href="@route('board')" style="--i: 0.2s;">Mes Tableaux </a>
            </li>

            <li>
                <a href="@route('home')" style="--i: 0.25s;">Contact</a>
            </li>

            <li>
                <a href="{{ route('logout') }}" style="--i: 0.3s;" onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
</div>



{{-- <li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
    <a href="{{ route('logout') }}" type="submit" style="--i: 0.3s;">   {{ __('Logout') }}</a>
        @csrf
    </form>
</li> --}}

    <script>
        const hamburger_menu = document.querySelector(".hamburger-menu");
        const container = document.querySelector(".container");

        hamburger_menu.addEventListener("click", () => {
            container.classList.toggle("active");
        });
    </script>
  </body>
</html>