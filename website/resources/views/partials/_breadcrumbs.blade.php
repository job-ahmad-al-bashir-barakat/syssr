<div class="breadcrumbs__section breadcrumbs__section-grayscale pt-130 pb-60 bg__style lazyload" data-bg="img/demo_magazine/1920x195_1.jpg" data-brk-library="component__breadcrumbs_css">
    <div class="full__size-absolute brk-bg-black opacity-70"></div>
    <div class="container">
        <div class="breadcrumbs__wrapper align-items-center">
            <div class="text-left" data-brk-library="component__title">
                <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">
                    {{ $title ?? '' }}
                </h2>
            </div>
            <ol class="breadcrumb font__size-14 font__weight-bold font__family-montserrat">
                <li>
                    <a href="#">{{ $title ?? '' }} <i class="fas fa-arrow-right"></i></a>
                </li>
                <li class="active">{{ trans('app.home') }}</li>
            </ol>
        </div>
    </div>
</div>
<h1 class="sr-only">{{ $title ?? '' }}</h1>
