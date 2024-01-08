@php
$menu= config('comics.menu'); 
//dd($menu);   
@endphp
<header>
    <div class="container">
        <div class="container d-flex justify-content-between align-items-center ">
            <div class="logo-img">
                <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc"></a>
            </div>
            <nav class="my-text-condensed">

                <ul class="nav text-secondary fw-bold  text-uppercase">
                    @foreach ($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() == $item['href']? 'active':''}}" href="{{route($item['href'])}}">{{$item['titolo']}}</a>

                    </li> 
                    @endforeach
                
                
                

                </ul>
        </nav>
        </div>
        
    </div>

</header>