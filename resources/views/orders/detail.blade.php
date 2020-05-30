@extends('layouts.app')

@section('content')

<div class="container">
    <div class="data justify-content-center">
        <div class="col-md-12">
            <div class="card my-2">
                <div class="card-header" style="background-color:#494B4B; color: white"><strong> วิชาที่ลงทะเบียน </strong></div>
                    {{-- <div class="card-body"> --}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"><center>รหัสวิชา</center></th>
                                <th scope="col"><center>ชื่อวิชาภาษาไทย</center></th>
                                <th scope="col"><center>ชื่อวิชาภาษาอังกฤษ</center></th>
                                <th scope="col"><center>ราคา</center></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orderitems as $data)
                                <tr>
                                    <th scope="row">{{$data->item_code}}</th>
                                    <th scope="row">{{$data->nameTH}}</th>
                                    <th scope="row">{{$data->nameEN}}</th>
                                    <td>{{number_format($data->item_price)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- </div> --}}
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-3">
                        <a class="btn btn-primary check_out col-sm-1" href="/order/show/{{$data->id}}">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
