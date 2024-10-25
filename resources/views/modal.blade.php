@foreach(\JobMetric\Domi\Facades\Domi::modal() as $modal_id => $modal_value)
    <div class="modal fade" id="modal-{{ $modal_id }}" tabindex="-1" aria-labelledby="modal_{{ $modal_id }}_label" aria-hidden="true">
        <div class="modal-dialog {{ $modal_value['scrollable'] }} {{ $modal_value['size'] }} {{ $modal_value['fullscreen'] }}">
            <div class="modal-content">
                @if (!is_null($modal_value['header']))
                    <div class="modal-header py-4">{!! $modal_value['header'] !!}</div>
                @elseif(isset($modal_value['title']))
                    <div class="modal-header py-4">
                        <h1 class="modal-title fs-5" id="modal_{{ $modal_id }}_label">{{ trans($modal_value['title']) }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                @endif
                <div class="modal-body">{!! $modal_value['content'] !!}</div>
                @if (isset($modal_value['footer']))
                    <div class="modal-footer">{!! $modal_value['footer'] !!}</div>
                @endif
            </div>
        </div>
    </div>
@endforeach
