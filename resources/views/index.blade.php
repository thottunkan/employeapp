@extends("layout")

@section("content")
<div class="container-fluid">
    <div class="row img-fluid" style="width: 600px;margin: auto;margin-top: 50px;">
        <div class="col">
            <form action="">
                <table class="table table-borderless">
                <tr>
                    <td></td>
                    <td>
                    
                        
                        <h4>Add Employe</h4>
                        
                    </td>
                </tr>
                    <tr>
                        <td><label for="">Employe Name</label></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Employe code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pincode</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-primary form-control"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection