@extends('admin.layouts.master')

@section('head-tag')
<title>نظر</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">نظرات</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> نمایش نظرها</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  نمایش نظرها
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.comment.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>
            <section class="card mb-3">
                <section class="card- header text-white bg-custom-yellow">
                    3942934932 - رسول دژکام
                </section>
                <section class="card-body">
                    <h5 class="card-title">کد کالا: 287368 مشخصات کالا: ساعت هوشمند</h5>
                    <p class="card-text">به نظر من ساعت خوبیه ولی شارژش زود تموم میشه</p>
                </section>
            </section>
            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12">
                            <div class="form-group">
                                <label for="">پاسخ ادمین</label>
                                <textarea class="form-control form-control-sm" rows="4" ></textarea>
                            </div>
                        </section>


                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
