<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
    .container{
        display:flex;
        /* justify-content:center;
        align-items:center; */
        flex-direction:column;
    }
    .align-row{
        display:flex;
        /* justify-content:center;
        align-items:center; */
        flex-direction:row;
        margin:2em;
    }
    .item{
        margin:2em;
    }
</style>


</head>
<body>
    <div class="container">
<a class="mt-4 btn btn-success"href="{{URL('adddata')}}">Refresh</a>
<!-- Add patient -->
<div class="align-row">
<div class="item">
    <form action="{{URL('createpatient')}}" method="post">
    @csrf
    <h1>Create patient</h1>
    <input type="text" name="Patient_name" placeholder="Patient's name">
    <button type="submit">Submit</button>
    </form>
</div>

<!---End of add patient------>

<!-- Add doctor -->
<div class="item">
    <form action="{{URL('createdoctor')}}"  method="post">
    @csrf
    <h1>Create doctor</h1>
    <input type="text" name="Doctor_name" placeholder="Doctor's name "><br><br>

    <label for="">Is the doctor AI trained</label>
    <select  name="AI_trained">
    
    <option value="yes">Yes</option>
    <option value="no">No</option>   
    </select>
    <br><br>
    <button type="submit">Submit</button>
    </form>
    </div>
<!-- End of Add doctor -->
</div>




<!-- Adding services -->
<div class="align-row">
<div class="item">
    <form action="{{URL('createservice')}}"  method="post">
    @csrf
    <h1>Add services</h1>
    <input type="text" name="Doctor_name" placeholder="Doctor's name "><br><br>

    <label for="">Patient ID</label><br><br>
    <select  name="patient_id">
    @foreach($patients as $patients)
    <option value="{{$patients->Patient_id}} ">{{$patients->Patient_id}} {{$patients->Patient_name}}</option>
  @endforeach
 
    </select><br><br>

    <label for="">Doctor ID</label><br><br>
    <select  name="doctor_id">
    @foreach($doctors as $doctors)
    <option value="{{$doctors->Doctor_id}}">{{$doctors->Doctor_id}} {{$doctors->Doctor_name}}</option>
  @endforeach
    </select></br><br>
    <input type="number" name="waiting_time" placeholder="Waiting time "><br><br>
    <input type="number" name="service_time" placeholder="Service time"><br><br>

    <label for="">Fees</label>
    <select  name="fees">
    <option value="3000">Checkup-Ksh.3000</option>
    <option value="20000">Lung treatment-Ksh.20000</option>   
    </select><br><br>

    <label for="">Diagnosis</label><br><br>
<textarea name="diagnosis" id="" cols="30" rows="10">

</textarea><br><br>


    <button type="submit">Submit</button>
    </form>
</div>
<!-- End add services -->









<!-- create a rating  -->
<div class="item">
    <form action="{{URL('createrating')}}"  method="post">
    @csrf
    <h1>Add rating</h1>



    <label for="">Rating score</label>
    <select  name="score">
    
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
   
    </select>
    <br><br>

    <label for="">Patient ID</label><br><br>
    <select  name="patient_id">
    @foreach($rating as $rating)
    <option value="{{$rating->Patient_id}} ">{{$rating->Patient_id}} {{$rating->Patient_name}}</option>
  @endforeach
 
    </select><br><br>


    <label for="">Comments</label><br><br>
<textarea name="comments" id="" cols="30" rows="10">

</textarea><br><br>

    <button type="submit">Submit</button>
    </form>
</div>
    </div>
</body>
</html>