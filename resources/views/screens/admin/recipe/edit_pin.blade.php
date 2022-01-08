@extends('layouts.bootstrap.guest')

@section('content')
<div>
<form class="form" action="/categorys/{{ $category->id }}" method="post">
    @method('PATCH')
    <div class="form-group bg-white row p-4 m-1">
        <div class="col-md-3 col-8 text-md-center text-start">
            <label class="col-lg-1 col-form-label ">Category</label>
        </div>
        <div class="col-md-6 col-12">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="las la-sitemap"></i></span></div>
                <input type="text" class="form-control  @error('category') is-invalid @enderror"
                    placeholder="Edit Category" name="category" value="{{ $category->category }}" />
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-5 mt-1">
            <button type="submit" name="action" value="category_save"
                class="btn btn-primary w-lg-100 w-100">Update</button>
        </div>
    </div>

    {{-- <div class="card-footer">
        <div class="row">
            <div class="col-lg-9 col-4 d-lg-block d-none">
                <a href="/admin_recipe"><button type="button"
                        class="btn btn-secondary mr-2 w-lg-auto w-100">Get Back</button></a>
            </div>
            <div class="col-md-1 col-5">
                <button type="submit" name="action" value="category_save"
                    class="btn btn-primary w-lg-100 w-100">Save</button>
            </div>
            <div class="col-md-2 col-7">
                <button type="submit" name="action" value="category_save_next"
                    class="btn btn-primary w-lg-auto w-100">Save & Insert Next</button>
            </div>
        </div>
    </div> --}}
    @csrf
</form>
<!--end::Card-->
</div>
