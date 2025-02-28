@extends('layouts.admin.app')

@section('title', translate('Privacy policy'))

@section('content')
    <div class="content container-fluid">
        <div class="d-flex flex-wrap gap-2 align-items-center mb-4">
            <h2 class="h1 mb-0 d-flex align-items-center gap-2">
                <img width="20" class="avatar-img" src="{{asset('assets/admin/img/icons/pages.png')}}" alt="">
                <span class="page-header-title">
                    {{translate('page_setup')}}
                </span>
            </h2>
        </div>

        @include('admin-views.business-settings.partials._page-setup-inline-menu')

        <div class="row g-2">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="{{route('admin.business-settings.page-setup.privacy-policy')}}" method="post" id="privacy-form">
                    @csrf
                    <div class="form-group">
                        <div id="editor" class="min-h-108px">{!! $data['value'] !!}</div>
                        <textarea name="privacy_policy" id="hiddenArea" style="display:none;"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-3 align-items-center">
                        <button type="reset" class="btn btn-secondary">{{translate('reset')}}</button>
                        <button type="{{env('APP_MODE')!='demo'?'submit':'button'}}"
                                class="btn btn-primary call-demo">{{translate('save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('script_2')
    <script src="{{ asset('assets/admin/js/quill-editor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var bn_quill = new Quill('#editor', {
                theme: 'snow'
            });

            $('#privacy-form').on('submit', function () {
                var myEditor = document.querySelector('#editor');
                $('#hiddenArea').val(myEditor.children[0].innerHTML);
            });
        });
    </script>
@endpush
