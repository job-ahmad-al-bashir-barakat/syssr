@php($hide = isset($hide) ? $hide : false)
<div class="alert-message">
    <div data-brk-library="component__alert" class="alert alert-clean fade alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light show" role="alert" {{ $hide ? 'hidden' : '' }}>
        <button type="button" class="close font__size-18" data-dismiss="alert">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
            <span class="sr-only">{{ trans('app.close') }}</span>
        </button>
        <i class="start-icon far fa-check-circle"></i>
        <strong class="font__weight-semibold">{{ trans('app.well_done') }}</strong> {{ $message ?? trans('app.success_message') }}.
    </div>
</div>
