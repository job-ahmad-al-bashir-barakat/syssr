<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">{{ $subheader_title ?? '' }}</h3>
        </div>
        <div class="kt-subheader__toolbar">
            @if(isset($back))
                <a href="{{redirect()->back()->getTargetUrl()}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
            @endif
            @if(isset($save_btn))
                <button type="button" class="btn btn-label-brand btn-bold {{ $save_btn }}">{{trans('cms.save')}}</button>
            @elseif(isset($add_btn))
                <button type="button" class="btn btn-label-brand btn-bold {{ $add_btn }}">{{trans('cms.add')}}</button>
            @elseif(isset($update_btn))
                <button type="button" class="btn btn-label-brand btn-bold {{ $update_btn }}">{{trans('cms.update')}}</button>
            @elseif(isset($actions))
                <div class="btn-group">
                    <button type="button" class="btn btn-brand btn-bold">{{trans('cms.actions')}}</button>
                    <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="kt-nav">
                            @foreach($actions as $action)
                                <li class="kt-nav__item">
                                    <a href="JavaScript:Void(0);" class="kt-nav__link {{$action['class']}}">
                                        <i class="kt-nav__link-icon {{$action['icon']}}"></i>
                                        <span class="kt-nav__link-text">{{$action['name']}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @elseif(isset($link))
                <a href="{{$link}}" class="btn btn-label-brand btn-bold">{{$link_name ?? ''}}</a>
            @endif
        </div>
    </div>
</div>
<!-- end:: Subheader -->