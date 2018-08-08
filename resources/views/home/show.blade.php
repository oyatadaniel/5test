@include('layouts.app')
@include ('includes.style_links')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(\Session:: has('success'))
                <div class="alert alert-success">
                    <p>{{\Session:: get('success')}}</p>
                </div>
            @endif
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['description'] }}</td>
                        <td>
                            <a href="{{ route('home.edit',$user['id']) }}"><i style="color:#ff8533;margin-right:15px;" class="mdi mdi-lead-pencil"></i></a>
                            <a href="{{ route('home.delete',$user['id']) }}"><i style="color:red;" class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('includes.scripts')