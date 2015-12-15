@if (isset($errors) && $errors != null)
@if ($errors->any())

<div class="alert alert-block alert-danger fade in">
    <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button>
    <h4>Cảnh báo ! </h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@elseif (Session::get('success'))

<div class="alert alert-success alert-block fade in">
    <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button>
    <h4><i class="fa fa-ok-sign"></i>Thông báo !</h4>
    <p> {{ Session::get('success') }}</p>
</div>

@endif
@endif
