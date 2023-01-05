@if ($errors->any())
    <div class="remove-margin-left">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="remove-list">
                    <li>
                        <div class="application-alert-danger">{{ $error }}<div>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success_report'))
    <div class="application-alert-success">
        <h4 class="alert-heading" style="color: #fff; font-size:1.5rem;">Success!</h4>
        {{ session()->get('success_report') }}
    </div>
    <br />
@endif


@if (session()->has('failure_report'))
    <div class="application-alert-danger">
        <h4 class="alert-heading" style="color: #fff; font-size:1.5rem;">Error!</h4>
        {{ session()->get('failure_report') }}
    </div>
    <br />
@endif
