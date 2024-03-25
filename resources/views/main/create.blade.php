<x-header componentname="Task"/>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h4 align="center">Task Form</h4>
            </div>
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                    <form name="add-task-post-form" id="add-task-post-form"  method="post" action="{{url('store')}}">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label"><h6>Name:</h6></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name"/>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label"><h6>Email:</h6></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email ID"/>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label"><h6>Password:</h6></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password"/>
                        </div>
                        <div class="col-12 mt-3" align="center">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
<x-footer/>