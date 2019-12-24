@include('constants.headerAndSide')



    <div class="container">
          
            <div class="row responsive">
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                    New Task
                    </div>

                        <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                        </div>
                    </div>
           
                <div class="col-md-6 col-md-offset-2">
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
            
        
                    <div class="panel-body">
                    <table class="table table-striped task-table table-bordered">
                            <thead>
                                <th>#</th>
                                <th>Todo Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            <?php
                                $count = 0;
                            ?>
                                @foreach ($tasks as $task)
                                <?php
                                $count += 1;
                                ?> <tr>
                                        <td>
                                        {{ $count }}  
                                        </td>
                                        <td class="table-text col-6 ">
                                        <input type="checkbox" id="cbox3" value="1">
                                            <label for="cbox3">{{ $task->name }}</label>
                                        </td>

                                        <!-- Task Delete Button -->
                                        <td class="col-2">
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('POST') }}

                                                <button type="submit" class="badge btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                </div>  
            </div>
</div>
<style>
#cbox3:checked + label {
  color:blue;
  text-decoration: line-through;
}
</style>

<script type="text/javascript">
	$(document).ready(function() {
    $('#myTab').addClass('myClass');

} );
</script>