<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/insert.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/insert.js') }}"></script>


@include('header')
<br>

<form action="insertdata" method="post" class="text-center" id="myform">
    @csrf
    <table id="inserttable" class="table table-striped text-center">
        <tr>
            <th>QUANTITY</th>
            <th>SIZE</th>
            <th>TYPE</th>
            <th>CLASS</th>
            <th>RATE</th>
            <th>TOTAL</th>
            <th>NOTE</th>
            <th>REMOVE</th>
        </tr>

        <tr id="record_1">
            <input type="hidden" name="cid" value={{ $cid }}>
            <td><input type="text" id="quantity_1" name="quantity[]" placeholder="Enter No. of Products" onkeyup="return qty(1)"></td>
            <td>
                <select name="sizes[]">
                    <option value="" disabled selected hidden>Choose Size</option>
                    <option value="8">8 Inches</option>
                    <option value="10">10 Inches</option>
                    <option value="12">12 Inches</option>
                    <option value="14">14 Inches</option>
                    <option value="16">16 Inches</option>
                    <option value="18">18 Inches</option>
                    <option value="20">20 Inches</option>
                    <option value="24">24 Inches</option>
                </select>
            </td>
            <td>
                <select name="types[]">
                    <option value="" disabled selected hidden>Choose Type</option>
                    <option value="sorf">SORF</option>
                    <option value="wnrf">WNRF</option>
                    <option value="slip-on">SLIP - ON</option>
                </select>
            </td>
            <td>
                <select name="classes[]">
                    <option value="" disabled selected hidden>Choose Class</option>
                    <option value="150">150 Lbs.</option>
                    <option value="300">300 Lbs.</option>
                    <option value="600">600 Lbs.</option>
                </select>
            </td>
            <td><input type="text" id="rate_1" name="rate[]" placeholder="Enter Rate" onkeyup="return rates(1)"></td>
            <td><input type="text" id="amount_1" name="amount[]" class="amount" readonly></td>
            <td><input type="text" name="note[]" placeholder="Enter Any Note "></td>
            <td><input type="button" value="Remove" class="btn btn-danger" disabled style="visibility: hidden"></td>
        </tr>
    </table>
    <button type="submit" id="save" class="btn btn-success btn-lg">Save</button>
</form>
<label for="subtotal" id="subtotallabel">SubTotal</label>
<input type="text" id="subtotal" name="subtotal" disabled>
<button id="add" class="btn btn-warning">+ Add More Rows</button>
<button id="removeall" class="btn btn-danger">Remove All</button><br><br>

<div class="text-center">
    <a href="cancel/{{$cid}}">
        <button id="cancel btn" class="btn btn-danger" >Cancel & Exit</button><br><br>    
    </a>
</div>



<br>
@include('footer')

<script>
    $(document).ready(function(){
        var i = 1;
        $("#add").click(function(){
            i++;
            var extrarow = '<tr id="record_'+i+'"><td><input type="text" id="quantity_'+i+'" name="quantity[]" placeholder="Enter Number of Products" onkeyup="return qty('+i+')"></td><td><select name="sizes[]"><option value="" disabled selected hidden>Choose Size</option><option value="8">8 Inches</option><option value="10">10 Inches</option><option value="12">12 Inches</option><option value="14">14 Inches</option><option value="16">16 Inches</option><option value="18">18 Inches</option><option value="20">20 Inches</option><option value="24">24 Inches</option></select></td><td><select name="types[]"><option value="" disabled selected hidden>Choose Type</option><option value="sorf">SORF</option><option value="wnrf">WNRF</option><option value="slipon">SLIP - ON</option></select></td><td><select name="classes[]"><option value="" disabled selected hidden>Choose Class</option><option value="150">150 Lbs.</option><option value="300">300 Lbs.</option><option value="600">600 Lbs.</option></select></td><td><input type="text" id="rate_'+i+'" name="rate[]" placeholder="Enter Rate" onkeyup="return rates('+i+')"></td><td><input type="text" id="amount_'+i+'" name="amount[]" class="amount" readonly></td><td><input type="text" name="note[]" placeholder="Enter Any Note "></td><td><input type="button" class="btn btn-danger" name="remove" value="Remove" onclick="return remove('+i+')"></td></tr>';
            $("#inserttable").append(extrarow);

        });
        $("#removeall").click(function(){
            document.getElementById("myForm").reset();
        });
    });
</script>