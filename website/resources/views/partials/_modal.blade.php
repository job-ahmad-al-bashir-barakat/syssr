@php($form = $form ?? false)
<!-- Modal -->
<div class="modal @if($form) form-modal @endif fade" id="site-modal" tabindex="-1" role="dialog" aria-labelledby="siteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        @if($form)
            <form class="form-ajax-modal" enctype="multipart/form-data" method="POST" action="#" data-parsley-validate>
        @endif
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">{{ $title ?? '' }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $slot ?? '' }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient btn-md border-radius-10 font__weight-bold" data-brk-library="component__button" data-dismiss="modal">
                        <i class="fa fa-times icon-inside" aria-hidden="true"></i>
                        <span>{{ trans('app.close') }}</span>
                    </button>
                    <button type="submit" class="btn btn-gradient btn-md border-radius-10 font__weight-bold" data-brk-library="component__button">
                        <i class="fa fa-save icon-inside" aria-hidden="true"></i>
                        <span>{{ trans('app.save') }}</span>
                    </button>
                </div>
            </div>
        @if($form)
        </form>
        @endif
    </div>
</div>
