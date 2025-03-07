@if($halls != null)
    @foreach($halls as $hall)
        <div class="col-md-2 mb-5 dropright">
            <div class="card py-4 {{ $hall['order'] != null ? 'bg-c1' : 'bg-gray'}} " data-toggle="dropdown" >
                <div class="card-body text-center">
                    <h5 class="card-title">{{ translate('hall') }}</h5>
                    <h5 class="card-title">{{ $hall['number'] }}</h5>
                    <h5 class="card-title">{{ translate('capacity') }}: {{ $hall['capacity'] }}</h5>
                </div>
            </div>
            <div class="dropdown-menu px-3" style="min-width: 200px; min-height: 200px">
                @if(($hall['order'] != null))
                    @foreach($hall['order'] as $order)
                        <h5 class="">{{ translate('order id') }}: {{ $order['id'] }}</h5>
                    @endforeach
                @else
                    <h5 class="">{{ translate('current status') }} - {{ translate('empty') }}</h5>
                    <h5 class="">{{ translate('any reservation') }} - {{ translate('N/A') }}</h5>
                @endif
            </div>
        </div>
    @endforeach
@else
    <div class="col-md-12 text-center">
        <h4 class="">{{ translate('This branch has no hall') }}</h4>
    </div>
@endif
