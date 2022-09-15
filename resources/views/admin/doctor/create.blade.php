@extends('admin.layouts.master')

@section ('content')

<div class="page-header">
     <div class="row align-items-end">
         <div class="col-lg-8">
             <div class="page-header-title">
                 <i class="ik ik-edit bg-blue"></i>
                 <div class="d-inline">
                     <h5>Doctors</h5>
                     <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                 </div>
             </div>
         </div>
         <div class="col-lg-4">
             <nav class="breadcrumb-container" aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="../index.html"><i class="ik ik-home"></i></a>
                     </li>
                     <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Create</li>
                 </ol>
             </nav>
         </div>
     </div>

</div>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header"> <h3>Add Doctor</h3></div>
            <div class="card-body">
                 <form class= "forms-sample" action= "{{route('doctor.store')}}" method= "post">
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" name= "name">
                        </div>
                        
                        <div class="col-lg-6"><label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email"  name= "email">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="Password" name="password">
                        </div>
                        
                        <div class="col-lg-6"><label for="">Gender</label>
                      
                        <select name="gender" id="" class="form-control">
                            <option value=""name="gender">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Highest Education</label>
                        <input type="text" class="form-control" placeholder="doctor highest degree" name="education">
                        </div>
                        
                        <div class="col-lg-6"><label for="">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Specialist</label>
                        <input type="text" class="form-control" placeholder="Specialiste" name="department">
                        </div>
                        
                        <div class="col-lg-6"><label for="">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">

                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Image</label>
                           
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info"   name="image" placeholder="Upload Image">
                                <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Brows photo</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="">Textarea</label>
                         <textarea class="form-control" id="" rows="4" name="description"></textarea>
                    </div>
                         <button type="submit" class="btn btn-primary mr-2">Submit</button>
                         <button class="btn btn-light">Cancel</button>
                 </form>
            </div>
        </div>
    </div>
</div>


@endsection