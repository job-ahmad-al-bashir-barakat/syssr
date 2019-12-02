@extends('layouts.app')

@section('title',trans('app.title_members_society'))

@include('_about_society_style')

@section('content')
    @include('partials._breadcrumbs',[
        'title' => $member->username,
        'paths' => [
            ['url' => RouteUrls::membersSociety(), 'title' => trans('app.members_society')]
        ],
        'banner' => asset('img/syssr/members-banner.jpg')
    ])
    <div class="main-wrapper" xmlns="" xmlns="">
        <main class="main-container">
            <section>
                <div class="container">
                    <div class="row pb-40 pt-70">
                        <div class="col-12 col-lg-12 col-xl-12 order-xs-12 order-lg-1">
                            <div class="mb-130"></div>
                            <div class="brk-forum-author-card d-flex flex-column mt-70" data-brk-library="component__forum_author">
                                <div class="brk-forum-author-card__header d-flex flex-column align-items-center pt-70 pb-40">
                                    <a href="#" class="brk-forum-author-card__img-container">
                                        <img class="brk-forum-author-card__img" src="{{ $member->avatar_url ?? '' }}" alt='Альтернативный "текст"'>
                                    </a>
                                    <h3 class="font__family-montserrat font__size-24 line__height-28 font__weight-bold mt-20">{{ $member->username }}</h3>
                                    <h4 class="brk-dark-font-color font__family-open-sans font__size-16 font__weight-normal">{{ "$member->first_name $member->last_name" }}</h4>
                                </div>
                                @if($member->bio)
                                <div class="brk-forum-author-card__about pt-30 pr-40 pb-30 pl-40">
                                    <p class="font__family-open-sans font__size-14 font__weight-semibold line__height-21 letter-spacing-20">
                                        {{ $member->bio ?? '' }}
                                    </p>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-6">
                                        <div class="brk-forum-author-card__info pt-35 pr-35 pb-35 pl-40">
                                            @if($member->email)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Email:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="font__weight-normal">{{ $member->email ?? '' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if($member->society_email)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Society Email:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="font__weight-normal">{{ $member->society_email ?? '' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if($member->birth_date)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Birth Date:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="font__weight-normal">{{ $member->birth_date ?? '' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if($member->gender)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Gender:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="font__weight-normal">{{ $member->gender ?? '' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if($member->website)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Website:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <a href="{{ $member->website ?? '#' }}" class="font__weight-normal">{{ $member->website ?? '' }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @isset($member->occupation)
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Occupation:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="font__weight-normal">{{ $member->occupation->name->$lang ?? '' }}</span>                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="brk-forum-author-card__info pt-35 pr-35 pb-35 pl-40">
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Research Interests:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                                            <li><a href="#" rel="tag">Network</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Skills:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                                            <li><a href="#" rel="tag">Network</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Degrees:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                                            <li><a href="#" rel="tag">Network</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brk-forum-author-card__info-item mb-20 font__family-montserrat font__size-14 line__height-16">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="font__weight-bold">Associations:</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                                            <li><a href="#" rel="tag">Network</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                            <li><a href="#" rel="tag">Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                            "research_interests"--}}
                                            {{--                                            "skills"--}}
                                            {{--                                            "degrees"--}}
                                            {{--                                            "associations"--}}

                                        </div>
                                    </div>
                                </div>
                                @if($member->publications)
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-60">
                                            <h4 class="title__divider title__divider--chevron font__size-21 font__weight-bold font__family-montserrat line__height-24 text-center" data-brk-library="component__dividers">
                                                <span class="title__divider__wrapper">
                                                    Publications <span class="line brk-base-bg-gradient-chevron-pseudo"></span>
                                                </span>
                                            </h4>
                                            <div class="font__family-open-sans font__size-15 line__height-24 brk-dark-font-color pl-30 pr-30">
                                                {{ $member->publications }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if($member->resume_file)
                <div class="container">
                    <div class="row mt-20">
                        <div class="col-12">
                            <div class="cfa__wrapper cfa__minimal bg__style overlay__white text-center text-lg-left lazyload border-radius-25 dark-shadow" data-bg="img/1170x108_2.jpg" data-brk-library="component__call_to_action">
                                <h4 class="font__family-montserrat font__size-21 font__weight-bold no-wrap">Download Resume</h4>
                                <a href="{{ $member->resume_file_url }}" class="btn btn-gradient btn-md border-radius-5 font__family-montserrat font__weight-light brk-white-font-color btn-min-width-200" data-brk-library="component__button">
                                    <span>Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="mt-70 mt-md-130 pt-80 pb-80 overlay__dot bg__style text-center" style="background-image:url('img/bg-1920_1.jpg')" data-brk-library="component__social_block">
                    <div class="container all-light">
                        <h3 class="font__family-montserrat font__weight-semibold font__size-36 letter-spacing-100 mt-10">Follow
                            {{ $member->first_name }}</h3>
                        <p class="font__size-16 font__family-open-sans line__height-26 text-gray-light mt-30">Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean <br class="hide show-md-block">massa. Cum
                            sociis natoque penatibus et magnis dis parturient montes, </p>
                        <div class="row mt-20 justify-content-center">

                            {{-- here --}}
                            {{--                                        'facebook',--}}
                            {{--                                        'linked_in',--}}
                            {{--                                        'github',--}}
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-round">
                                    <a href="#" class="icon-wrap"><i class="brk-icon fab fa-facebook-f"></i></a>
                                    <h4 class="font__family-montserrat font__weight-light font__size-28 text-primary">Facebook</h4>
                                    <p class="font__family-montserrat font__weight-medium font__size-16">Follow Now</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-round">
                                    <a href="#" class="icon-wrap"><i class="brk-icon fab fa-linkedin-in"></i></a>
                                    <h4 class="font__family-montserrat font__weight-light font__size-28 text-primary">Linkedin</h4>
                                    <p class="font__family-montserrat font__weight-medium font__size-16">Follow Now</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="social__icon-round">
                                    <a href="#" class="icon-wrap"><i class="brk-icon fab fa-github"></i></a>
                                    <h4 class="font__family-montserrat font__weight-light font__size-28 text-primary">Github</h4>
                                    <p class="font__family-montserrat font__weight-medium font__size-16">Follow Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- here --}}
                {{--                                        'mobile',--}}
                {{--                                        'street_address',--}}
                {{--                                        'location',--}}
                {{--                                        'country_id',--}}
                {{--                                        'city_id',--}}
                <div class="brk-map" data-height="410" data-brk-library="component__map">
                    <div class="brk-map__section">
                        <div class="brk-map__canvas" data-address="412 Throop Ave, Brooklyn, NY 11221, USA" data-zoom="13" data-type="roadmap" data-marker="" data-offset-lat="" data-offset-lng="" data-lat="40.6898297" data-lng="-73.94250620000003" data-style="silver">
                        </div>
                    </div>
                    <div class="brk-map__infoicon brk-map__infoicon_layout-three">
						<span class="marker">
							<i class="fal fa-map-marker-alt"></i>
						</span>
                        <div class="brk-map__infoicon--text">
                            <h4 class="font__family-montserrat font__weight-bold font__size-21 line__height-22 mb-15">Chicago, USA</h4>
                            <p class="font__size-16 line__height-28">Phasellus dolor. Maecenas ulum mollis diam. Pellentesqu</p>
                            <a href="tel:8800123456789">
								<span>
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>8 800 123 456 789</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
