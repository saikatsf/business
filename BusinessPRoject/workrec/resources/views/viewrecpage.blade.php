<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@include('header')
<div class="main">
<hr>
<header style="text-align: center">
    <h1 >Sristidhar Engineering</h1>
    <h6>45, Fakir Das Mondal Lane, Kadamtala, Howrah-711101</h5>
</header>
<hr>

<div id="challan_dtls">
    <span><b> Challan no. : </b>{{ $crecords[0]['challan_id'] }}</span>
    <span><b> Billing Date : </b>{{ date('d-m-Y', strtotime($crecords[0]['date'])) }}</span>
</div>
<br>
<table class="table table-bordered text-center">
    <tr style="font-size: 20px; font-weight: bold">
        <td>SL No.</td>
        <td>Quantity</td>
        <td>Products</td>
        <td>Rate</td>
        <td>Total</td>
    </tr>
    @php $count = 0; $total=0; @endphp
    @foreach ($records as $record)
        <tr>
            <td>{{ ++$count }}</td>
            <td>{{ $record['quantity'] }}</td>
            <td>
                {{ $record['size']}}"
                {{ strtoupper($record['type']) }} Flange 
                CL-{{ $record['classes'] }}<br>
                <span style="font-size:12px">
                @if($record['note'] != "no note")
                    Note : {{ ucwords($record['note']) }}
                @endif
                </span>
            </td>
            <td>{{ $record['rate'] }}</td>
            <td>{{ $record['total'] }}</td>
            @php
                $total +=$record['total'];
            @endphp
        </tr>
    @endforeach
</table>
<div style="float:right;">
    <span>Gross Total : </span><input type="text" id="grosstotal" style="text-align:center;" readonly value="{{ $total }}">    
</div>
<br>
<div id="after_table">
    <a href="/viewc" style="margin-bottom: 100px;" id="test"></a>
</div>


@include('footer')
</div>


<style>
    .main{
        height: 100vh;
    }
    #after_table{
        margin-bottom: 50%;
        position: absolute;
        text-decoration: none;
        text-align: center;
        width: 100%;
    }
    #test{
        content: 'hiiiiiii';
    }
    #challan_dtls{
        box-sizing: border-box;
        width: 100%;
        padding: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<script>
    $(document).ready(function(){
        $("#test").html("Back to View Page");
    });
</script>