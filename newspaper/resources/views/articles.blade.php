
<?php 
$numL = mt_rand(1, 5); 
$numR = mt_rand(1, 5);
?>

<div class="content-container">
    @cannot('user')
    <img class="side-add" src="{{URL::to('/')}}/img/{{$numL}}.png">
    @endcannot
    <div class="content">

    @cannot('user')
    <img class="top-add" src="{{URL::to('/')}}/img/top-add.png">
    @endcannot


        <div class="articlelist">

            @yield('main')

            
        </div>
    </div>
    @cannot('user')
    <img class="side-add" src="{{URL::to('/')}}/img/{{$numR}}.png">
    @endcannot

</div>