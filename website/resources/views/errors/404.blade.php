@extends('layouts.app')

@section('content')
    <div class="main-wrapper">
        <main class="main-container">
            <section class="brk-backgrounds brk-base-bg-gradient-5 full-screen d-flex flex-column align-items-center justify-content-center" data-brk-library="component__backgrounds_css,assets_fss">
                <div id="fss" class="brk-backgrounds__canvas"></div>
                <div class="brk-backgrounds__content">
                    <div class="container">
                        <div class="maxw-770 pt-80 pb-80">
                            <h2 class="font__family-montserrat font__weight-bold text-white brk-error-page-title">404</h2>
                            <hr class="brk-dashed-border-transparent mt-25 mb-50">
                            <h3 class="font__family-montserrat font__size-48 line__height-52 text-white text-center mb-10">
                                <span class="font__weight-bold">Oops! </span>
                                <span class="font__weight-light">That page can’t be found.</span>
                            </h3>
                            <h4 class="font__family-montserrat font__size-21 line__height-24 font__weight-normal text-white opacity-60 text-center mb-50">It
                                looks like nothing was found at this location.</h4>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection



