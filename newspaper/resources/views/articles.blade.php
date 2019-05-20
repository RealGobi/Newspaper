
<?php 
$numL = mt_rand(1, 4); 
$numR = mt_rand(1, 4);
?>

<div class="content-container">
    @cannot('user')
    <img class="side-add" src="../../public/img/{{$numL}}.png">
    @endcannot
    <div class="content">



        <div class="articlelist">

            @yield('main')

        </div>
    </div>
    @cannot('user')
    <img class="side-add" src="../../public/img/{{$numR}}.png">
    @endcannot

</div>