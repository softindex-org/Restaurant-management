@extends('layouts.admin.app')

@section('title', translate('Table Availability'))

@push('css_or_js')
<style>
    .bg-gray{
        background: #e4e4e4;
    }
    .bg-c1 {
        background-color: #FF6767 !important;
    }
    .c1 {
        color: #FF6767 !important;
    }
</style>
@endpush

@section('content')
    <div class="content container-fluid">
        <div class="d-flex flex-wrap gap-2 align-items-center mb-4">
            <h2 class="h1 mb-0 d-flex align-items-center gap-2">
                <img width="20" class="avatar-img" src="{{asset('assets/admin/img/icons/table.png')}}" alt="">
                <span class="page-header-title">
                    {{translate('Table_Availability')}}
                </span>
            </h2>
        </div>

        <div class="card card-body">
            <div class="d-flex gap-3 flex-wrap align-items-center justify-content-between mb-4">
                <select name="hall_id" class="custom-select max-w220" id="select_hall" required>
                    <option value="" selected disabled>{{ translate('--Select_Hall--') }}</option>
                    @foreach($halls as $hall)
                        <option value="{{$hall['id']}}">{{$hall['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="table_box_list justify-content-center gap-2 gap-md-3" id="table_list">

            </div>
        </div>
    </div>
@endsection

@push('script_2')
    <script>
        $(document).ready(function (){
            $('#select_hall').on('change', function (){
                var hall = this.value;
                console.log(hall);
                $('#table_list').html('');
                $('#table_title').html('');
                $.ajax({
                    url: "{{ url('admin/table/hall-table') }}",
                    type: "POST",
                    data: {
                        hall_id : hall,
                        _token : '{{ csrf_token() }}',
                    },
                    dataType : 'json',
                    success: function (result){
                        $('#table_list').html(result.view);
                    },
                });
            });
        });
    </script>
@endpush


