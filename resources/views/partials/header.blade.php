
<link rel="stylesheet" href="{{ asset('/style.css') }}">

<header>

    <div class="container-testata container-bg">
        <div class="container-img">
          <img src="{{ asset('img/dc-logo.png') }}">
        </div>
        <div class="container-navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Home</a>
        </div>
    </div>

</header>

<style>


.container-testata{
  display: flex;
  align-items: center;

}
header{

  background-color:white;
  padding: 20px 0px;
}
a{
  color: black;
  margin-right: 30px;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
}
.container-img{
  width: 100%;
} 
.container-img > img{
  width: 15%;
} 
.container-navbar{
  width: 75%;
}

</style>