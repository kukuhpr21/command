@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'info' }} d-flex align-items-center" role="alert">
        @if (flash()->class == 'warning')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @endif

        @if (!flash()->class || flash()->class == 'info')
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif

        @if (flash()->class == 'success')
            <i class="bi bi-check-circle-fill me-2"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif
