@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>مصروفات عامه</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('expenses.index') }}"> مصروفات عامه</a></li>
                <li class="active">تعديل</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">تعديل</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('expenses.update', $expense->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>الموزع</label>
                            <input type="text"  name="supplier" class="form-control" value="{{ $expense->supplier }}">
                        </div>

                        <div class="form-group">
                            <label>السعر</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $expense->price }}">
                        </div>

                        <div class="form-group">
                            <label> المدفوع</label>
                            <input type="number" step="0.01" name="paid" class="form-control" value="{{ $expense->paid }}">
                        </div>

                        <div class="form-group">
                            <label>الوصف</label>
                            <textarea name="description" class="form-control ckeditor">{{ $expense->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> حفظ</button>
                            <button type="reset" class="btn btn-primary"><i class="fa fa-edit"></i> إلغاء</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

