@can('comments')

@if(empty($comments()) || !isset($comments()) || is_null($comments()))

@else

@foreach($comments as comment)
<ul class="list-unstyled">

  <li class="media my-4">
    <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>

</ul>

@endforeach
@endif

@endcan