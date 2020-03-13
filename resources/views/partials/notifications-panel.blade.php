@if(Session::has('message'))
    <div class="row">
        <div class="col py-2">
            <div class="alert alert-{{ Session::get('class') }}-full alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {!! Session::get('message') !!}
            </div>
        </div>
    </div>
@endif