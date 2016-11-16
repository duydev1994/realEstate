@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title uppercase">{{ $category->id ? 'Update Category' : 'Create Category' }}</h3>
                    <div class="tools">
                        <div class="pull-right">
                            <a href="{{route('admin.categories.index')}}" class="btn btn-danger pull-left">Back</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body form">
                    {!! Form::open(['method' => 'post','class'=>'form-horizontal','id'=>'sub_create_category']) !!}
                    <div class="box-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-5">
                                    <input type="text" required name="title" value="{{  $category->title }}" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Meta Title</label>
                                <div class="col-md-5">
                                    <input type="text" name="meta_title" value="{{  $category->meta_title  }}" class="form-control" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-2 control-label">Slug</label>
                                <div class="col-md-5">
                                    <input type="text" name="slug" value="{{  $category->slug  }}" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">SubMenu</label>
                                <div class="col-md-5">
                                    <select class="form-control" name="parent_id">
                                        <option value="0">None</option>
                                        @foreach($categories as $categoryparent)
                                            <option value="{{ $categoryparent->id }}" {{ (isset($category)&&($category->parent_id == $categoryparent->id)) ? 'selected' : '' }} >{{ $categoryparent->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Position</label>
                                <div class="col-md-5">
                                    <select class="form-control" name="position">
                                        <option value="0">Default</option>
                                        @for($i = 1; $i <= 20; $i++)
                                            <option value="{{ $i }}" {{ (isset($category)&&($category->position == $i)) ? 'selected' : '' }} >{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="clear: both;">
                                <label class="col-md-2 control-label">Status</label>
                                <div class="col-md-5">
                                    {!! Form::select('status', $status,  $category->status , ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="box-footer right">
                            <a href="{{route('admin.categories.index')}}" class="btn btn-danger pull-left">Back</a>
                            <button type="submit" class="btn btn-primary pull-right">{{ $category->id? 'Update' : 'Create' }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection
