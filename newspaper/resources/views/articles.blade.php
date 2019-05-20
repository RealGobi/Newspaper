<div class="content-container">
    @cannot('user')
    <div class="side-add"></div>
    @endcannot
    <div class="content">



        <div class="articlelist">

            @yield('main')

        </div>
    </div>
    @cannot('user')
    <div class="side-add"></div>
    @endcannot

</div>