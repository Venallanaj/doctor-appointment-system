@extends('admin.layouts.master')

@section ('content')

<div class="page-header">
     <div class="row align-items-end">
         <div class="col-lg-8">
             <div class="page-header-title">
                 <i class="ik ik-edit bg-blue"></i>
                 <div class="d-inline">
                     <h5>Doctors</h5>
                     <span>add doctor</span>
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
        @if(Session::has('message'))
           <div class="alert alert-success">
               {{Session::get('message')}}
           </div>
         @endif
        <div class="card">
            <div class="card-header"> <h3>Add Doctor</h3></div>
            <div class="card-body">
                 <form class= "forms-sample" action= "{{route('doctor.store')}}" method="post" enctype="multipar/form-data"> @csrf
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"  value="{{old('name')}}" >
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                        @enderror
                        </div>
                        
                        <div class="col-lg-6"><label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email"  value="{{old('email')}}" >
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6"> <label for="">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"  value="{{old('password')}}">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                        @enderror

                        
                        </div>
                        
                        <div class="col-lg-6"><label for="">Gender</label>
                      
                        <select name="gender" id="" class="form-control  @error('gender') is-invalid @enderror"  value="{{old('gender')}}">
                            <option value=""name="gender">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        
                        </select>
                        @error('gender')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Highest Education</label>
                        <input type="text" class="form-control   @error('education') is-invalid @enderror" placeholder="doctor highest degree" name="education" value="{{old('education')}}">

                        @error('education')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                        
                        <div class="col-lg-6"><label for="">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{old('address')}}">
                        @error('address')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6"> <label for="">Specialist</label>
                        <input type="text" class="form-control @error('department') is-invalid @enderror" placeholder="Specialiste" name="department" value="{{old('department')}}">
                        @error('department')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                        
                        <div class="col-lg-6"><label for="">Phone Number</label>
                        <input type="text" class="form-control  @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number" value="{{old('phone_number')}}">
                        @error('phone_number')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Image</label>

                                <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"   name="image" placeholder="Upload Image"  >
                                <span class="input-group-append">
                                </span>
                                @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                           
                            </div>
                           
                            </div>
                            <div class="col-md-6">
                                <label for="">Role</label>
                                <select name="role_id" id="" class="form-control @error('role_id') is-invalid @enderror" value="{{old('role_id')}}">
                                    <option value="">Please select role</option>
                                    @foreach(App\Role::where('name', '!=', 'patient')->get() as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                       
                    </div>
                    <div class="form-group">
                         <label for="">Textarea</label>
                         <textarea class="form-control @error('description') is-invalid @enderror" id="" rows="4" name="description" value="{{old('description')}}"></textarea>
                         @error('description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                    </div>
                         <button type="submit" class="btn btn-primary mr-2">Submit</button>
                         <button class="btn btn-light">Cancel</button>
                 </form>
            </div>
        </div>
    </div>
</div>


@endsection