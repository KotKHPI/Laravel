<div class="row row-cols-1 row-cols-md-3 mb-3 text-center m-4">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 85%; height: 420px; border-radius: 21px 21px 21px 21px">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">@yield('nameProduct')</h4>
            </div>
            <div class="card-body">
                <img src="@yield('image')" width="200" height="250" alt="image">
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">@yield('price')$</button>
            </div>
        </div>
    </div>
</div>
{{--{{asset('images/iphone-12-mini-blue-select-2020.png')}}--}}
