
@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>مبيعات عامه</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('index') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('sales.index') }}"> مبيعات عامه</a></li>
                <li class="active">إضافه</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">بيع خامه</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('sales.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}


                        <div class="form-group">
                            <label>المشترى</label>
                            <input type="text"  name="buyer" class="form-control" value="{{ old('buyer') }}">
                        </div>

                        <div class="form-group">
                            <label>الخامه</label>
                            <input type="text"  name="material" class="form-control" value="{{ old('material') }}">
                        </div>

                        <div class="form-group">
                            <label>الكميه</label>
                            <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount') }}">
                        </div>

                        <div class="form-group">
                            <label>سعر الوحده</label>
                            <input type="number" step="0.01" name="unit_price" class="form-control" value="{{ old('unit_price') }}">
                        </div>

                        <div class="form-group">
                            <label> المدفوع</label>
                            <input type="number" step="0.01" name="paid" class="form-control" value="{{ old('paid') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> حفظ</button>
                            <button type="reset" class="btn btn-primary"><i class="fa fa-times"></i> إلغاء</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
