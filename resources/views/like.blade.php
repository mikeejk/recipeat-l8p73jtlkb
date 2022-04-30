<div class="flex w-full justify-center items-center " style="color:#292D32;">


    @can('like', $model)
        <form action="{{ route('like') }}" method="post" class="flex flex-col items-center justify-center">
            @csrf
            <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button class="px-2"> <svg width="23" height="21" viewBox="0 0 23 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4551 20.0014C11.1451 20.0014 10.8451 19.9614 10.5951 19.8714C6.77508 18.5614 0.705078 13.9114 0.705078 7.04142C0.705078 3.54142 3.53508 0.701416 7.01508 0.701416C8.70508 0.701416 10.2851 1.36142 11.4551 2.54142C12.6251 1.36142 14.2051 0.701416 15.8951 0.701416C19.3751 0.701416 22.2051 3.55142 22.2051 7.04142C22.2051 13.9214 16.1351 18.5614 12.3151 19.8714C12.0651 19.9614 11.7651 20.0014 11.4551 20.0014ZM7.01508 2.20142C4.36508 2.20142 2.20508 4.37142 2.20508 7.04142C2.20508 13.8714 8.77508 17.6714 11.0851 18.4614C11.2651 18.5214 11.6551 18.5214 11.8351 18.4614C14.1351 17.6714 20.7151 13.8814 20.7151 7.04142C20.7151 4.37142 18.5551 2.20142 15.9051 2.20142C14.3851 2.20142 12.9751 2.91142 12.0651 4.14142C11.7851 4.52142 11.1451 4.52142 10.8651 4.14142C9.93508 2.90142 8.53508 2.20142 7.01508 2.20142Z"
                        fill="#292D32" />
                </svg>@lang('')</button>
        </form>
    @endcan
    @can('unlike', $model)
        <form action="{{ route('unlike') }}" method="post" class="flex flex-col items-center justify-center">
            @csrf
            @method('DELETE')
            <input type="hidden" name="likeable_type" value="{{ get_class($model) }}" />
            <input type="hidden" name="id" value="{{ $model->id }}" />
            <button class="px-2">
                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.8452 0.867432C13.076 0.867432 11.4925 1.72761 10.5052 3.04721C9.51799 1.72761 7.93448 0.867432 6.16524 0.867432C3.16439 0.867432 0.730469 3.31113 0.730469 6.33153C0.730469 7.49473 0.916189 8.56995 1.23876 9.56698C2.78317 14.4544 7.54349 17.377 9.89921 18.1786C10.2315 18.2959 10.7789 18.2959 11.1113 18.1786C13.467 17.377 18.2273 14.4544 19.7717 9.56698C20.0943 8.56995 20.28 7.49473 20.28 6.33153C20.28 3.31113 17.8461 0.867432 14.8452 0.867432Z"
                        fill="#ED1A3D" />
                </svg>@lang('')</button>
        </form>
    @endcan
    {{ trans_choice('{0} 0 |{1} :count |[2,*] :count ', count($model->likes), ['count' => count($model->likes)]) }}
</div>
