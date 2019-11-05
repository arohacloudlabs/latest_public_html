@extends('guest.includes.app')

@section('title')
{{ trans('app.create_ad.car_ads') }} {{ trans('app.create_ad.info') }}
@endsection


@section('content')
@section('no-search','no-search')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

@if(Session::has('success_message'))
<div class="alert alert-success">
        {{ Session::get('success_message') }}
</div>
@endif

@if(Session::has('error_message'))
<div class="alert alert-danger">
        {{ Session::get('error_message') }}
</div>
@endif
<div class="page__content">
        <div class="tab-profile-content">

                <div class="tab-profile"><a href="{{ route('user.profile.index') }}">
                <div class="custom-img-tab">
                    <div class="img-custom-wrap"><img src="{{ asset('guest/img/profile-tab.png') }}"></div>
                    <div class="car_ad_count"><span >{{ trans('app.menus.profile') }}</span></div>
                </div>
                </a></div>
        
                <div class="tab-car-ad"><a href="{{ route('user.car_ad.index') }}">
                <div class="custom-img-tab">
                    <div class="img-custom-wrap"><img src="{{ asset('guest/img/car-tab.png') }}"></div>
                    <div class="car_ad_count"><span >{{ trans('app.menus.my_car_ads') }}({{ count($carAd)}})</span></div>
                </div>
                </a></div>
        
            </div>

        <div id="ex1" class="modal custom-popup">
            <ol>
                <li>If your car has not sold, and you do not renew, the ad will be deleted automatically</li>
                <li>Upon renewal if you car has still not sold at the end of the 2 week extension period, the ad will be deleted automatically and you will need to create a new ad</li> 
            </ol> 
            <a href="#" rel="modal:close" id="btn">ok</a>
        </div>

        <div id="ex2" class="modal custom-popup">
            <ul>
                <li>Validity Extended upto <span id="extended_date"></span></li>
            </ul> 
            <a href="#" onclick="window.location.reload(true);" rel="modal:close" id="btn">ok</a>
        </div>

        <div id="ex3" class="modal custom-popup">
            <ul>
                <li>You can post only one Car Ad within free Car Ad facility.</li>
             
            </ul> 
            <a href="#" rel="modal:close" id="btn">ok</a>
        </div>

        <div class="custom-user-info pd">
                <h1 class="custom-title">{{ trans('app.create_ad.car_ad') }} {{ trans('app.create_ad.info') }}</h1>
                <div class="inner">
                   <div class="top-bar">
                      <div class="custom-btns">
                         {{-- <input type="text" name="" />
                         <a href="#">search</a> --}}
                         <a href="{{ route('user.car_ad.create') }}">{{ trans('app.create_ad.post') }} {{ trans('app.create_ad.car_ad') }}</a>
                      </div>
                      <div class="car-info">
                         <select class="sort">
                            <option value="updated_at">{{ trans('app.menus.last_updated')  }}</option>
                            <option value="milage">{{ trans('app.app_common.milage')  }}</option>
                            <option value="price">{{ trans('app.app_common.price')  }}</option>
                            <option value="year">{{ trans('app.app_common.year')  }}</option>
                         </select>
                         <input class="order" type="submit" name="submit" id="ordering" data-val="ASC">
                         <select class="sold_sort">
                            <option selected value="">{{ trans('app.menus.all_cars')  }}</option>
                            <option value="0">{{ trans('app.menus.unsold')  }}</option>
                            <option value="1">{{ trans('app.menus.sold')  }}</option>
                         </select>
                      </div>
                   </div>
                   <table>
                      <thead>
                         <th>{{ trans('app.app_common.image') }}</th>
                         <th>{{ trans('app.app_common.details') }}</th>
                         <th>{{ trans('app.menus.sold') }} {{ trans('app.app_common.status') }}</th>
                         <th>{{ trans('app.app_common.status') }}</th>
                         <th>Validity</th>
                         <th>{{ trans('app.app_common.date') }}</th>
                         <th>{{ trans('app.app_common.actions') }}</th>
                      </thead>
                      <tbody id="custom-record">
                            @include('user.car_ad._carlist')
                      </tbody>
                   </table>
                </div>
             </div>
    {{-- <section class="car-details">
        <div class="inner pd">
            <div class="container">
                <div class="inner-title">car details</div>
                <div class="details">
                    <table class="table" width="100%">
                        <thead style="text-align:left">
                            <th>car id</th>
                            <th>Detail</th>
                            <th>sold status</th>
                            <th>post date</th>
                            <th>actions</th>
                            
                        </thead>

                        <tbody>
                            @foreach($carAd as $record)
                            <tr>
                                <td>{{ $record->id }}</td>
                                <td>{{ $record->title }}</td>
                                <td>unsold</td>
                                <td>{{ $record->status == 1 ? 'Active' : 'Inactive'  }}</td>
                                <td>
                                      <a href="{{ route('user.car_ad.edit',$record->id) }}" class="call_ajax_form">Edit</a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
    </section> --}}
