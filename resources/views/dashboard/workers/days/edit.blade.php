@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>اليوميات</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('workers.days_worker.index', $worker->id) }}"> اليوميات</a></li>
                <li class="active">إضافه</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">تعديل</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('workers.days_worker.update', [$worker->id, $daysCar->id]) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

@php
    $days = ['السبت', 'الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعه'];
@endphp
                        <div class="form-group">
                            <label>اليوم</label>
                            <select name="day" class="form-control">
                                <option value="">أيام الأسبوع</option>
                                  @foreach($days as $day)
                                    <option value="{{$day}}" {{ $daysCar->day == $day ? 'selected' : '' }}>{{$day}}</option>
                                  @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>سعر اليوميه </label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $daysCar->price }}">
                        </div>

                        <div class="form-group">
                            <label> المدفوع</label>
                            <input type="number" step="0.01" name="paid" class="form-control" value="{{ $daysCar->paid }}">
                        </div>

                        <div class="form-group">
                            <label>وصف اليوميه</label>
                            <textarea name="description" class="form-control ckeditor">{{ $daysCar->description }}</textarea>
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

