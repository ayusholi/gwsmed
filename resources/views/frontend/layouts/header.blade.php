{{--<!-- main header start -->--}}
{{--<div class="cv-header-two">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-7">--}}
{{--                <div class="cv-logo">--}}
{{--                    @if(\App\Models\Setting::value('logo'))--}}
{{--                        <a href="{{route('home')}}"><img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="image" class="img-fluid"/></a>--}}


{{--                    @else--}}
{{--                        <a href="{{route('home')}}"><img src="{{ Helper::defaultLogo() }}" alt="image" class="img-fluid"/>--}}
{{--                        </a>--}}

{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-9 col-5">--}}
{{--                <div class="cv-nav-bar">--}}
{{--                    <div class="cv-menu">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{route('home')}}">Home</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="{{route('about.us')}}">About</a></li>--}}

{{--                            <li class="cv-children-menu cv-mega-li"><a href="javascript:;">Products</a>--}}
{{--                                <div class="cv-mega-menu">--}}
{{--                                    @php--}}

{{--                                        $categories=\App\Models\Category::with('subcategories')->where(['status'=>'active'])->latest()->limit(4)->get();--}}

{{--                                    @endphp--}}

{{--                                    @foreach($categories as $category)--}}
{{--                                        <div class="cm-menu-list">--}}
{{--                                            <ul>--}}
{{--                                                <li>--}}
{{--                                                    <a href="{{route('product.category',$category->slug)}}"><h3>{{ucfirst($category->title)}}</h3></a>--}}
{{--                                                </li>--}}

{{--                                                @if(count($category->subcategories)>0)--}}
{{--                                                    @foreach($category->subcategories as $subCat)--}}
{{--                                                    <li><a href="{{route('product.subcategory',[$category->slug,$subCat->slug])}}">{{ucfirst($subCat->title)}}</a></li>--}}
{{--                                                    @endforeach--}}
{{--                                                 @endif--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}

{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop.html">Shop</a></li>--}}
{{--                            <li><a href="service.html">Service</a></li>--}}
{{--                            <li class="cv-children-menu"><a href="javascript:;">Pages</a>--}}
{{--                                <ul class="cv-sub-mmenu">--}}
{{--                                    <li><a href="blog-single.html">Blog single</a></li>--}}
{{--                                    <li><a href="product-single.html">Product single</a></li>--}}
{{--                                    <li><a href="account.html">My account</a></li>--}}
{{--                                    <li><a href="cart.html">Cart</a></li>--}}
{{--                                    <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="{{route('blog')}}">Blog</a></li>--}}
{{--                            <li><a href="{{route('contact.us')}}">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="cv-head-icon">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="cart.html" class="cv-head-cart">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                        <g>--}}
{{--                                            <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0--}}
{{--                                                C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373--}}
{{--                                                c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138--}}
{{--                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277--}}
{{--                                                c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137--}}
{{--                                                c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331--}}
{{--                                                c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275--}}
{{--                                                C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662--}}
{{--                                                c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384--}}
{{--                                                z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19--}}
{{--                                                c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                    <span>3</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                @auth--}}
{{--                                    <a href="{{route('user.dashboard')}}" class="cv-head-user">--}}
{{--                                        <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path></svg>--}}
{{--                                    </a>--}}

{{--                                @else--}}
{{--                                    <a href="javascript:;" class="cv-head-user" data-toggle="modal" data-target="#loginModel">--}}
{{--                                        <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path></svg>--}}
{{--                                    </a>--}}
{{--                                @endauth--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="cv-toggle-nav">--}}
{{--                            <span></span>--}}
{{--                            <span></span>--}}
{{--                            <span></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- main header end -->--}}

<!-- top header start -->
<div class="cv-top-header d-none d-sm-block" style="background-color: #ecf8f8;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-6 d-none d-lg-block">
                <p class="welcome-text" >Welcome to GWS Surgical LLP</p>
            </div>
            <div class="col-12 col-md-7 col-lg-6 d-none d-sm-block">
                <div class="cv-head-contact text-right">
                    <h3>
                        <i class="ri-mail-open-line pr-2 "></i> {{\App\Models\Setting::value('email')}}
                        <i class="ri-phone-line pl-4 pr-2"></i> Call Us: {{\App\Models\Setting::value('phone')}}
                    </h3>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- top header end -->

<div class="cv-top-header" style="height:auto">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-3">
                <div class="cv-head-contact">
                    <div class="cv-logo">
                        @if(\App\Models\Setting::value('logo'))
                            <a href="{{route('home')}}"><img src="{{ asset('storage/frontend/images/settings/'.\App\Models\Setting::value('logo')) }}" alt="image" class="img-fluid"/></a>
                        @else
                            <a href="{{route('home')}}"><img src="{{ Helper::defaultLogo() }}" alt="image" class="img-fluid"/>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 ">
                <form action="{{route('search')}}" method="get" class="d-flex">
                    <input type="text" name="query" class="form-control" style="font-size: 14px;padding-left:30px;border-radius: 6px 0 0 6px;height: 46px;" name="query" id="search_text"
                           placeholder="Search for products here...">
                    <div class="input-group-append">
                        <button type="submit" style="border-radius:0 6px 6px 0;background: #0070a4" class="input-group-text"><i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
{{--                <input type="text" class="form-control" name="query" placeholder="Search...">--}}
            </div>

            <div class="col-12 col-sm-1">
                <div class="cv-head-icon d-none d-sm-inline-block">
                    <ul>
                        <li>
                            <a href="{{route('cart')}}" class="cv-head-cart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <g>
                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                    </g>
                                </svg>
                                <span id="cart_counter">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
             <div class="col-12 col-md-5 col-lg-2 text-right">
                <div class="certification-image">
                    <img src= "https://gwsmed.com/wp-content/uploads/elementor/thumbs/ISO13485-ogzvc3spk1tjmixoywohjjfuc61k50b0oh5vm7wr28-ov0xgb1zhnwy17j6hfdgzk8zrlu9f51ygvl9fywkxs.png">
                     <img src= "https://gwsmed.com/wp-content/uploads/elementor/thumbs/WHO-GMP-ogzvc4qjqvuty4wbtf34417axjwxcper0ltd3hvcw0-ov0xf5p34ycbud796xhvxuopmni40ghrn6vwbslwjk.png">
                      <img src= "https://gwsmed.com/wp-content/uploads/elementor/thumbs/ISO-9001-ogzvc8hwi7zz8kqv7gpme095b3ee7htod4fb0lps74-ov0xe0c6s8rpnivbwfmaw54fhp5ylrxkti6j7mb85c.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main header start -->
<div class="cv-main-header" id="header-sticky">
    <div class="container" style="max-width: 1260px;">
        <div class="row">
{{--            <div class="col-lg-3 col-9">--}}
{{--                <div class="cv-logo">--}}
{{--                    @if(\App\Models\Setting::value('logo'))--}}
{{--                        <a href="{{route('home')}}"><img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="image" class="img-fluid"/></a>--}}


{{--                    @else--}}
{{--                        <a href="{{route('home')}}"><img src="{{ Helper::defaultLogo() }}" alt="image" class="img-fluid"/>--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-12 col-12 d-flex align-items-center justify-content-center">
                <div class="cv-nav-bar text-left">
                    <div class="cv-menu">
                    <ul>
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i></a>
                        </li>
                        <li><a href="{{route('about.us')}}">About</a></li>
                        @php

                            $categories=\App\Models\Category::with('subcategories')->where(['status'=>'active'])->where('on_menu', 1)->orderBy('title','ASC')->limit(4)->get();

                        @endphp

                        @foreach($categories as $category)
                            @if(count($category->subcategories)>0)
                                <li class="cv-children-menu cv-mega-li"><a href="{{ route('product.category.0', $category->slug) }}">{{ucfirst($category->title)}}</a>
                                    <div class="cv-mega-menu">
                                        <div class="cm-menu-list">
                                            <ul>
                                                    @foreach($category->subcategories as $subcategories)
                                                    @php
                                                        $category_url['slug'] = $subcategories->slug;
                                                        if($subcategories->level > 0){
                                                            $category_url['parent1'] = $subcategories->parentCategory->slug;
                                                            if($subcategories->level > 1){
                                                                $category_url['parent2'] = $subcategories->parentCategory->parentCategory->slug;
                                                                if($subcategories->level > 2){
                                                                    $category_url['parent3'] = $subcategories->parentCategory->parentCategory->parentCategory->slug;
                                                                    if($subcategories->level > 2){
                                                                        $category_url['parent4'] = $subcategories->parentCategory->parentCategory->parentCategory->parentCategory->slug;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    @endphp
                                                    <li><a href="{{ route('product.category.' . $subcategories->level, $category_url) }}">{{ucfirst($subcategories->title)}}</a></li>
                                                    @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </li>
                            @else
                                <li><a href="{{ route('product.category.0', $category->slug) }}">{{ucfirst($category->title)}}</a></li>
                            @endif
                        @endforeach
                        @php
                            $get_covid = \App\Models\Category::where('slug', 'covid19')->first();
                        @endphp
                        @if($get_covid)
                        <li><a href="{{ route('product.category.0', $get_covid->slug) }}">{{ucfirst($get_covid->title)}}</a></li>
                        @endif
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('catalog.category')}}">Catalogs</a></li>
                        <li><a href="{{route('enquiry')}}">Enquiry</a></li>
                        <li><a href="{{route('contact.us')}}">Contact</a></li>
                    </ul>
                    </div>
                    <div class="cv-toggle-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-view__wrapper d-block d-sm-none">
    <div class="mobile-view__menu">
        <ul>
            <li class="active">
                <a href="{{route('home')}}">
                    <div class="icon-wrapper">
                        <i class="ri-home-3-fill menu-icon"></i>
                    </div>
                    <span class="menu-title">Home</span>
                </a>
            </li>
             <li>
                <a class="menu-categories" onclick="">
                    <div class="icon-wrapper">
                        <i class="ri-dashboard-fill menu-icon"></i>
                        <span class="badge-count"></span>
                    </div>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
             <li>
                <a href="{{route('cart')}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon-wrapper">
                        <i class="ri-shopping-cart-line menu-icon"></i>
                    </div>

                    <span class="menu-title">My Cart</span>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="icon-wrapper">
                        <i class="ri-questionnaire-line menu-icon"></i>
                    </div>
                    <span class="menu-title">Enquiry</span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- main header end -->
