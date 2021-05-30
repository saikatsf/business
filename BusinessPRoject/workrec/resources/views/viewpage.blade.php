<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@include('header')
<br>

<div class="table-responsive-xl">
    <table class="table text-center">
        <tr style="font-size: 30px; font-weight: bold">
            <td>Challan No.</td>
            <td>Date</td>
            <td>Status</td>
            <td colspan=2></td>
        </tr>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record['challan_id'] }}</td>
                <td>{{ date('d-m-Y', strtotime($record['date'])) }}</td>
                <td style="padding:10px">
                    {{ ucfirst($record['status']) }}
                    <a href={{ "statchange/".$record['challan_id'] }}>
                        <button id="statuschange" class="btn btn-warning" style="margin-left: 5px">Change</button>
                    </a>
                </td>
                <td><a href={{ "view/".$record['challan_id'] }}> <button class="btn btn-success"> View </button> </a></td>
                <td><a href={{ "delete/".$record['challan_id'] }}> <button class="btn btn-danger">Delete</button>  </a></td>
            </tr>
        @endforeach
    </table>
</div>
<br><br>
<p class="text-decoration-none text-center"><a href="/">Back to home </a></p>

<br>
@include('footer')
