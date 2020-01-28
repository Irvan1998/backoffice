@extends('payment/payment')
@section('content')

<style> 
.table{
                    width: 100%;
                    margin-top: 10px;
                    border-collapse: collapse;
                }
                .table th, .table td{
                    border: 1px solid #696969;
                    padding: 10px;
                    /* font-family: arial; */
                    color: #000000;
                }
                .table th{
                    font-size: 14px;
                    background: #778899;
                }
                .table td{
                    background: #F8F8FF;
                    padding: 10px 10px;
                    font-size: 15px;
                }
               

                </style>
<div class="row">
    <div class="col-20">
        <div class="card1">
            <div class="card-header">
                <div class="card-tools">
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row1">
                <div class="col-md-20">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>PAYMENT CONFIRM</th>
                                <th>DATE PAYMENT</th>
                                <th>ID ORDER</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id_payment}}</td>
                                <td class="text-center"><img src="{{ asset('storage/'.$payment['payment_confirm']) }}" width="100"/></td>
                                <td>{{ $row->created_at}}</td> 
                                <td>{{ $row->id_order}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection