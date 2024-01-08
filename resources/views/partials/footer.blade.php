@php
    $lists= config('comics.footer-lists');
@endphp

<footer class="my-bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    @foreach ($lists as $item)
                        <div class="col-12 col-md-3">
                            <ul>
                                <li class="text-white text-uppercase fw-bold fs-4">{{$item['title']}} </li>
                                @foreach($item['aList'] as $anchor)
                                    <li class="text-white">
                                        <a href="{{$anchor['src']}} ">{{$anchor['text']}} </a>
                                    </li>
                                @endforeach
                            
                            </ul>  
                        </div>
                                    
                    @endforeach
                </div>
                
            </div>
            <div class="col-6 my-bg-dc">

            </div>
             
        </div>
    </div>
   
</footer>
    
    