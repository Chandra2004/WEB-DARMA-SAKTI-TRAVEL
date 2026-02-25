<div style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
    @if (isset($notification['status']) && $notification['status'] === 'error')
        <div class="toast show bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true"
            data-delay="{{ isset($notification['duration']) ? (int) $notification['duration'] : 5000 }}">
            <div class="toast-header bg-danger text-white">
                <strong class="mr-auto">Error</strong>
                <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $notification['message'] }}
            </div>
        </div>
    @endif

    @if (isset($notification['status']) && $notification['status'] === 'success')
        <div class="toast show bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true"
            data-delay="{{ isset($notification['duration']) ? (int) $notification['duration'] : 5000 }}">
            <div class="toast-header bg-success text-white">
                <strong class="mr-auto">Success</strong>
                <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $notification['message'] }}
            </div>
        </div>
    @endif

    @if (isset($notification['status']) && $notification['status'] === 'warning')
        <div class="toast show bg-warning text-dark" role="alert" aria-live="assertive" aria-atomic="true"
            data-delay="{{ isset($notification['duration']) ? (int) $notification['duration'] : 5000 }}">
            <div class="toast-header bg-warning text-dark">
                <strong class="mr-auto">Warning</strong>
                <button type="button" class="ml-2 mb-1 close text-dark" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $notification['message'] }}
            </div>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.toast').toast('show');

        // Auto-hide fallback if data-delay doesn't trigger automatically in some BS versions without init
        setTimeout(function() {
            $('.toast').toast('hide');
        }, {{ isset($notification['duration']) ? (int) $notification['duration'] : 5000 }});
    });
</script>
