@php($hide = isset($hide) ? $hide : false)
<div class="alert-message">
        <div data-brk-library="component__alert" class="alert alert-clean fade {{ $type ?? 'alert-success' }} alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light show  {{ $class ?? '' }}" role="alert" {{ $hide ? 'hidden' : '' }} style="{{ $style ?? '' }}">
        <button type="button" class="close font__size-18" data-dismiss="alert">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
            <span class="sr-only">{{ trans('app.close') }}</span>
        </button>
        <i class="start-icon far fa-check-circle"></i>
        {{ $message ?? trans('app.success_message') }}.
    </div>
</div>
