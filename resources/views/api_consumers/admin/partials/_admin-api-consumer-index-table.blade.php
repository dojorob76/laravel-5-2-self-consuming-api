<table class="table table-striped">
    <thead>
        <tr>
            <th><span class="bold">ID</span></th>
            <th><span class="bold">Email</span></th>
            <th><span class="bold">Level</span></th>
            <th class="text-center"><span class="bold">Actions</span></th>
        </tr>
    </thead>
    <tbody>
        @foreach($api_consumers as $api_consumer)
            <tr @if($api_consumer->level === 0) class="danger" @endif>
                <td>{{$api_consumer->id}}</td>
                <td>
                    {{$api_consumer->email}}
                </td>
                <td>
                    {{$api_consumer->level}}
                </td>
                <td>
                    <ul class="list-inline text-center">
                        <li class="mb10 mr5">
                            <a class="btn btn-default"
                               href="{{action('Admin\AdminApiConsumerController@show', $api_consumer->id)}}"
                            >
                                View/Edit
                            </a>
                        </li>
                        <li class="ml5">
                            <form id="admin-delete-api-consumer-{{$api_consumer->id}}-form"
                                  method="post"
                                  action="{{action('Admin\AdminApiConsumerController@destroy', $api_consumer)}}"
                                  data-modal-text="API Account"
                            >
                                @include('global.forms._delete-button')
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>