</div>
@endsection

@section('scripts_additional')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

<script>
    $(document).on('click','.delete-btn',function(event){
        event.preventDefault();
        if(confirm('Are you sure you want to delete?')) {
            var id = $(this).attr('data-id');
            var url = "{{ route('user.car_ad.destroyAd',':id') }}";
            url = url.replace(':id',id);
            $.ajax({
                url : url,
                method : 'DELETE',
                data : { '_token' : '{{ csrf_token() }}' },
                success : function(response) {
                   // console.log(response);
                    window.location.reload();
                }, error : function(response) {
                    window.location.reload();
                }
            });
        }
    });
    $('.sort').on('change',function(){
       // alert($(this).children('option:selected').text());
       $('.add_loader').show();
        var url = "{{ route('car_ad.carSort') }}";
        var param = $(this).val();
        var order = $('.order').attr('data-val');
            // alert(order);
        var is_sold = $('.sold_sort').val();
       // alert(param);
        $.ajax({
            url: url,
            method : 'post',
            data : {'param' :param,'order' :order,'is_sold' : is_sold, '_token' : '{{ csrf_token() }}'},
            success : function(response)
            {
                $('.add_loader').hide();
                console.log(response);
                $('#custom-record').html(response);
               // window.location.reload();
            }, error : function(response) {
                console.log(response);
                //window.location.reload();
            }
        });


    });
    $('.order').click(function(){
        $('.add_loader').show();
        var order = 'ASC';
        $(this).toggleClass('up')
        if(this.className == 'order up')
        {
            order = 'DESC';
        }
        //alert(order);
        $('.order').attr('data-val',order);
        var param = $('.sort').val();
        var is_sold = $('.sold_sort').val();
        //alert(param);
        var url = "{{ route('car_ad.carSort') }}";
        $.ajax({
            url: url,
            method : 'post',
            data : {'param' : param,'order' :order,'is_sold' : is_sold, '_token' : '{{ csrf_token() }}'},
            success : function(response)
            {
                $('.add_loader').hide();
               // console.log(response);
                $('#custom-record').html(response);
            // window.location.reload();
            }, error : function(response) {
              //  console.log(response);
               // window.location.reload();
            }
        
        });
    });
    $('.sold_sort').change(function(){
        $('.add_loader').show();
        var order = $('.order').attr('data-val');
             //alert(order);
        var param = $('.sort').val();
        var is_sold = $('.sold_sort').val();
       //alert(order+ ' '+is_sold);
        var url = "{{ route('car_ad.carSort') }}";
        $.ajax({
            url: url,
            method : 'post',
            data : {'param' : param,'order' :order, 'is_sold' : is_sold,'_token' : '{{ csrf_token() }}'},
            success : function(response)
            {
                $('.add_loader').hide();
               // console.log(response);
                $('#custom-record').html(response);
            // window.location.reload();
            }, error : function(response) {
                //console.log(response);
               // window.location.reload();
            }
        
        });
    });
    $('.markSold').on('click',function(){
       // event.preventDefault();
        var record_id = $(this).data('value');
        
        if(confirm('Are you sure to mark it as sold? ')) {
            
            var url = "{{ route('user.car_ad.markAsSold',':id') }}";
            url = url.replace(':id',record_id);
           
            $.ajax({
                url : url,
                method : 'post',
                data : { '_token' : '{{ csrf_token() }}' },
                success : function(response) {
                   window.location.reload();
                }, error : function(response) {
                    window.location.reload();
                }
            });
        }
    });
    $('.renew').on('click',function(e){
         e.preventDefault();
         var record_id = $(this).data('value');
         
         if(confirm('Are you sure to extend validity for 2weeks? ')) {
             
             var url = "{{ route('user.car_ad.renew',':id') }}";
             url = url.replace(':id',record_id);
            
             $.ajax({
                 url : url,
                 method : 'post',
                 data : { '_token' : '{{ csrf_token() }}' },
                 dataType : 'json',
                 success : function(response) {
                    $('#ex2').modal('show');
                    $('#extended_date').text(response.renew);
                     //console.log(response.renew);
                   // window.location.reload();
                 }, error : function(response) {
                    //console.log("er"+response);
                     window.location.reload();
                 }
             });
         }
     });
    $(document).ready(function(){
        var is_live = "{{ (Session::has('is_live')) ? Session::get('is_live') : '' }}";
        var not_post = "{{ (Session::has('no_post')) ? Session::get('no_post') : '' }}";
        console.log(not_post);
        if(is_live == 0 && is_live != '')
        {
            //console.log(is_live_set);
        
            $('#ex1').modal('show');
        }
        if(not_post == 1)
        {
            $('#ex3').modal('show');
        }
       
       
        //
    });
</script>
@endsection

