<x-header componentname="Task"/>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h3 align="center">Task Table</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tasks as $task )
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->email}}</td>
                                <td>{{$task->password}}</td>
                                <td><button type="submit" class="btn btn-primary btn-sm"> Edit </button></td>
                                <td><button type="submit" class="btn btn-danger btn-sm"> Delete </button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<x-footer/>